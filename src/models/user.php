<?php

class User {
		private $authId;
		private $firstName;
		private $lastName;
		private $authProvider;
		private $emailId;
		private $profilePicLink;

		
		public function __construct ($authId,$fname,$lname,$authProvider,$emailId,$profilePicLink) {
				$this->setauthID($authId);
				$this->setFirstName($fname);
				$this->setLastName($lname);
				$this->setauthProvider($authProvider);
				$this->setEmailId($emailId);
				$this->setProfilePicLink($profilePicLink);								
			}

		/* setters */	
				
		public function getauthID () {
				return $this->authId;
			}
			
		public function getFirstName () {
				return $this->firstName;
			}

		public function getLastName () {
				return $this->lirstName;
			}

		public function getauthProvider () {
				return $this->authProvider;
			}

		public function getEmailId () {
				return $this->emailId;
			}

		public function getProfilePicLink () {
				return $this->profilePicLink;
			}
			
		/* setters */
		
		public function setauthID ($authId) {
				$this->authId = $authId;
			}
			
		public function setFirstName ($fname) {
				$this->firstName = $fname;
			}

		public function setLastName ($lname) {
				$this->lirstName = $lname;
			}

		public function setauthProvider ($aProvider) {
				$this->authProvider = $aProvider;
			}

		public function setEmailId ($Id) {
				$this->emailId = $Id;
			}

		public function setProfilePicLink ($pLink) {
				$this->profilePicLink = $pLink;
			}			

	}
	
	
	//$u1 = new User ("bhavin","Shah","google","Bhavin@gmail.com","google.com/123");
//	echo $u1->getFirstName();
?>