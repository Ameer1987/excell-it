<?php

/**
 * @brief Classrooms controller.
 */
class PagesController extends AppController {

    var $name = 'Pages';
    public $helpers = array('GoogleMap');

    function beforeFilter() {
        
    }

    /**
     * 
     */
    function homepage() {
        $this->layout = 'pages';
    }

    /**
     * 
     */
    function services() {
        $this->layout = 'pages';
    }

    /**
     * 
     */
    function contact() {
        $this->layout = 'pages';
    }

    /**
     * 
     */
    function career() {
        $this->layout = 'pages';
    }

}
