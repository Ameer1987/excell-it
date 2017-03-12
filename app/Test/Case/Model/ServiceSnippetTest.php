<?php
App::uses('ServiceSnippet', 'Model');

/**
 * ServiceSnippet Test Case
 */
class ServiceSnippetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_snippet',
		'app.service_snippet_points'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceSnippet = ClassRegistry::init('ServiceSnippet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceSnippet);

		parent::tearDown();
	}

}
