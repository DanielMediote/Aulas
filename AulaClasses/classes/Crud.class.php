<?php

/**
*
*/
abstract class Crud
{
/*
C - Create
R - Read
U - Update
D - DELETE
 */
  protected $tabela;

  abstract public function insert();
  abstract public function update();

  public function listALL(){
    $querySelect = "SELECT * FROM {$this->tabela}";
    $smtp = Conexao::prepare($querySelect);
    $smtp->execute();

    return $smtp->fetchAll();
  }

  public function search($id){
    $sqlSelect = "SELECT * FROM {$this->tabela} WHERE marca_id = :parameter ";
    $smtp = Conexao::prepare($sqlSelect);
    $smtp->bindParam(':parameter',$id,PDO::PARAM_INT);
    $smtp->execute();

    return $smtp->fetch();
  }

  public function delete($id)
  {
    $sqlSelect = "DELETE FROM {$this->tabela} WHERE marca_id = :parameter ";
    $smtp = Conexao::prepare($sqlSelect);
    $smtp->bindParam(':parameter',$id,PDO::PARAM_INT);
    $smtp->execute();

    return $smtp->fetch();
  }


}

?>
