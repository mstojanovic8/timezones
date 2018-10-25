<?php

class UsersAuthentication implements IRouteBasedAuthentication
{

    public function authorize($token, $CI)
    {
        if ($token->role == Constants::$roles['regularUser']) {
            throw new Exception(Constants::$errorMessages['roleNotAllowed']);

        }
    }
}