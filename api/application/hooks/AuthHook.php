<?php
require_once(APPPATH . "/libraries/IRouteBasedAuthentication.php");
require_once(APPPATH . "/libraries/TimezonesAuthentication.php");
require_once(APPPATH . "/libraries/UsersAuthentication.php");


class AuthHook
{

    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function isAuthenticated()
    {

        if ($this->CI->router->class == 'auth') {
            return;
        }


        $headers = $this->CI->input->request_headers();


        if (!Authorization::auth_header_exists(($headers))) {
            $this->CI->response(['success' => false, 'message' => Constants::$errorMessages['missingAuthHeader']], REST_Controller::HTTP_UNAUTHORIZED);
            return;
        }

        $decodedToken = Authorization::validate_token($headers['Authorization']);


        if (!$decodedToken) {
            $this->CI->response(['success' => false, 'message' => Constants::$errorMessages['badToken']], REST_Controller::HTTP_UNAUTHORIZED);
            return;
        }


        $routeClass = ucfirst($this->CI->router->class) . 'Authentication';

        $routeAuth = new $routeClass();

//        if ($this->CI->router->class == Constants::$restRoutes[1]) {
//            $routeAuth = new UsersAuthentication();
//        } else {
//            $routeAuth = new TimezonesAuthentication();
//        }

        try {
            $routeAuth->authorize($decodedToken, $this->CI);
        } catch (Exception $e) {
            $this->CI->response(['success' => false, 'message' => $e->getMessage()], REST_Controller::HTTP_UNAUTHORIZED);
            return;
        }

        Globals::setAuthToken($decodedToken);
        return;

    }
}