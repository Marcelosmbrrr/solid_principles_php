<?php

namespace App\Interfaces;

interface ModelInterface {

    public function findAll() : void;

    public function findOne($id) : void;

    public function create(array $data) : void;

    public function update(array $data) : void;

    public function delete($id) : void;

}