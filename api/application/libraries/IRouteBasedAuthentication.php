<?php

interface IRouteBasedAuthentication
{
    public function authorize($token, $CI);
}