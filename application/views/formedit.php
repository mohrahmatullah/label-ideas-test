<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data User</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahmobil'); ?>" method="post" class="form-horizontal"> -->
						
						<?php echo form_open('home/updateuser/'.$db->id, ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<div class="form-group <?php echo (form_error('username') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="username" class="control-label col-sm-2">username </label>
								<div class="col-sm-10">
									<input type="hidden" class="form-control" name="id" value="<?php echo set_value('id', $db->id); ?>">
									<input type="text" class="form-control" name="username" value="<?php echo set_value('username', $db->username); ?>" >
									<?php echo (form_error('username') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('username'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="control-label col-sm-2">email </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" value="<?php echo set_value('email', $db->email); ?>">
									<?php echo form_error('email'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="control-label col-sm-2">password </label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" value="<?php echo set_value('password', $db->password); ?>">
									<?php echo form_error('password'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga" class="control-label col-sm-2">status </label>
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="active" <?php if($db->status == 'active'){ echo 'selected'; } ?> >active</option>
										<option value="archived" <?php if($db->status == 'archived'){ echo 'selected'; } ?> >archived</option>
									</select>
									<?php echo form_error('status'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat" class="control-label col-sm-2">Alamat </label>
								<div class="col-sm-10">
							        <div class="table-responsive">  
						                <table class="table table-bordered">
						                	<?php $no = 0; foreach($db_alamat as $db_a) : ?>
						                    <tr>  
						                        <td><input type="text" name="alamat[<?php echo $no; ?>][detail]" class="form-control name_list" value="<?php echo $db_a->detail; ?>" /></td>
						                        <td><input type="checkbox" id="1" name="alamat[<?php echo $no; ?>][preferred]" class="form-control" value="1" <?php if($db_a->preferred == 1){ echo 'checked'; } ?>/></td>
						                        <td><a href="<?php echo base_url('home/hapusdataalamat/'.$db_a->id.'/'.$db->id); ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button></a></td>    
						                    </tr>  
						                    <?php $no++; endforeach; ?>
						                </table>

						            </div>
						            <!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									  Tambah Alamat
									</button>
									
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
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				    <?php echo form_open('home/tambahalamat/'.$db->id, ['class' => 'form-horizontal', 'method' => 'post']); ?> 
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="form-group">
							<div class="col-sm-12">
						        <div class="table-responsive">						         
					                <table class="table table-bordered" id="dynamic_field_add">
					                	<input type="hidden" name="alamat[0][user_id]" id="adres" class="form-control name_list" value="<?php echo set_value('id', $db->id); ?>" />
					                    <tr>
					                        <td><input type="text" name="alamat[0][detail]" class="form-control name_list" required /></td>
					                        <td><input type="checkbox" id="1" name="alamat[0][preferred]" class="form-control" value="1" /></td>  
					                        <td><button type="button" name="add" id="add_add" class="btn btn-success">+</button></td>  
					                    </tr>  
					                </table> 
					            </div>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Save changes</button>
				      </div>
				      <?php echo form_close(); ?>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>	
</section>
