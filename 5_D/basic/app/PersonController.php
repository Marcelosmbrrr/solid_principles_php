<?php

namespace App;

use App\Interfaces\ControllerInterface;
use App\Interfaces\ModelInterface;

class PersonController implements ControllerInterface {

    private ModelInterface $model;

    public function __construct(ModelInterface $model){
        $this->model = $model;
    }

    public function index() {
        return $this->model->findAll();
    }

    public function show($id) {
        return $this->model->findOne($id);
    }

    public function store($request) {
        return $this->model->create($request);
    }

    public function update($request, $id) {
        return $this->model->update($request, $id);
    }

    public function destroy($id) {
        return $this->model->update($id);
    }

}