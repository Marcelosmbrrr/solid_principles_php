<?php

namespace App;

use App\Interfaces\SmartphoneInterface;

class Smartphone implements SmartphoneInterface {

    public function handleCall() : void {
        echo "<p>Smartphone Handle Call</p>";
    }

    public function doCall() : void {
        echo "<p>Smartphone Do Call</p>";
    }

    public function installApp() : void {
        echo "<p>Smartphone Install App</p>";
    }

}