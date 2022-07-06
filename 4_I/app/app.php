<?php

use App\Telephone;
use App\Smartphone;
use App\Interfaces\DispositiveInterface;

/*
- Each Class entity has a specific Interface
- Futhermore, each specific interface extends a generic Interface
- This is the "I" principle of SOLID 
- Also follows the "S", "O" and "L" principles
*/

function dispositive(DispositiveInterface $dispositive){
    $dispositive->doCall();
    $dispositive->handleCall();
}

$dispositives = [new Telephone(), new Smartphone()];

foreach($dispositives as $dispositive){
    dispositive($dispositive);
}

