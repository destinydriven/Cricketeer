<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity.
 */
class Player extends Entity {

/**
 * Mutator method for getting the players full name
 *
 * @return string
 */
	protected function _getFullName() {
		return $this->_properties['first_name'] . ' ' . $this->_properties['initials'] . ' ' . $this->_properties['last_name'];
	}
}
