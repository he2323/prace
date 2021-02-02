<?php
class Osoba
{
    private $name;
    private $surname;
    private $sex;
    private $birthdate;
    private $phonenumber;


    public function __construct($name, $surname, $sex, $birthdate, $phonenumber)
    {
        echo "wywolano konstruktor "."<br>";
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_sex = $sex;
        $this->_birthday = $birthdate;
        $this->_phonenumber = $phonenumber;
    }

    public function getPhoneNumber()
    {
        return "phone number of ".$this->_name." is ".$this->_phonenumber. "<br>";
    }
    public function getInfo()
    {
        return "my name is ".$this->_name." ".$this->_surname."<br>"."My phone number is ".$this->_phonenumber."<br>"."Call me later if you can <br>";
    }
    public function setPhoneNumber($number)
    {
        $this->_phonenumber = $number;
        return true;
    }
    public function setSurname($new_surname)
    {
        $this->_surname = $new_surname;
        return true;
    }
    public function getDays()
    {

        return "He/She lives for ".date_diff(date_create($this->_birthday), date_create(date("Y-m-d")))->format("%a")." days.";
    }
}
?>