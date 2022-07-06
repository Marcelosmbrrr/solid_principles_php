<?php

namespace App\Interfaces;

use App\Interfaces\DispositiveInterface;

interface TelephoneInterface extends DispositiveInterface {

    public function dialNumber() : void;

}