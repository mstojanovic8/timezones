<?php


class Auth extends REST_Controller
{
    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->model('user_model');
        $this->load->model('role_model');

    }

    /**
     * Authenticates user provided
     */
    public function login_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');
        $user = $this->user_model->get_by_credentials($username, $password);
        if ($user) {

            $tokenData = array();
            $tokenData['userId'] = $user->uuid;
            $tokenData['timestamp'] = now();
            $tokenData['role'] = $user->roleName;

            $response['token'] = Authorization::generate_token($tokenData);

            $this->response($response, REST_Controller::HTTP_OK);


        } else
            $this->response(['success' => false, 'message' => Constants::$errorMessages['invalidUsernamePassword']], REST_Controller::HTTP_UNAUTHORIZED);
        return;
    }

    /**
     * User registration
     * Added CIPHPUnitTestExitException in order to make unit test to work
     */
    public function register_post()
    {
        $userData = array(
            'name' => $this->post('name'),
            'username' => $this->post('username'),
            'password' => $this->post('password'),
            'roleId' => $this->post('roleId')
        );

        try {
            $tokenData = array();
            $user = $this->user_model->create($userData);
            $tokenData['userId'] = $user['uuid'];
            $tokenData['timestamp'] = now();
//            $tokenData['role'] = $this->role_model->get_role($roleId);
            $tokenData['role'] = $user['role'];

            $response['token'] = Authorization::generate_token($tokenData);

            $this->response($response, REST_Controller::HTTP_OK);
        } catch (CIPHPUnitTestExitException $ex) {
            return;
        } catch (Exception $e) {
            $this->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
    }

    /**
     * Role getter for dropdowns
     */
    public function roles_get()
    {
        $response = $this->role_model->get_all();
        $this->set_response($response, REST_Controller::HTTP_OK);
    }
}
