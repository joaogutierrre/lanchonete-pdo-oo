<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 

require 'classes/Categoria.php'; 
require 'classes/CategoriaDAO.php';
$categoriaDAO = new CategoriaDAO();
$categorias = $categoriaDAO->listar();

?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
<style type="text/css">
	#title{
		margin: 1em;
	}
	#botaoNovaCategoria{
		position: relative;
		top: 2em;
	}
	#divTitulo{
		position: relative;
		left: 13em;
	}
</style>

<div class="row">
	<div class="col-10" id="divTitulo">
		<center>
			<h2 id="title">Gerência de Categorias</h2>
		</center>
	</div>
	<div class="col-1">
		<a href="form_categoria.php" class="btn btn-success" id="botaoNovaCategoria">Nova Categoria</a>
	</div>	
</div>
<div class="container col-sm-8">
	<div class="row">
		<table class="table table-hover table-bordered">
			<thead align="center" class="table-active">
				<th class="col-sm-1">ID</th>
				<th class="col-sm-6">Nome</th>
				<th class="col-sm-1">Gerência</th>
			</thead>
			<tbody>
				<?php foreach($categorias as $categoria){ ?>
				<tr>
					<td><?= $categoria->getId() ?></td>
					<td><?= $categoria->getNome() ?></td>
					<td>
						<a href="form_categoria.php?id=<?= $categoria->getId() ?>">Editar</a> |
						<a href="controle_categoria.php?acao=deletar&id=<?= $categoria->getId() ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>	
</div>


<?php include './layout/footer.php'; ?>