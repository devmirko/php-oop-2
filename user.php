<?php

class User 
{
    private $name;
    private $password;
    private $carello;
    private $andress;
    private $registrer;

    public function __construct(string $name_user, string $password_user, array $carello_user, bool $registrer_user )
    {
        $this->name = $name_user;
        $this->password = $password_user;
        $this->carello = $carello_user;
        $this->registrer = $registrer_user;
        
    }



}