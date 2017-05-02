<?php

namespace app\controller;
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 4/28/17
 * Time: 6:37 PM
 */

class UniversityController extends Controller {

    protected $action;
    protected $view;

    public function __construct(){
        $this->action = '';
        $this->view = '';

    }

    public function __destruct(){
        // TODO: implement university destructor
    }
}