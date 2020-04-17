<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php require 'classes/Categoria.php'; ?>
<?php require 'classes/CategoriaDAO.php'; ?>
<?php
	$categoria = new Categoria();
	if(isset($_GET['id'] && $_GET['id'] != '')){
		$id = $_GET['id'];
		$categoriaDAO = new CategoriaDAO();
		$categoria = $categoriaDAO->get($id);
	}
?>

<style type="text/css">
	#div-formcategoria1{
		position: relative;
		left: 400px;

	}
</style>
<div class="container">
	<div class="row" id="div-formcategoria1">
		<div class="col-sm-3">
			<p>&nbsp;</p>
			<form action="controle_categoria.php?acao=<?= ($categoria->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
				<div class="form-group">
					<label for="id">ID</label>
					<input type="text" class="form-control" name="id" id="id" value="<?=($categoria-->getId() != '' ? $categoria->getId() : '')?>" readonly="">
				</div>
				<div class="form-group">
					<label for="id">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" required="" value="<?= ($categoria->getNome() != '' ? $categoria->getNome() : '') ?>">
				</div>
				<div class="form-group" align="right">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include './layout/footer.php'; ?>