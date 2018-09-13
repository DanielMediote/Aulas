<?php


/**
 *
 */
class Marca extends Crud
{

  protected $tabela = 'marca';
  protected $id;
  protected $nome;
  protected $forenecedor;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getFornecedor()
  {
    return $this->fornecedor;
  }

  public function setFornecedor($fornecedor)
  {
    $this->fornecedor = $fornecedor;
  }

  public function insert(){
    $sqlInsert = "INSERT INTO {$this->tabela}(marca_nome, marca_fornecedor) VALUES(:nome, :fornecedor)";
    $smtp = Conexao::prepare($sqlInsert);
    $smtp->bindParam(':nome', $this->nome, PDO::PARAM_STR);
    $smtp->bindParam(':fornecedor', $this->fornecedor, PDO::PARAM_STR);
    $smtp->execute();
  }

  public function update()
  {
    $sqlSelect = "UPDATE {$this->tabela} SET marca_nome = :nome, marca_fornecedor = :fornecedor WHERE mar_id = :id";
    $smtp = Conexao::prepare($sqlSelect);
    $smtp->bindParam(':id',$this->id,PDO::PARAM_INT);
    $smtp->bindParam(':nome',$this->nome,PDO::PARAM_STR);
    $smtp->bindParam(':fornecedor',$this->fornecedor,PDO::PARAM_STR);
    $smtp->execute();

    return $smtp->fetch();
  }
}

 ?>
