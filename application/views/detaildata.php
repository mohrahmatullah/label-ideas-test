<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Detail Data User</div>
					<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label for="username" class="control-label col-sm-2">username </label>
									</div>
									<div class="col-md-8">
										<?php echo $db->username; ?>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label for="email" class="control-label col-sm-2">email </label>
									</div>
									<div class="col-md-8">
										<?php echo $db->email; ?>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label for="password" class="control-label col-sm-2">password </label>
									</div>
									<div class="col-md-8">
										<?php echo $db->password; ?>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label for="harga" class="control-label col-sm-2">status </label>
									</div>
									<div class="col-md-8">
										<?php echo $db->status; ?>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label for="harga" class="control-label col-sm-2">Alamat </label>
									</div>
									<div class="col-md-8">
										<div class="table-responsive">  
							                <table class="table table-bordered">
							                	<?php foreach($db_alamat as $db_a) : ?>
							                    <tr>  
							                        <td>*</td>
							                        <td><label><?php echo $db_a->detail; ?></label></td>
							                        <td><?php if($db_a->preferred == 1 ) { ?>
														<span class="glyphicon glyphicon-ok" aria-hidden="true"> Preferred</span>
														<?php } ?>
													</td>    
							                    </tr>  
							                    <?php endforeach; ?>
							                </table>

							            </div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('/'); ?>"><button type="button" class='btn btn-default'>Back</button></a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>