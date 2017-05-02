<?php

namespace framework\base;

/**
 * Created by PhpStorm.
 * User: farhan.gul
 * Date: 5/2/17
 * Time: 2:37 PM
 */
class Router
{
    protected $url;
    protected $explodedUrl;
    protected $target;
    protected $controller;
    protected $routes;

    public function __construct($routes){
        $this->url = '';
        $this->controller = 'error';
        $this->explodedUrl = array();
        $this->target = array(
            "controller" => $this->controller,
            "view" => 'index',
            "action" => 'view',
        );
        $this->routes = $routes;

        //calling parseUrl() initializer within the constructor for ease
        //$this->parseUrl();
    }

    /*
     *  sanitize all user input urls
     */
    public function sanitizeUrl($param){
        if ( gettype($param) == "array") {
            foreach( $param as $key => &$value){
                $value = trim($value, ' ');
            }
            return $param;
        }
        else {
            return trim($param, ' ');
        }

    }

    /*
     * set raw url for later use
     */
    public function setUrl($url) {
        $this->url = $this->sanitizeUrl($url);
    }

    /*
     * parse url for processing
     */
    public function parseUrl($global_uri){
        $url = explode('?', $global_uri);
        $this->setUrl($url);

        if ( sizeof($url) ) {

            //get action
            if ( isset($url[0]) ) {
                $fetch = explode('/', $url[0]);
                if (sizeof($fetch)) {
                    if ( isset($fetch[0]) ) {
                        $this->target['controller'] = $fetch[0];
                    }

                    if ( isset($fetch[1]) ) {
                        $this->target['action'] = $fetch[1];
                    }

                    if ( isset($fetch[2]) ) {
                        $this->target['view'] = $fetch[2];
                    }
                }

                if ( sizeof($url) > 3 ) {
                    foreach( $url as $value ) {
                        array_push($this->explodedUrl, $value);
                    }
                }
            }
            //get exploded query string
            if ( isset($url[1]) ) {
                $query_params = explode('&', $url[0]);
                foreach($query_params as $name => $value){
                    $this->explodedUrl[$name] = $value;
                }
            }
        }

    }

    public function getExplodedUrl(){
        return $this->explodedUrl;
    }

    public function getTarget(){
        return $this->target;
    }

    /*
     * check if route exists
     */
    public function routeExists($routes){
        return array_key_exists( implode(',', $this->target()) ,$routes);
    }

    public function executeRoute($global_uri){

        $params = '404';
        if ( $this->parseUrl($global_uri) && routeExists($this->routes) && $this->target['controller'] != "" ) {
            $this->controller= $this->target['controller'];
        }
        $this->controller = ucfirst($this->target['controller']).'Controller';
        echo $this->controller ."abc"; exit;
        return new $this->controller($params);

    }
}