<?php


class Person
{
protected $id = 0;
protected $fullName = '';
protected $phone = 0;
protected $email = '';
protected $role = '';

    public function __construct($id, $fullName, $phone, $email, $role)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->phone = $phone;
        $this->email = $email;
        $this->role = $role;
    }

    public function getVisitCard(){
        $getVC = '<ul>';
        $getVC .= '<li>Полное имя: '.$this->fullName.'</li>';
        $getVC .= '<li>Номер телефона: '.$this->phone.'</li>';
        $getVC .= '<li>Емеил: '.$this->email.'</li>';
        $getVC .= '<li>Статус : '.$this->role.'</li>';
        $getVC .= '</ul>';
        return $getVC;
    }
}