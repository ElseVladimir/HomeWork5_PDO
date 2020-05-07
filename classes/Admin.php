<?php


class Admin extends Person
{
protected $workingDay = '';

    public function __construct($fullName, $phone, $email, $role,$workingDay)
    {
        parent::__construct($fullName, $phone, $email, $role);
        $this->workingDay = $workingDay;
    }

    public function getVisitCardAdmin()
    {
        $getVC = '<ul>';
        $getVC .= '<li>Полное имя: '.$this->fullName.'</li>';
        $getVC .= '<li>Номер телефона: '.$this->phone.'</li>';
        $getVC .= '<li>Емеил: '.$this->email.'</li>';
        $getVC .= '<li>Статус : '.$this->role.'</li>';
        $getVC .= '<li>Рабочий день: '.$this->workingDay.'</li>';
        $getVC .= '</ul>';
        return $getVC;
    }

    public function getNameAdmin(){
        return $this->fullName;
    }
}