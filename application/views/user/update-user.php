<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<dov class="col-md-8 col-md-offset-2 col-xs-12">
		<div class="box box-primary">
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open(current_url(), array('class' => 'form-horizontal'));

echo form_hidden('ID', $get->user_id);
?>
			<div class="box-body" style="margin-top: 10px;">
				<div class="form-group">
					<label for="email" class="control-label col-md-3 col-xs-12">NIP : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="nip" class="form-control" value="<?php echo $get->nip; ?>">
						<p class="help-block"><?php echo form_error('nip', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="control-label col-md-3 col-xs-12">Nama Lengkap : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="name" class="form-control" value="<?php echo $get->name; ?>">
						<p class="help-block"><?php echo form_error('name', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="control-label col-md-3 col-xs-12">Status : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
	                    <div class="radio radio-info radio-inline">
	                        <input type="radio" name="status" value="1" <?php if($get->active==1) echo "checked"; ?>>
	                        <label> Aktif </label>
	                    </div>
	                    <div class="radio radio-inline">
	                        <input type="radio" name="status" value="0" <?php if($get->active==0) echo "checked"; ?>>
	                        <label> Tidak Aktif </label>
	                    </div>
						<p class="help-block"><?php echo form_error('status', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="role" class="control-label col-md-3 col-xs-12">Level Akses : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<select name="role" class="form-control">
							<option value="">-- PILIH --</option>
							<?php  
							/**
							 * Start Loop roles
							 *
							 * @var string
							 **/
							foreach($roles as $row) :
							?>
							<option value="<?php echo $row->role_id; ?>" <?php if($get->role_id==$row->role_id) echo "selected"; ?>><?php echo $row->role_name; ?></option>
							<?php  
							// End Loop roles
							endforeach;
							?>
						</select>
						<p class="help-block"><?php echo form_error('role', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
			</div>

			<div class="box-footer with-border">
				<div class="col-md-4 col-xs-5">
					<a href="<?php echo site_url('user') ?>" class="btn btn-app hvr-shadow pull-right">
						<i class="ion ion-reply"></i> Kembali
					</a>
				</div>
				<div class="col-md-6 col-xs-6">
					<button type="submit" class="btn btn-app hvr-shadow pull-right">
						<i class="fa fa-save"></i> Simpan
					</button>
				</div>
			</div>
			<div class="box-footer with-border">
					<small><strong class="text-red">*</strong>	Field wajib diisi!</small> <br>
					<small><strong class="text-blue">*</strong>	Field Optional</small>
			</div>
<?php  
// End Form
echo form_close();
?>
		</div>
	</dov>
</div>