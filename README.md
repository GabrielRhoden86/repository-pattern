Quando você utiliza o padrão de projeto Repository no Laravel e escolhe usar o bind no ServiceProvider, você está criando uma forma flexível e desacoplada de trocar a implementação de uma interface sem alterar o código dos outros componentes que dependem dessa interface. O bind permite que você defina qual implementação será utilizada quando o Laravel precisar injetar uma dependência.

## - 1 home controller implemente:
Assim podemos instanciar a interface UserRepositoryInterface para pode usar o doctrine e o eloquent
public function __construct(private UserRepositoryInterface $user)

## - 2  php artisan make:provider UserServiceProvider  
isso irá criar um provider para poder utilizar tanto o eloquent quanto o doctrine no HomeController. Implemente 

## - 3 em config\app.php procure por providers e implemnte

  'providers' => ServiceProvider::defaultProviders()->merge([
        App\Providers\UserServiceProvider::class,
    ])->toArray(),

___________________________________________________________________

app
│
├── Http
│   └── Controllers
│       └── HomeController.php
│
├── Providers
│   └── UserServiceProvider.php
│
├── Repositories
│   ├── Interfaces
│   │     ├── BaseRepositoryInterface.php
|   |     └── UserRepositoryInterface.php
│   │   
│   ├── Doctrine
│   │   ├── BaseDoctrineRepository.php
│   │   └── UserDoctrineRepository.php
│   │
│   └── Eloquent
│       ├── BaseRepository.php
│       └── UserRepository.php
│
└── Models
    └── User.php

    



