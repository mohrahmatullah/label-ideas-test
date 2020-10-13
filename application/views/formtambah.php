<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">
				
				<?php
					if(isset($_SESSION['input_sukses']))
					{
				?>
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
						</div>
				<?php
					}
				?>

				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data User</div>
					<div class="panel-body">
						
						<?php echo form_open('home/tambahuser', ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<div class="form-group <?php echo (form_error('username') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="username" class="control-label col-sm-2">Username </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>">
									<?php echo (form_error('username') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('username'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="control-label col-sm-2">Email </label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
									<?php echo form_error('email'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="control-label col-sm-2">Password </label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
									<?php echo form_error('password'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status" class="control-label col-sm-2">Status </label>
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="active">active</option>
										<option value="archived">archived</option>
									</select>
									<?php echo form_error('status'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat" class="control-label col-sm-2">Alamat </label>
								<div class="col-sm-10">
							        <div class="table-responsive">  
						                <table class="table table-bordered" id="dynamic_field">

						                    <tr>  
						                        <td><input type="text" name="alamat[0][detail]" class="form-control name_list" required="" /></td>
						                        <td><input type="checkbox" id="1" name="alamat[0][preferred]" class="form-control" value="1" /></td>  
						                        <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
						                    </tr>  
						                </table> 
						            </div>
								</div>
							</div>

							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('/'); ?>"><button type="button" class='btn btn-default'>Back</button></a>
									<button type="submit" class='btn btn-primary'>Simpan</button>
								</div>
							</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>