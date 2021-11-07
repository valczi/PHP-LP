<?php

class user2
{
    private string $username;

    private string $firstName;

    private string $lastName;

    private string $email;

    private string $address;

    private string $phone;

    private dateTime $birthDate;


    public function __construct(array $infos)
    {
        foreach ($infos as $clef => $donnee)
        {
            $methode = 'set'.$clef;
            if (method_exists($this, $methode))
            {
                $this->$methode($donnee);
            }
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getBirthDate(): dateTime
    {
        return $this->birthDate;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = ucwords(strtolower($firstName), '-');
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = ucwords(strtolower($lastName), '-');
    }

    public function setUsername(string $username)
    {
        $this->username = strtolower($username);
    }

    public function setEmail(string $Mail)
    {
        $this->email = strtolower($Mail);
    }

    public function setPhone(string $phone)
    {
        $this->phone = strtolower($phone);
    }

    public function setAddress(string $adress)
    {
        $this->address = strtolower($adress);
    }

    public function setBirthdate(dateTime $date)
    {
        $this->birthDate = $date;
    }

    public function showInfos(): string
    {
        return $this->getFirstName()." ". $this->getLastName()." ".$this->getUsername()." ".$this->getAddress()." ".$this->getBirthDate()->format('Y-m-d');
    }


}
