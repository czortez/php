<?php   
declare(strict_types=1);

$users = [
    [
        'name' => 'Arkadiusz',
        'birthYear' => 1977,
        'hobby' => 'stamps',
        'sport' => 'basketball',
        'occupation' => 'programmer',
        'status' => 'hidden',
    ],
    [
        'name' => 'Nadia',
        'birthYear' => 1988,
        'hobby' => 'sport',
        'sport' => 'volleyball',
        'occupation' => 'singer',
        'status' => 'activated',
    ],
    [
        'name' => 'Klara',
        'birthYear' => 1988,
        'hobby' => 'sport',
        'sport' => 'volleyball',
        'occupation' => 'programmer',
        'status' => 'disabled',
    ],
    [
        'name' => 'Juliusz',
        'birthYear' => 1984,
        'hobby' => 'sport',
        'sport' => 'sqush',
        'occupation' => 'programmer',
        'status' => 'activated',
    ],
];
$isNotHidden = function(array $user): bool {
    return $user['status'] !== 'hidden';
};

$isNotDisabled = function(array $user): bool {
    return $user['status'] !== 'disabled';
};

$isLessThan30 = function(array $user): bool {
    return $user['birthYear'] >= 1987;
};

// Pobranie aktywnych użytkowników mających mniej niż 30 lat
$funcActivatedUsers = array_filter(array_filter(array_filter(
        $users, $isNotHidden
), $isNotDisabled), $isLessThan30);

var_export($funcActivatedUsers);

