<?php 
require 'Model.php'
class ProdutoDAO extends Model
{
	function __construct()
	{
		$this->tabela = 'produtos';
	}
}