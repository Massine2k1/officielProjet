<?php

if(isset($_GET['page'])){
    switch ($_GET['page']){
        case 'interview':
            include '../View/interview.php';
            break;
        case 'exposition':
            include '../View/exposition.php';
            break;
        case 'conclusion':
            include '../View/conclusion.php';
            break;
        default:
            include '../View/accueil.php';
            break;
    }
}else{
    include '../View/acceuil.php';
}

