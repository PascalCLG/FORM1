<?php

class Data
{
    public $FirstName;
    public $LastName;
    public $Phone;
    public $ZipCode;
    public $Expire;
    public $Email;
    public $Password;
    public $Sex;
    public $Country;
    public $RememberMe;
    public $SubscribeToNewsLetter;

    public function bind()
    {
        if (isset($_POST["FirstName"]))
            $this->FirstName = $_POST["FirstName"];
        if (isset($_POST["LastName"]))
            $this->LastName = $_POST["LastName"];
        if (isset($_POST["Phone"]))
            $this->Phone = $_POST["Phone"];
        if (isset($_POST["ZipCode"]))
            $this->ZipCode = $_POST["ZipCode"];
        if (isset($_POST["Expire"]))
            $this->Expire = $_POST["Expire"];
        if (isset($_POST["Email"]))
            $this->Email = $_POST["Email"];
        if (isset($_POST["Password"]))
            $this->Password = $_POST["Password"];
        if (isset($_POST["Sex"]))
            $this->Sex = $_POST["Sex"];
        if (isset($_POST["Country"]))
            $this->Country = $_POST["Country"];
        if (isset($_POST["RememberMe"]))
            $this->RememberMe = $_POST["RememberMe"];
        if (isset($_POST["SubscribeToNewsLetter"]))
            $this->SubscribeToNewsLetter = $_POST["SubscribeToNewsLetter"];
    }
}

$data = new Data();
$data->bind();
var_dump($data);