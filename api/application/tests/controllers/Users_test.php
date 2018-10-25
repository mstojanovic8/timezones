<?php

class Users_test extends TestCase
{
    private static $url = 'users/';


    private static $insertUser = array('username' => 'testUser', 'name' => 'testUser', 'password' => 'testPassword', 'roleId' => 1);

    private static $newUser = ['username' => 'testUsername1', 'name' => 'testName1', 'password' => 'testPassword1', 'roleId' => 1];

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $CI =& get_instance();

        $CI->db->where('username', self::$insertUser['username'])
            ->delete('users');


        $CI->load->library('uuid');
        self::$insertUser['uuid'] = $CI->uuid->generate_uuid();


        self::$newUser['uuid'] = $CI->uuid->generate_uuid();

        $CI->db->insert('users', self::$newUser);
    }

    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        $CI =& get_instance();
        $CI->db->where('username', self::$newUser['username'])
            ->delete('users');
    }
    public function setUp()
    {
        $this->request->setHeader('Content-Type', 'application/json');
    }


    public function test_insert_user()
    {

        try {
            $insertOutput = $this->request('POST', 'users', json_encode(self::$insertUser));
        } catch (CIPHPUnitTestExitException $e) {
            $insertOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);

    }


    public function test_get_all_users()
    {
        try {
            $usersOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $usersOutput = ob_get_clean();
        }

        $data = json_decode($usersOutput, TRUE);

        $this->assertResponseCode(200);
        $this->assertGreaterThan('0', count($data));

    }


    public function test_update_user()
    {
        try {
            $allUsersOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $allUsersOutput = ob_get_clean();
        }

        $allUsers = json_decode($allUsersOutput);

        $this->assertGreaterThan(1, count($allUsers), 'Only one user in database');

        $user = $allUsers[1];

        $user->name = strlen($user->name > 45) ? 'name_test' : $user->name . '_test1';
        $user->username = strlen($user->username > 45) ? 'username_test' : $user->username . '_test1';
        $user->roleId = rand(1, 3);

        try {
            $updateOutput = $this->request('PUT', self::$url . $user->uuid, json_encode($user));
        } catch (CIPHPUnitTestExitException $e) {
            $updateOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);

        try {
            $allUsers = $this->request('GET', 'users');
        } catch (CIPHPUnitTestExitException $e) {
            $allUsers = ob_get_clean();
        }

        $this->assertResponseCode(200);

        $users = json_decode($allUsers);

        $usr = null;

        foreach ($users as $retUser) {
            if ($retUser->uuid == $user->uuid) {
                $usr = $retUser;
                break;
            }
        }

        $this->assertNotEquals(null, $usr, 'User not updated');

        if ($usr) {
            $this->assertEquals($user->username, $usr->username);
            $this->assertEquals($user->name, $usr->name);
        }
    }

    public function test_delete_user()
    {
        try {
            $this->request->setHeader('Content-Type', 'application/json');
            $loginOutput = $this->request('POST', 'auth/login', json_encode(['username' => 'testAdmin', 'password' => 'testPassword']));
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }

        $tokenData = json_decode($loginOutput);

        $this->assertObjectHasAttribute('token', $tokenData);

        Globals::setAuthToken(Authorization::validate_token($tokenData->token));


        try {
            $allUsersOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $allUsersOutput = ob_get_clean();
        }

        $allUsers = json_decode($allUsersOutput);

        $this->assertGreaterThan(1, count($allUsers), 'Only one user in database');

        $index = rand(1, count($allUsers));
        $user = $allUsers[1];


        try {

            $deleteOutput = $this->request('DELETE', 'users/' . $user->uuid);
        } catch (CIPHPUnitTestExitException $e) {
            $deleteOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);
    }
}