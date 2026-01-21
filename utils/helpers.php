<?php

function printSeparator(): void
{
    echo "-----------------<br>";
}

function formatDisplayName(string $username): string
{
    if (empty($username)) {
        return 'Unknown';
    }

    $name = explode('_', $username)[0];
    return ucfirst($name);
}