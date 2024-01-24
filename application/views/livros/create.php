
<?php $this->load->view('layouts/header') ?>
		<div class="row mb-2 mt-3">
			<h4>Cadastrar Livro</h4>
		</div>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Dados do livro</h5>
				<form action="<?php echo base_url('livro/store') ?>" method="post">
					<div class="form-group mb-3">
						<input type="text" class="form-control" id="title" name="titulo" aria-describedby="title" placeholder="Title Book">
					</div>
					<div class="form-group mb-3">
						<input type="text" class="form-control" id="author" name="autor" aria-describedby="author" placeholder="Author Book">
					</div>
					<div class="form-group mb-3">
						<input type="text" class="form-control" id="price" name="preco" aria-describedby="price" placeholder="Price Book">
					</div>
					<!-- <div class="form-group mb-3">
						<label for="">Categorias</label>
						<select class="form-control" name="categoria_id" id="">
							<?php foreach($categorias as $categoria): ?>
								<option value="<?php echo $categoria->id ?>"><?php echo $categoria->titulo ?></option>
							<?php endforeach ?>
						</select>	
					</div> -->
					<div class="form-group mb-3">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
<?php $this->load->view('layouts/footer') ?>
