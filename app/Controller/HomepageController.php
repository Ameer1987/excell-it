<?php

/**
 * @brief Classrooms controller.
 */
class HomepageController extends AppController {

    var $name = 'Homepage';

    function beforeFilter() {
        
    }

    /**
     */
    function index() {
        $this->layout = 'homepage';
        $this->set('sections', 'dsfsdf');
    }

}
