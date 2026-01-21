<?php

namespace Utils;

class Validator
{
    public function validateUsername(string $username): string
    {
        if (empty(trim($username))) {
            return 'Invalid';
        }

        if (strlen($username) < 3) {
            return 'Invalid';
        }

        return 'Valid';
    }

    public function validateEmail(string $email): string
    {
        if (empty(trim($email))) {
            return 'Invalid';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Invalid';
        }

        return 'Valid';
    }

    public function validatePassword(string $password): string
    {
        if (empty($password) || strlen($password) < 6) {
            return 'Weak';
        } else {
            return 'Strong';
        }
    }
}