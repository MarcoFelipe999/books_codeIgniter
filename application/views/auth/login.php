<?php $this->load->view('layouts/header'); ?>



<div class="card mx-auto my-5" style="width: 28rem;">
  <div class="card-header">
  Entrar sistema
  </div>
  <div class="card-body">
    <form action="<?php echo base_url('home/logar') ?>" method='post'>
	<div class="form-group mb-3">
		<label for="">Usuários</label>
		<select class="form-control" name="user_id" id="">
			<?php foreach($vendedores as $vendedor): ?>
				<option value="<?php echo $vendedor->id ?>"><?php echo $vendedor->nome ?></option>
			<?php endforeach ?>
		</select>	
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Entrar</button>
	</div>
</form>
  </div>

<?php $this->load->view('layouts/footer'); ?>
