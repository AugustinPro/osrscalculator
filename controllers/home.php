<?php

require_once ROOT . '/database/database.php';
require_once ROOT . '/helpers/utils.php';



/**
 * On affiche la page
 */
$title = 'Calculator';
$heading = 'OSRS Calculator';

// on capture le contenu du template index et on l'envoie dans la variable $content
render('calculator', compact('title', 'heading'));