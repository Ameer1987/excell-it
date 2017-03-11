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

}
