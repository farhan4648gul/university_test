<?php
/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 4:23 PM
 */

namespace app\controller;


class ErrorController extends Controller
{
    protected $error_code;
    protected $location;

    public function __construct($error_code){

        $this->error_code = $error_code;
        $this->location = "error";

        $this->errorAction(); // TODO: remove call from inside constructor

    }

    public function errorAction(){
        if ( val($this->error_code) == 404) {
            return view('404');
        }
    }

}