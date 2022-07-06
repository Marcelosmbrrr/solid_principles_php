<?php

namespace App;

use App\Interfaces\TelephoneInterface;

class Telephone implements TelephoneInterface {

    public function handleCall() : void {
        echo "<p>Telephone Handle Call</p>";
    }

    public function doCall() : void {
        echo "<p>Telephone Do Call</p>";
    }

    public function dialNumber() : void {
        echo "<p>Telephone Dial Number</p>";
    }

}