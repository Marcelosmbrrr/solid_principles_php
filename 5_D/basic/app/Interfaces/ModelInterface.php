<?php

namespace App\Interfaces;

interface ModelInterface {

    public function findAll() : void;

    public function findOne($id) : void;

    public function create($data) : void;

    public function update($data, $id) : void;

    public function delete($id) : void;

}