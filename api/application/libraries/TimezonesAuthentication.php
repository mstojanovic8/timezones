<?php

class TimezonesAuthentication implements IRouteBasedAuthentication
{

    public function authorize($token, $CI)
    {

        if ($token->role == Constants::$roles['userManager']) {
            throw new Exception(Constants::$errorMessages['roleNotAllowed']);
        }

        if ($token->role == Constants::$roles['regularUser'] && $CI->input->method() == 'put') {
            $userId = $CI->db->select('users.id')->from('users')->where('uuid', $token->userId)->get()->row()->id;

            if ($CI->put('userId') != $userId) {
                throw new Exception(Constants::$errorMessages['notAllowedToEditTimezone']);
            }
        }

//        if ($token->role == Constants::$roles['regularUser'] && $CI->input->method() == 'put' && $CI->put('userId') != $token->userId) {
//            throw new Exception(Constants::$errorMessages['notAllowedToEditTimezone']);
//        }
    }
}