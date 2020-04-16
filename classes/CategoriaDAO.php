<?php 
require 'Model.php';
class CategoriaDAO extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->tabela = 'categorias';
	}
}