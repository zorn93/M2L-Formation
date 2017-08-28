<?php
/**
 * Created by PhpStorm.
 * User: blackmister
 * Date: 16/05/2017
 * Time: 18:23
 */
// recevoir tout les actions
namespace Controller;

use Core\Database;
class FrontController
{
    public function __construct()
    {
        // je me connecte
        $pdo = Database::connect();
        // gestion de l'action appelée, GEST en prio, puis POST puis chaine vide
        $page = $_GET['page'] ?? $_POST['page'] ?? '';
        if(isset($_GET['page'])){
            switch ($page) {
                case "home";
                    $controller = new HomeController();
                    echo $controller->homeAction();
                    break;
            }
        }
    }
}
