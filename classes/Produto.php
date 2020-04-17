<?php 

class Produto
{
	private $id;
	private $nome;
	private $preco;
	private $categoria;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPreco()
    {
        return number_format($this->preco, 2, ',','.');
    }

    public function getPrecoBD()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $preco = str_replace('.', '', $preco);
        $preco = str_replace(',', '.', $preco);

        $this->preco = $preco;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}