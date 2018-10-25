<?php

class Constants
{
    public static $roles = array(
        'admin' => 'admin',
        'regularUser' => 'regularUser',
        'userManager' => 'userManager'
    );

    public static $allowedRoutes = array(
        'users', 'timezones'
    );

    public static $errorMessages = array(
        'routeNotAllowed' => 'Route not allowed',
        'badToken' => 'Bad Token',
        'missingAuthHeader' => 'Missing auth header',
        'roleNotAllowed' => 'Role not allowed',

        'deleteYourSelf' => 'You cannot delete yourself',

        'invalidUsernamePassword' => 'Invalid username/password',
        'userCreateFieldsRequired' => 'Username, name, or password are invalid',
        'userUpdateFieldsRequired'=>'Username and name are invalid',
        'userDuplicateUsername' => 'User with provided username already exists',

        'notAllowedToEditTimezone' => 'You are not allowed to edit this timezone',
        'timezoneFieldsRequired' => 'Name, city and gmt difference are required',
        'differenceGMTNotNumeric' => 'GMT difference must be numeric value',

        'timezoneDuplicateName' => 'Timezone with provided name already exists'


    );
}