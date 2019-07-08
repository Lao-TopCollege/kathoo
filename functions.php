<?php

function isLoggedIn()
{
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] == TRUE) {
            return true;
        }
    }
    return FALSE;
}


function checkLogIn()
{
    if (isLoggedIn() == FALSE) {
        header('Location: index.php');
    }
}

function checkOwner($user_id){
    if(isset($_SESSION['user_id'])){
        if($_SESSION['user_id'] == $user_id){
            return TRUE;
        }
    }
    return FALSE;
}


function getUserName()
{
    if (isLoggedIn() == TRUE) {
        return $_SESSION['user_name'];
    } else {
        return 'Guest';
    }
}

function isAdmin()
{
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == TRUE) {
            return TRUE;
        }
    }
    return FALSE;
}

function checkAdmin()
{
    if (isAdmin() == FALSE) {
        header('Location: ../index.php');
    }
}
