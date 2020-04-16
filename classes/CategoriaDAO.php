<?php 
require 'Model.php';
class CategoriaDAO extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->tabela = 'categorias';
		$this->class = 'Categoria';
	}

	public function insereCategoria(Categoria $categoria)
	{
		$values = "null,'{$categoria->getNome()}'";
		$this->inserir($values);
	}

	public function alteraCategoria()
	{
		$values = "nome = '{$categoria->getNome()}'";
		$this->alterar($categoria->getId(), $values);
	}
}