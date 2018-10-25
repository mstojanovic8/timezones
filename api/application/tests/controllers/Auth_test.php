<?php

class Auth_test extends TestCase
{
    private static $url = 'auth/';

    private static $user = ['username' => 'testAdmin', 'name' => 'testAdmin', 'password' => 'testPassword', 'roleId' => 1];


    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $CI =& get_instance();
//        print_r($CI);
//        $this->markTestSkipped('all tests in this file are invactive for this server configuration!');
//        $CI->request->setHeader('Content-Type', 'application/json');

        $CI->db->where('username', self::$user['username'])
            ->delete('users');
    }


    protected function setUp()
    {
//        $this->markTestSkipped('all tests in this file are invactive for this server configuration!');
        $this->request->setHeader('Content-Type', 'application/json');
    }

    public function test_register()
    {

        try {
            $registerOutput = $this->request('POST', self::$url . 'register', json_encode(self::$user));
        } catch (CIPHPUnitTestExitException $e) {
            $registerOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);
    }

    public function test_login()
    {
        try {
            $loginOutput = $this->request('POST', self::$url . 'login', ['username' => 'testAdmin', 'password' => 'testPassword']);
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }

        $tokenData = json_decode($loginOutput);
        $this->assertObjectHasAttribute('token', $tokenData);

    }



    public function test_register_no_username()
    {
        $userData = ['name' => 'newName', 'password' => 'newPassword', 'roleId' => rand(1, 3)];

        try {
            $registerOutput = $this->request('POST', self::$url . 'register', json_encode($userData));
        } catch (CIPHPUnitTestExitException $e) {
            $registerOutput = ob_get_clean();
        }

        $this->assertResponseCode(400);
    }

    public function test_login_invalid_user()
    {
        $userData = ['username' => 'username', 'password' => '123213213213213'];
        try {
            $loginOutput = $this->request('POST', self::$url . 'login', json_encode($userData));
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }


        $tokenData = json_decode($loginOutput);
        $this->assertResponseCode(401);

    }
}