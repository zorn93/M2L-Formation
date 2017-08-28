<?php

namespace Controller;

use Core\Controller;
use Model\HomeModel;
use Websoftwares\Session;

//use Model\AdminModel;

class HomeController extends Controller
{
    public function HomeAction(){
      $model =  new HomeModel();
      $data = $model->listUser();
        // dump($data);
        return self::$twig->render('Home/homeIndex.html.twig',[
          "list" => $data
        ]);
    }
}
