<?php 

require 'Coenxao.php';
class Model
{
	protected $tabela;
	Conexao::conectar()
	public function inserir($values)
	{
		$sql = "INSERT INTO {$this->tabela} VALUES ('{$values}')";
		echo $sql;
	}
}