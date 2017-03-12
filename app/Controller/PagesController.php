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

    function displayObject($object_id, $model) {
        $this->layout = 'pages';

        $this->loadModel($model);
        $object = $this->$model->findById($object_id);
        $this->set('object', $object);
    }

}
