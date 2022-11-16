<?php
switch ($menuitem) {
    case "home":
        require_once './view/home.php';
        break;
    case "contact":
        require_once './view/contact.php';
        break;
    case "about":
        require_once './view/about.php';
        break;
    default:
        require_once './view/home.php';
        break;
}