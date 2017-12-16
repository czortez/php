<?php
switch ($userRole) {
    case 2:
        echo 'admin';
        break;
    case 1:
        echo 'moderator';
        break;
    default:
        echo 'user';
        break;
}