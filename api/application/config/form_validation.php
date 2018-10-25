<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config = array(
    'timezones/index_post' => array(
        array(
            'field' => 'name',
            'label' => 'name',
            'rules' => 'required|is_unique[timezones.name]'
        ),
        array(
            'field' => 'city',
            'label' => 'city',
            'rules' => 'required'
        ),
        array(
            'field' => 'differenceGMT',
            'label' => 'differenceGMT',
            'rules' => 'required'
        )
    ),
    'index_put' => array(
        array(
            'field' => 'name',
            'label' => 'name',
            'rules' => 'required|is_unique[timezones.name]'
        ),
        array(
            'field' => 'city',
            'label' => 'city',
            'rules' => 'required'
        ),
        array(
            'field' => 'differenceGMT',
            'label' => 'differenceGMT',
            'rules' => 'required'
        ),
        array(
            'field' => 'id',
            'label' => 'id',
            'rules' => 'required'
        )
    )
);