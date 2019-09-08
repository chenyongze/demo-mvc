<?php

namespace web\controller;

class Index
{
    public function show()
    {



        // return ['xxx'];
        dd($_SESSION);
        dd('hello world~~~ dddd');
        $_SESSION['d'] = time();
    }

    public function post()
    {
        dd('aaa');
    }

    public function xml()
    {
        dd($_POST);
        $data = file_get_contents("php://input");
        dd(json_decode($data, true));
        exit;
    }
}
