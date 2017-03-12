<?php
App::uses('HomeUpperSnippet', 'Model');

/**
 * HomeUpperSnippet Test Case
 */
class HomeUpperSnippetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.home_upper_snippet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HomeUpperSnippet = ClassRegistry::init('HomeUpperSnippet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HomeUpperSnippet);

		parent::tearDown();
	}

}
