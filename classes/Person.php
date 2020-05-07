<?php


class Person
{
protected $fullName = '';
protected $phone = 0;
protected $email = '';
protected $role = '';

    public function __construct($fullName, $phone, $email, $role)
    {
        $this->fullName = $fullName;
        $this->phone = $phone;
        $this->email = $email;
        $this->role = $role;
    }


}