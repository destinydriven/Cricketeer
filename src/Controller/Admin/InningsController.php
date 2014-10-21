<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Innings Controller
 *
 * @property App\Model\Table\InningsTable $Innings
 */
class InningsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Matches', 'Players', 'Teams', 'Wickets']
		];
		$this->set('innings', $this->paginate($this->Innings));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$innings = $this->Innings->get($id, [
			'contain' => ['Matches', 'Players', 'Teams', 'Wickets', 'Batsmen', 'Bowlers']
		]);
		$this->set('innings', $innings);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$innings = $this->Innings->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Innings->save($innings)) {

				$this->Flash->success('The innings has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The innings could not be saved. Please, try again.');
			}
		}
		$matches = $this->Innings->Matches->find('list');
		$players = $this->Innings->Players->find('list');
		$teams = $this->Innings->Teams->find('list');
		$wickets = $this->Innings->Wickets->find('list');
		$this->set(compact('innings', 'matches', 'players', 'teams', 'wickets'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$innings = $this->Innings->get($id, [
			'contain' => [
				'Batsmen',
				'Bowlers'
			]
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$innings = $this->Innings->patchEntity($innings, $this->request->data);
			if ($this->Innings->save($innings)) {
				$this->Flash->success('The innings has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The innings could not be saved. Please, try again.');
			}
		}
		$matches = $this->Innings->Matches->find('list');
		$players = $this->Innings->Players->find('list');
		$teams = $this->Innings->Teams->find('list');
		$wickets = $this->Innings->Wickets->find('list');
		$this->set(compact('innings', 'matches', 'players', 'teams', 'wickets'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$innings = $this->Innings->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Innings->delete($innings)) {
			$this->Flash->success('The innings has been deleted.');
		} else {
			$this->Flash->error('The innings could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}