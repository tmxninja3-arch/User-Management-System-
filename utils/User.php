<?php

namespace Utils;

class User
{
    public $username;
    public $email;
    public $password;

    // Initializes user data

    public function __construct(string $username, string $email, string $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Get user profile information

    public function getProfile(): string
    {
        return "Username: {$this->username}, Email: {$this->email}";
    }

    // Display user details

    public function displayUser(): void
    {
        echo "Username: " . $this->username . "\n";
        echo "Email: " . $this->email . "\n";
    }
}