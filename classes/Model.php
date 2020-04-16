<?php 

require 'Coenxao.php';
class Model
{
	protected $tabela;
	protected $db;

	public function __construct()
	{
		 $this->db = Conexao::conectar();
	}
	public function inserir($values)
	{
		$sql = "INSERT INTO {$this->tabela} VALUES ('{$values}')";
		echo $sql;
	}
}