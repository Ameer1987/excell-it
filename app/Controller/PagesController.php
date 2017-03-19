<?php

/**
 * @brief Classrooms controller.
 */
class PagesController extends AppController {

    var $name = 'Pages';
    public $helpers = array('GoogleMap');

    function beforeFilter() {
        $this->loadModel('Header');
        $Header = $this->Header->find('first');
        $this->set('Header', $Header);
    }

    /**
     * 
     */
    function homepage() {
        $this->layout = 'pages';

        $this->loadModel('HomeUpperSnippet');
        $HomeUpperSnippets = $this->HomeUpperSnippet->find('all');
        $this->set('HomeUpperSnippets', $HomeUpperSnippets);

        $this->loadModel('HomeMiddleSnippet');
        $HomeMiddleSnippets = $this->HomeMiddleSnippet->find('all');
        $this->set('HomeMiddleSnippets', $HomeMiddleSnippets);

        $this->loadModel('Contact');
        $contacts = $this->Contact->find('first');
        $this->set('contacts', $contacts);
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
        $service_snippet = $this->ServiceSnippet->find('first');
        $this->set('service_snippet', $service_snippet);
    }

    /**
     * 
     */
    function contact() {
        $this->layout = 'pages';

        $this->loadModel('Contact');
        $contacts = $this->Contact->find('first');
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
