<?php

class Users extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('user_model');
    }

    public function test_post()
    {
        $userData = array(
            'name' => $this->post('name'),
            'username' => $this->post('username'),
            'password' => $this->post('password'),
            'roleId' => $this->post('roleId')
        );

        try {
            $user = $this->user_model->create($userData);
            $this->response([$user], REST_CONTROLLER::HTTP_OK);
        } catch (Exception $e) {
            $this->response([$e->getMessage()], REST_CONTROLLER::HTTP_BAD_REQUEST);
        }


    }

    /**
     * @method GET
     * @route /users
     * @param $id int user id. If provided, specified user with that id will be returned.
     * Otherwise, all users will be returned
     * @return Array of Users or one specific user.
     */
    public function index_get($id = NULL)
    {
        if ($id == null) {
            $res = $this->user_model->get_all();
        } else {
            $res = $this->user_model->get($id);
        }

        $this->response($res, REST_Controller::HTTP_OK);
        return;
    }


    /**
     * @method POST
     * @route /users
     * @param User_model User object that will be inserted
     * Added CIPHPUnitTestExitException in order to make unit test to work
     * @return User_model User that was inserted
     */
    public function index_post()
    {
        $userData = array(
            'name' => $this->post('name'),
            'username' => $this->post('username'),
            'password' => $this->post('password'),
            'roleId' => $this->post('roleId')
        );

        try {
            $user = $this->user_model->create($userData);
            $this->response($user, REST_Controller::HTTP_OK);
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
        }
        return;
    }

    /**
     * @method PUT
     * @route /users/:id
     * @param $id id of user that needs to be updated
     * @param User_model User object that needs to be updated
     * Added CIPHPUnitTestExitException in order to make unit test to work
     * @return User_model User that was updated
     */
    public function index_put($id)
    {
        $userData = array(
            'name' => $this->put('name'),
            'username' => $this->put('username'),
            'password' => $this->put('password'),
            'roleId' => $this->put('roleId')
        );

        try {
            $user = $this->user_model->update($userData, $id);
            $this->response($user, REST_Controller::HTTP_OK);
            return;
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @method DELETE
     * @route /users/:uuid
     * Added CIPHPUnitTestExitException in order to make unit test to work
     * @param $id id of user that needs to be deleted
     */
    public function index_delete($id)
    {
        $token = Globals::getAuthToken();

        try {
            $this->user_model->delete($id, $token->userId);
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}