<?php 

class User {

    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $birthday;
    /*"id": 1,
    "firstName": "Adamo",
    "lastName": "ROSSI",
    "email": "adamo.rossi@email.com",
    "birthday": "2002-06-12"*/

    
    /*public function __construct (String $id, String $firstName, String $lastName, String $email, String $birthday) 
    {
        
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthday = $birthday;
    }*/
    
    public function getAge($birthday)
    {
        return floor((time() - strtotime($birthday)) / 31556926);
    }

    public function isAdult($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        
        return $this;
    }
}
    

    
    

?>