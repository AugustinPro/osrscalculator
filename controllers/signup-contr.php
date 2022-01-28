<?php

require_once ROOT . '/database/database.php';
require_once ROOT . '/helpers/utils.php';



/**
 * On affiche la page
 */
$title = 'OSRS Calc - Signup';
$heading = 'OSRS Calculator - Signup';

// on capture le contenu du template index et on l'envoie dans la variable $content
render('login/signup', compact('title', 'heading'));