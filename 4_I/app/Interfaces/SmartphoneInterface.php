<?php

namespace App\Interfaces;

use App\Interfaces\DispositiveInterface;

interface SmartphoneInterface extends DispositiveInterface{

    public function installApp() : void;

}