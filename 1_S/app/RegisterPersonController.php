<?php declare(strict_types=1);

namespace App;

use App\EmailController;

/*
- This class is only used for register a person 
- The email is activated after a registration, here, but is controlled by another class
*/

class RegisterPersonController {

    public string $name;
    public string $sex;
    public string $email;

    public function __construct(string $name, string $sex, string $email){
        $this->name = $name;
        $this->sex = $sex;
        $this->email = $email;
    }

    public function store(){

        // Here, hypothetically, person was stored...
        // After that, the email needs to be sent
        
        // ( This implementation, how we will see, breaks the "D" principle )
        $emailController = new EmailController($this->name, $this->sex, $this->email); 
        $emailController->send();
        
    }

}