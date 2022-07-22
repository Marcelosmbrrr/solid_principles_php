<?php

namespace App;

use App\Interfaces\ModelInterface;

class PersonModel implements ModelInterface {

    public function findAll() : void {
        echo "All Persons finded";
    }

    public function findOne($id) : void {
        echo "Person finded by id: $id";
    }

    public function create($data) : void {
        echo "<p> ...Person successful created!.... </p>";
        echo "<p> Name: {$data['name']} | Sex: {$data['sex']} | Email: {$data['email']} | Age: {$data['age']}";
    }

    public function update($data, $id) : void {
        echo "Updated Person by id: $id";
    }

    public function delete($id) : void {
        echo "Deleted Person by id: $id";
    }
}