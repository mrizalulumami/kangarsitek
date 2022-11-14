<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_login()
{
    $ci= get_instance();
    if (!$ci->session->userdata('username')){
        redirect('auth');
    }
}