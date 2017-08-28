<?php
/**
 * Created by PhpStorm.
 * User: blackmister
 * Date: 18/05/2017
 * Time: 07:25
 */

namespace Model;

use Core\Model;

class HomeModel extends Model
{
  public function listUser()
  {
    $sql = "SELECT `prenom` FROM `salarie` ";
    $req = self::$pdo->prepare($sql);
    $req->execute();
    return $row = $req->fetchAll(\PDO::FETCH_OBJ);
  }
}
