<?php

/**
 * @brief Classrooms controller.
 */
class PagesController extends AppController {

    var $name = 'Pages';

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
    function about() {
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
