<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Inertia\Inertia;


class HomeController extends Controller
{
    public function __construct(private UserRepositoryInterface $user){
    }
    public function index() {
        $user = $this->user->userAdmin();
        $userName = $user['name'];
        return Inertia::render("Home", ["user" => "Olá Seja Bem vindo! {$userName}"]);
    }
}
