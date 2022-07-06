<?php

namespace App;

use App\Interfaces\ModelInterface;

class PersonModel implements ModelInterface {

    public function findAll() : void {}

    public function findOne($id) : void {}

    public function create(array $data) : void {
        echo "<p> ...Person successful created!.... </p>";
        echo "<p> Name: {$data['name']} | Sex: {$data['sex']} | Email: {$data['email']} | Age: {$data['age']}";
    }

    public function update(array $data) : void {}

    public function delete($id) : void {}
}