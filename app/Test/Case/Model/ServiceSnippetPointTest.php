<?php
App::uses('ServiceSnippetPoint', 'Model');

/**
 * ServiceSnippetPoint Test Case
 */
class ServiceSnippetPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_snippet_point',
		'app.service_snippets'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceSnippetPoint = ClassRegistry::init('ServiceSnippetPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceSnippetPoint);

		parent::tearDown();
	}

}
