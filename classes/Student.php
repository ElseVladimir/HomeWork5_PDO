<?php


class Student extends Person
{
protected $marks = 0;

    public function __construct($fullName, $phone, $email, $role, $marks)
    {
        parent::__construct($fullName, $phone, $email, $role);
        $this->marks = $marks;
    }

    public function getVisitCardStudent()
    {
        $getVC = '<ul>';
        $getVC .= '<li>Полное имя: '.$this->fullName.'</li>';
        $getVC .= '<li>Номер телефона: '.$this->phone.'</li>';
        $getVC .= '<li>Емеил: '.$this->email.'</li>';
        $getVC .= '<li>Статус : '.$this->role.'</li>';
        $getVC .= '<li>Средняя оценка: '.$this->marks.'</li>';
        $getVC .= '</ul>';
        return $getVC;
    }

    public function getNameStudent(){
        return $this->fullName;
    }
}