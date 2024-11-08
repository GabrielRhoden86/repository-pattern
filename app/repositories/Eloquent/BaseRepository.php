<?php
namespace App\Repositories\Eloquent;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;//Isso indica que sua classe BaseRepository pode trabalhar com instâncias que herdam da classe Model do Eloquent.

// esses metodos são só um exemplo em um projeto real seria utilizados outro pois esse ja existe no eloquent
class BaseRepository {
    protected Model $model;
    public function userAdmin(){}
    public function all(){
        return $this->model->all();
    }
    public function find(int $id){}
    public function update(int $id){}
}
