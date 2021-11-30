<?php

require_once 'People.php';
require_once 'IActions.php';
class Actors extends People implements IActions
{
    private $solary;
    private $film;

    public function __construct($name, $age, $solary, $film)
    {
        if (!empty($solary)){
            $this->solary=$solary;
        }else{
            $this->solary=0;
            return 'Не введена зарплата актёра в классе Actors<br>';
        }
        if (!empty($film)){
            $this->film=$film;
        }else{
            $this->film='Не участвую в спектакле';
            return 'Не введен спектакль в классе Actors<br>';
        }

        parent::__construct($name, $age);
    }
    /*Методы с интерфейса*/
    public function actions($type)
    {
        if (!empty($type)){
            switch ($type){
                case 'походить':
                    echo '<br>Я хожу';
                    break;
                case 'попить чаю':
                    echo '<br>Пойду попью чаю';
                    break;
                case 'спектакль':
                    echo '<br>Пойду работать для радости людей';
                    break;
                default:
                    echo '<br>Я ничего не делаю';
                    break;
            }
        }else{
            return 'Нету типа действия';
        }
        // TODO: Implement actions() method.
    }

    public function setSolary($solary){
        if (!empty($solary)){
            $this->solary=$solary;
        }else{
            $this->solary=0;
            return 'Не введена зарплата актёра в классе Actors<br>';
        }
    }
    public function setFilm($film){
        if (!empty($film)){
            $this->film=$film;
        }else{
            $this->film='Не участвую в спектакле';
            return 'Не введен спектакль в классе Actors<br>';
        }
    }

    public function getSolary(){
        return $this->solary;
    }
    public function getFilm(){
        return $this->film;
    }

    public function show()
    {
        return parent::show().'<br> Зарплата актёра - '.$this->getSolary().'<br>Спектакль в котором принимает участие - '.$this->getFilm(); // TODO: Change the autogenerated stub
    }
}