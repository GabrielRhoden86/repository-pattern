<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        // Injetando o modelo diretamente no construtor para melhor testabilidade e flexibilidade.
        $this->model = $model;
    }

    public function userAdmin()
    {
        // Método de exemplo para buscar administradores
        // return $this->model->where('role', 'admin')->get();
        return dd("Admin!");
    }
}
