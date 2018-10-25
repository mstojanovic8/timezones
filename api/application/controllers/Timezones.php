<?php

class Timezones extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);

        $this->load->config('form_validation');
        $this->load->model('timezone_model');
    }

    /**
     * @method GET
     * @route /timezones
     * @param $id int user uuid id . If provided, only timezones that user with
     * uuid provided created will be returned.
     * Otherwise, all timezones will be returned
     * @return Array of timezones or one specific timezone.
     */
    public function index_get($id = null)
    {
        if ($id == null) {
            $res = $this->timezone_model->get_all();
        } else {
            $res = $this->timezone_model->get($id);
        }

        $this->set_response($res, REST_Controller::HTTP_OK);
        return;
    }

    /**
     * @method POST
     * @route /timezones
     * @param array Timezone object that will be inserted
     * Added CIPHPUnitTestExitException in order to make unit test to work
     * @return Timezone_model Timezone object that was inserted
     */
    public function index_post()
    {

        $token = Globals::getAuthToken();

        $data = array(
            'name' => $this->post('name'),
            'city' => $this->post('city'),
            'differenceGMT' => $this->post('differenceGMT')
        );

        try {
            $timezone = $this->timezone_model->create($data, $token->userId);

            $this->response($timezone, REST_Controller::HTTP_OK);
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
    }

    /**
     * @method Update
     * @route /timezones/:uuid
     * @param $id int id of timezone that will be updated
     * @param array Timezone object that will be updated
     * Added CIPHPUnitTestExitException in order to make unit test to work
     * @return Timezone_model Timezone object that was updated
     */
    public function index_put($id)
    {

        $data = array(
            'name' => $this->put('name'),
            'city' => $this->put('city'),
            'differenceGMT' => $this->put('differenceGMT'),
            'userId'=>$this->put('userId')
        );


        try {
            $timezone = $this->timezone_model->update($data, $id);
            $this->response($timezone, REST_Controller::HTTP_OK);
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @method Delete
     * @route /timezones/:uuid
     * @param $id int id of timezone that will be deleted
     */
    public function index_delete($id)
    {
        try {
            $this->timezone_model->delete($id);
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}