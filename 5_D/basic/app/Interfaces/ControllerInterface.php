<?php

namespace App\Interfaces;

interface ControllerInterface {

    public function index() : void;

    public function show($id) : void;

    public function store($request) : void;

    public function update($request, $id) : void;

    public function destroy($id) : void;
}