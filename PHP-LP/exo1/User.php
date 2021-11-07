<?php

class User
{
    protected string $username;

    protected string $firstName;

    protected string $lastName;

    /**
     * @param string $username
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $username, string $firstName, string $lastName)
    {
        $this->setUsername($username);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = strtolower($username);
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): User
    {
        $this->firstName = ucwords(strtolower($firstName), '-');

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): User
    {
        $this->lastName = ucwords(strtolower($lastName), '-');

        return $this;
    }


}