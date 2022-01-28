<?php

require_once ROOT . '/database/database.php';
require_once ROOT . '/helpers/utils.php';



/**
 * On affiche la page
 */
$title = 'OSRS Calc - Login';
$heading = 'OSRS Calculator - Login';

// on capture le contenu du template index et on l'envoie dans la variable $content
render('login/login', compact('title', 'heading'));