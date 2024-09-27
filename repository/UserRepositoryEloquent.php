<?php

namespace Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Repository\DTO\UserDTO;

//VOCÊ DEVE IMPREMENTAR TODOS OS METODOS DA INTERFACE:UserRepository
class UserRepositoryEloquent implements UserRepository
{
    public function save(UserDTO $user): void
    {
        // Código para salvar o usuário
        User::query()->create([
            'name' => $user->name,
            'email' => $user->email,
        ]);

    }

    public function findByEmail(string $email): ?User
    {
        // Código para encontrar o usuário pelo email
        return User::where('email', $email)->first();
    }

    public function findById(int $id): ?User
    {
        // Código para encontrar o usuário pelo ID
        return User::find($id);
    }

    public function delete(int $id): void
    {
        // Código para deletar o usuário pelo ID
        User::query()->where('id',operator: 16)->delete();

    }

    public function findAll(): array|Collection
    {
        // Código para retornar todos os usuários
       return User::all();
    }
}
