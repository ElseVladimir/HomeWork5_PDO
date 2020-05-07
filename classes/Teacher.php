<?php


class Teacher extends Person
{
protected $subject = '';

    public function __construct($fullName, $phone, $email, $role, $subject)
    {
        parent::__construct($fullName, $phone, $email, $role);
        $this->subject = $subject;
    }


    public function getVisitCardTeacher()
    {
        $getVC = '<ul>';
        $getVC .= '<li>Полное имя: '.$this->fullName.'</li>';
        $getVC .= '<li>Номер телефона: '.$this->phone.'</li>';
        $getVC .= '<li>Емеил: '.$this->email.'</li>';
        $getVC .= '<li>Статус : '.$this->role.'</li>';
        $getVC .= '<li>Преподаваемый предмет: '.$this->subject.'</li>';
        $getVC .= '</ul>';
        return $getVC;
    }

    public function getNameTeacher(){
        return $this->fullName;
    }
}