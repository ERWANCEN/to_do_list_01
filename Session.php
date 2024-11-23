<?php
session_start();

class Session 
{
    //fonction pour vérifier si l'utilisateur est connecté
    function check_session()
    {
          if (!isset($_SESSION['user_id'])) {
                header('Location: login.php');
                exit;
          }
    }
}
