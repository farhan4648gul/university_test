<?php

namespace framework\base;

/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 2:15 PM
 */
class Controller
{
    public $view;
    protected $action;
    protected $request;

    /*
     *  default constructor
     */
    public function __construct(){
        $this->view = null;
        $this->action = null;
        $this->request = array();

    }

    /*
     * parent initializer
     */
    public function init($view, $action, $params){
        $this->view = $view;
        $this->action = $action;
        $this->request = $params;
    }

    /*
     * default destructor, do nothing yet
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.

    }
}
use Doctrine\Tests\Common\Cache\BaseFileCacheTest;