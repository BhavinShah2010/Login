<?php
include_once ('src/models/user.php');
include_once ('src/DAOs/userDAOImplementation.php');

class userController {
	
	private $user;
	private $DAOObj;
	
	public function __construct () {
		$this->DAOObj = new userDAOImplementation("users");
	}

	public function save($authId,$fname,$lname,$authProvider,$emailId,$profilePicLink) {
			
			$this->user = new User($authId,$fname,$lname,$authProvider,$emailId,$profilePicLink);
			$this->DAOObj->saveUser ($this->user);
			
			return $this->user;	
		
		}
	
	public function getUser($authId,$fname,$lname,$authProvider,$emailId,$profilePicLink) {
			
			$this->user = new User($authId,$fname,$lname,$authProvider,$emailId,$profilePicLink);


			if ($this->DAOObj->getUser ($this->user)) {
					return $this->user;	
				}
			else {
					null;
				}
		
		}
}