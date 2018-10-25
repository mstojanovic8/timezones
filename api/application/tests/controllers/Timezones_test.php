<?php

class Timezones_test extends TestCase
{
    private static $url = 'timezones/';

    private static $userData = array('username' => 'testAdmin', 'password' => 'testPassword');

    private static $newUser = array('username' => 'timezoneUser', 'password' => 'testPassword', 'name' => 'timezoneUser', 'roleId' => 1);

    private static $timezoneData = array('name' => 'Timezone 123', 'city' => 'Belgrade', 'differenceGMT' => '-1');

    private static $newTimezoneData = array('name' => 'Timezone New', 'city' => 'Athens', 'differenceGMT' => '+2');


    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $CI =& get_instance();

        $CI->db->where('name', self::$timezoneData['name'])
            ->delete('timezones');

        self::$newUser['uuid'] = $CI->uuid->generate_uuid();

        $CI->db->insert('users', self::$newUser);

        $userId = $CI->db->insert_id();
        self::$newTimezoneData['userId'] = $userId;

        self::$timezoneData['uuid'] = $CI->uuid->generate_uuid();

        self::$newTimezoneData['uuid'] = $CI->uuid->generate_uuid();
        $CI->db->insert('timezones', self::$newTimezoneData);
    }

    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        $CI =& get_instance();
        $CI->db->where('username', self::$newUser['username'])
            ->delete('users');

        $CI->db->where('name', self::$newTimezoneData['name'])
            ->delete('timezones');

    }

    protected function setUp()
    {
        $this->request->setHeader('Content-Type', 'application/json');
    }

    public function test_test()
    {
        $this->assertEquals(2, 2);
    }

    public function test_insert_timezone()
    {

        try {
            $this->request->setHeader('Content-Type', 'application/json');
            $loginOutput = $this->request('POST', 'auth/login', json_encode(self::$userData));
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }
        $tokenData = json_decode($loginOutput);

        $this->assertObjectHasAttribute('token', $tokenData, 'Login Failed');

        Globals::setAuthToken(Authorization::validate_token($tokenData->token));


        try {
            $this->request->setHeader('Authorization', $tokenData->token);
            $insertOutput = $this->request('POST', self::$url, json_encode(self::$timezoneData));
        } catch (CIPHPUnitTestExitException $e) {
            $insertOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);

    }

    public function test_get_all_timezones()
    {
        try {
            $timezonesOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $timezonesOutput = ob_get_clean();
        }

        $data = json_decode($timezonesOutput, TRUE);
        $this->assertResponseCode(200);
        $this->assertGreaterThan('0', count($data));
    }


    public function test_update_timezone()
    {
        try {
            $this->request->setHeader('Content-Type', 'application/json');
            $loginOutput = $this->request('POST', 'auth/login', json_encode(self::$userData));
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }
        $tokenData = json_decode($loginOutput);

        $this->assertObjectHasAttribute('token', $tokenData);

        try {
            $allTimezonesOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $allTimezonesOutput = ob_get_clean();
        }

        $allTimezones = json_decode($allTimezonesOutput);

        $this->assertResponseCode(200);
        $this->assertGreaterThan(0, count($allTimezones), 'No timezones in database');

        $timezone = $allTimezones[0];
        $timezone->name = strlen($timezone->name > 95) ? 'name_test' : $timezone->name . '_test';
        $timezone->city = strlen($timezone->city > 95) ? 'city_test' : $timezone->city . '_test';
        $timezone->differenceGMT = rand(-12, 14);

        Globals::setAuthToken(Authorization::validate_token($tokenData->token));

        try {
            $updateOutput = $this->request('PUT', self::$url . $timezone->uuid, json_encode($timezone));
        } catch (CIPHPUnitTestExitException $e) {
            $updateOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);

        try {
            $allTimezones = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $allTimezones = ob_get_clean();
        }

        $responseData = json_decode($allTimezones);
        $tzone = null;
        foreach ($responseData as $selectedTimezone) {
            if ($selectedTimezone->uuid == $timezone->uuid) {
                $tzone = $selectedTimezone;
                break;
            }
        }
        $this->assertEquals($tzone->name, $timezone->name);
        $this->assertEquals($tzone->city, $timezone->city);
        $this->assertEquals($tzone->differenceGMT, $timezone->differenceGMT);

    }

    public function test_delete_timezone()
    {
        try {
            $loginOutput = $this->request('POST', 'auth/login', json_encode(self::$userData));
        } catch (CIPHPUnitTestExitException $e) {
            $loginOutput = ob_get_clean();
        }

        $tokenData = json_decode($loginOutput);

        $this->assertObjectHasAttribute('token', $tokenData);


        try {

            $allTimezonesOutput = $this->request('GET', self::$url);
        } catch (CIPHPUnitTestExitException $e) {
            $allTimezonesOutput = ob_get_clean();
        }

        $allTimezones = json_decode($allTimezonesOutput);

        $this->assertResponseCode(200);
        $this->assertGreaterThan(0, count($allTimezones), 'No timezones in database');

        $timezone = $allTimezones[0];

        Globals::setAuthToken(Authorization::validate_token($tokenData->token));

        try {
            $deleteOutput = $this->request('DELETE', self::$url . $timezone->uuid);
        } catch (CIPHPUnitTestExitException $e) {
            $deleteOutput = ob_get_clean();
        }

        $this->assertResponseCode(200);
    }
}