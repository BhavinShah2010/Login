<?php
include_once ('DBConfig.php');
include_once ('src/interfaces/userDAOInterface.php');
include_once ('src/models/user.php');

class userDAOImplementation implements userDAO {
	
		private $connectionObj;
		private $tableName;
		public function __construct ($tblName) {
				$this->connectionObj = DBConnection::getInstance()->getConnection();
				$this->tableName = $tblName;
			}
			
		//store user data into db			
		public function saveUser ($userObj) {
				
			$sql = "INSERT INTO `users`(`authId`, `firstName`, `lastName`, `authProvider`, `emailId`, `profilePicLink`) VALUES ('".$userObj->getauthId()."','".$userObj->getFirstName()."','".$userObj->getLastName()."','".$userObj->getauthProvider()."','".$userObj->getEmailId()."','".$userObj->getProfilePicLink()."')";		
			$insert = mysqli_query($this->connectionObj,$sql) or die(mysqli_error($this->connectionObj));
		
			}
		
		//check if user is already member or not	
		public function getUser ($userObj) {
				$query = mysqli_query($this->connectionObj,"SELECT * FROM $this->tableName WHERE authProvider = '".$userObj->getauthProvider()."' AND authId = '".$userObj->getauthID()."'") or die(mysqli_error($this->connectionObj));
				
				if(mysqli_num_rows($query) > 0){

					$sql = "UPDATE $this->tableName SET authProvider = '".$userObj->getauthProvider()."', authId = '".$userObj->getauthID()."', firstName = '".$userObj->getFirstName()."', lastName = '".$userObj->getLastName()."', emailId = '".$userObj->getEmailId()."',  profilePicLink = '".$userObj->getProfilePicLink()."' WHERE authProvider = '".$userObj->getauthProvider()."' AND authId = '".$userObj->getauthID()."'";
						$update = mysqli_query ($this->connectionObj, $sql);
						return true;
					}
					return false;
				
			}// getUser ends
	}
	
	
	/*$u1 = new User ("107661577806924087086","Bhavin","Shah","google","Bhavin@gmail.com","google.com/123");
	$impl = new userDAOImplementation("users");
	echo $impl->saveUser($u1);*/
	
?>
