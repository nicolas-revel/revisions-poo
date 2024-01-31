<?php

namespace App\Controller;

use App\Model\Abstract\AbstractProduct;

require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// faire une méthode index($page), elle devra faire appel à une méthode findPaginated($page) qui sera dans une classe Product qui héritera de AbstractProduct sans autre propriété ou méthode pour le moment.