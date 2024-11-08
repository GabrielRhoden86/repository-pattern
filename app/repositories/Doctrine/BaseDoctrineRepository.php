<?php

namespace App\repositories\Doctrine;
use Illuminate\Database\Eloquent\Model;
class BaseDoctrineRepository
{
    protected Model $model;
    public function all(){
       // return $this->model->all();
       DD('list all doctrine');
    }
    public function find(int $id){}
    public function update(int $id){}
}
