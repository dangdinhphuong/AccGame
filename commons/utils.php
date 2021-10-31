<?php

const BASE_URL = "http://localhost:88/PHP2/MVC/";
const PUBLIC_URL = BASE_URL . 'public/';
const MENBER_ROLE=1;
const ADMIN_ROLE=200;
const AUTH='session_auth';
const THEME_ASSET_URL = PUBLIC_URL . 'theme/';
function checkAUTH($role=MENBER_ROLE){
    if(!isset($_SESSION[AUTH])|| empty($_SESSION[AUTH])|| $_SESSION[AUTH]["role"]<$role){
        header('location:'.BASE_URL.'login');
    }
}
?>