<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;

class HomeController extends Controller
{
    public function __construct(private UserRepositoryInterface $user){
    }

    public function index(){
        return $this->user->userAdmin();
    }
}
