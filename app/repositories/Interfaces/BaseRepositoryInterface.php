<?php
namespace App\Repositories\Interfaces;
interface  BaseRepositoryInterface
{
    public function all();
    public function find(int $id);
    public function update(int $id);


}
