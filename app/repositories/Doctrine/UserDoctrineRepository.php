<?php
namespace App\repositories\Doctrine;
use App\Repositories\Interfaces\UserRepositoryInterface;
class UserDoctrineRepository extends BaseDoctrineRepository implements UserRepositoryInterface
{
    public function userAdmin(){
     DD('list all admins doctrine');
    }
}
