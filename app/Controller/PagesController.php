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

        $this->loadModel('HomepageSlider');
        $HomepageSliders = $this->HomepageSlider->find('all');
        $this->set('HomepageSliders', $HomepageSliders);

        $this->loadModel('HomeUpperSnippet');
        $HomeUpperSnippets = $this->HomeUpperSnippet->find('all', array(
            'order' => array(
                'HomeUpperSnippet.order' => 'ASC',
            )
        ));
        $this->set('HomeUpperSnippets', $HomeUpperSnippets);

        $this->loadModel('HomeMiddleSnippet');
        $HomeMiddleSnippets = $this->HomeMiddleSnippet->find('all', array(
            'order' => array(
                'HomeMiddleSnippet.order' => 'ASC',
            )
        ));
        $this->set('HomeMiddleSnippets', $HomeMiddleSnippets);

        $this->loadModel('Bottom1Block');
        $Bottom1Block = $this->Bottom1Block->find('first');
        $this->set('Bottom1Block', $Bottom1Block);

        $this->loadModel('Bottom2Block');
        $Bottom2Block = $this->Bottom2Block->find('first');
        $this->set('Bottom2Block', $Bottom2Block);

        $this->loadModel('Bottom3Block');
        $Bottom3Block = $this->Bottom3Block->find('first');
        $this->set('Bottom3Block', $Bottom3Block);

        $this->loadModel('Bottom4Block');
        $Bottom4Blocks = $this->Bottom4Block->find('all');
        $this->set('Bottom4Blocks', $Bottom4Blocks);

        $this->loadModel('ContactGeneral');
        $ContactGeneral = $this->ContactGeneral->find('first');
        $this->set('ContactGeneral', $ContactGeneral);
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
    function contactBranches() {
        $this->layout = 'pages';

        $this->loadModel('ContactGeneral');
        $ContactGeneral = $this->ContactGeneral->find('first');
        $this->set('ContactGeneral', $ContactGeneral);

        $this->loadModel('ContactBranch');
        $ContactBranches = $this->ContactBranch->find('all');
        $this->set('ContactBranches', $ContactBranches);
    }

    /**
     * 
     */
    function partners() {
        $this->layout = 'pages';

        $this->loadModel('Partner');
        $partners = $this->Partner->find('all');
        $this->set('partners', $partners);
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
