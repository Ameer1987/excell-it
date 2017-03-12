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

        $this->loadModel('Career');
        $careers = $this->Career->find('all');
        $this->set('careers', $careers);
    }

    function displayCareer($career_id) {
        $this->layout = 'pages';

        $this->loadModel('Career');
        $career = $this->Career->findById($career_id);
        $this->set('career', $career);
    }

}
