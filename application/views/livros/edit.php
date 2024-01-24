<?php $this->load->view('layouts/header') ?>

<div class="row mb-2 mt-3">
	<h4>Edit book</h4>
</div>
<div class="card">
	<div class="card-body">
		<h5 class="card-title">Dados do livro</h5>
		<form action="<?php echo base_url('livro/update/'.$livro->id) ?>" method="post">
			<div class="form-group mb-3">
				<input type="text" class="form-control" id="titulo" value="<?php echo $livro->titulo ?>" name="titulo" aria-describedby="title" placeholder="Title Book">
			</div>
			<div class="form-group mb-3">
				<input type="text" class="form-control" id="autor" value="<?php echo $livro->autor ?>"name="autor" aria-describedby="author" placeholder="Author Book">
			</div>
			<div class="form-group mb-3">
				<input type="text" class="form-control" id="preco" value="<?php echo $livro->preco ?>"name="preco" aria-describedby="price" placeholder="Price Book">
			</div>
			<div class="form-group mb-3">
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	</div>
</div>
<?php $this->load->view('layouts/footer') ?>
