<?php 
require 'Conexao.php';
class Model
{
	protected $tabela;
	protected $db;

	public function __construct()
	{
		$conexao = new Conexao();
		$this->db = $conexao->conectar();
		print_r($this->db);
	}
	public function inserir($values)
	{
		$sql = "INSERT INTO {$this->tabela} VALUES ($values)";
		$stmt = $this->db->prepare($sql);
		$stmt->execute(); 
	}
	public function listar()
	{
		$sql = "SELECT * FROM {$this->tabela}";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
	}
}