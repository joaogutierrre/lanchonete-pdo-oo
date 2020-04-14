<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
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
			<form action="cadastrar_categoria.php" method="post">
				<div class="form-group">
					<label for="id">ID</label>
					<input type="text" class="form-control" name="id" id="id" disabled="">
				</div>
				<div class="form-group">
					<label for="id">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" required="">
				</div>
				<div class="form-group" align="right">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include './layout/footer.php'; ?>