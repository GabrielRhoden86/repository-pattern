<?php

namespace Repository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Repository\DTO\UserDTO;

interface UserRepository{

public function save(UserDTO $user): void;

public function findByEmail(string $email): ?User;

public function findById(int $id): ?User;

public function delete(int $id): void;

public function findAll(): array|Collection;

}
