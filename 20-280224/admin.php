<?php

class Admin extends User{
    public int $accesLevel = 1;
    public function __construct(int $id, string $username, string $password,int $accesLevel){
        parent::__construct($id, $username, $password);
        $this->accesLevel = $accesLevel;
    }
}