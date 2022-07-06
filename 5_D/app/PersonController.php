<?php

namespace App;

use App\Interfaces\ControllerInterface;
use App\Interfaces\ModelInterface;

class PersonController implements ControllerInterface {

    private ModelInterface $model;

    public function __construct(ModelInterface $model){
        $this->model = $model;
    }

    public function index() : void {

    }

    public function show($id) : void {

    }

    public function store($request) : void {

        $this->model->create($request);

    }

    public function update($request, $id) : void {

    }

    public function destroy($id) : void {

    }

}