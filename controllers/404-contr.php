<?php

require_once ROOT . '/database/database.php';
require_once ROOT . '/helpers/utils.php';



/**
 * On affiche la page
 */
$title = 'ERROR 404';
$heading = 'Oh no! This page doesnt exist!';

// on capture le contenu du template index et on l'envoie dans la variable $content
render('error/404', compact('title', 'heading'));