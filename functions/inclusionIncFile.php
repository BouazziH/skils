<?php
function inclusion(string $defaultPage): void
{
    $files = glob('./includes/*.inc.php');// c'est la fonction avec la quel en passe d'une a une autre 
    $page = $_GET['page'] ?? $defaultPage;

    $pageTest = './includes/' . $page . '.inc.php';

    if (!in_array($pageTest, $files))
        require './includes/' . $defaultPage . '.inc.php';
    else
        require $pageTest;
}
