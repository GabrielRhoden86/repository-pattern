<?php

namespace Repository\DTO;

class UserDTO{

    public function __construct(
        public string $name,
        public string $email
    ){


    }
}
