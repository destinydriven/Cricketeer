<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PlayersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PlayersController Test Case
 */
class PlayersControllerTest extends IntegrationTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.players',
		'app.player_specialisations',
		'app.clubs',
		'app.leagues',
		'app.teams',
		'app.batsmen',
		'app.innings',
		'app.matches',
		'app.venues',
		'app.formats',
		'app.wickets',
		'app.bowlers',
		'app.squads'
	];

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
