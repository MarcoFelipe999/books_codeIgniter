<?php $this->load->view('layouts/header') ?>
<div class="row mb-2 mt-3">
	<h4>Listar Livros</h4>
</div>
<a class="btn btn-primary" href="<?php echo base_url('livro/create') ?>">Cadastrar</a>
<div class="table-responsive">
	<table class="table table-sm">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Autor</th>
				<th>Preço</th>
				<th>Categoria</th>
				<th>Opção</th>
			
			</tr>
		</thead>
		<tbody>
			<?php foreach($livros as $livro): ?>
				<tr>
					<td><?php echo $livro->titulo ?></td>
					<td><?php echo $livro->autor ?></td>
					<td><?php echo $livro->preco ?>   
					<td><?php echo $livro->categoria?>   
					<td>
						<?php if($livro->categoria_id == $categoria_vendedor_id): ?>
						<a class="btn btn-primary" href="<?php echo base_url('livro/edit/'.$livro->id) ?>">Editar</a> 
						<a class="btn btn-danger" href="<?php echo base_url('livro/delete/'.$livro->id) ?>">Deletar</a>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
		
<?php $this->load->view('layouts/footer') ?>
