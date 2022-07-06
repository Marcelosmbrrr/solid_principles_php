<?php 

use App\RegisterPersonController;

$personController = new RegisterPersonController("Fulano", "Male", "fulano@gmail.com");
$personController->store();

