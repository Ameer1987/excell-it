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

        $this->loadModel('Service');
        $services = $this->Service->find('all');
        $this->set('services', $services);

        $this->loadModel('ServiceSnippet');
        $services_snippets = $this->ServiceSnippet->find('all');
        $this->set('services_snippet', $services_snippets);
    }

    /**
     * 
     */
    function contact() {
        $this->layout = 'pages';
        
        $this->loadModel('Contact');
        $contacts = $this->Contact->find('all');
        $this->set('contacts', $contacts);
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

    function displayService($service_id) {
        $this->layout = 'pages';

        $this->loadModel('Service');
        $service = $this->Service->findById($service_id);
        $this->set('service', $service);
    }

}
