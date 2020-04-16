<?php 
require 'Model.php';
class CategoriaDAO extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->tabela = 'categorias';
	}
	public function insereCategoria(Categoria $categoria)
	{
		$values = "null,'{$categoria->getNome()}'";
		$this->inserir($values);
	}
}