<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12 col-xs-12">
		<div class="box box-primary">
            <div class="box-header with-border">
              	<h3 class="box-title">Surat Keterangan <?php echo $title; ?></h3>
            </div>
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open(current_url(), array('class' => 'form-horizontal'));
?>
			<div class="box-body" style="margin-top: 10px;">
				<div class="col-md-7">
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Nomor Surat : <strong class="text-red">*</strong></label>
						<div class="col-md-7 block-no-surat">
							<strong><?php echo $get->kode_surat; ?>/</strong>
							<input type="text" name="nomor_surat" class="no_surat" id="no_surat" value="<?php echo $get->nomor_surat; ?>" readonly="">
							<strong>/<?php echo $this->option->get('kode_kecamatan'); ?>/<?php echo date('Y') ?></strong>
							<p class="help-block"><?php echo form_error('nomor_surat', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<p class="legend-form">Identitas Usaha : </p>
						</div>
						<label for="email" class="control-label col-md-3 col-xs-12">Nama Perusahaan : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[nama_perusahaan]" class="form-control" value="<?php echo $isi->nama_perusahaan; ?>">
							<p class="help-block"><?php echo form_error('isi[nama_perusahaan]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Bentuk Perusahaan : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[bentuk_perusahaan]" class="form-control" value="<?php echo $isi->bentuk_perusahaan; ?>">
							<p class="help-block"><?php echo form_error('isi[bentuk_perusahaan]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">NPWP : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[npwp]" class="form-control" value="<?php echo $isi->npwp; ?>">
							<p class="help-block"><?php echo form_error('isi[npwp]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Kegiatan  : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[kegiatan_usaha]" class="form-control" value="<?php echo $isi->kegiatan_usaha; ?>">
							<p class="help-block"><?php echo form_error('isi[kegiatan_usaha]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Sarana  : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[sarana_usaha]" class="form-control" value="<?php echo $isi->sarana_usaha; ?>">
							<p class="help-block"><?php echo form_error('isi[sarana_usaha]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Alamat  : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<textarea name="isi[alamat_perusahaan]" class="form-control" cols="30" rows="3"><?php echo $isi->alamat_perusahaan; ?></textarea>
							<p class="help-block"><?php echo form_error('isi[alamat_perusahaan]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Jumlah Modal  : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[jml_modal_usaha]" class="form-control" value="<?php echo $isi->jml_modal_usaha; ?>">
							<p class="help-block"><?php echo form_error('isi[jml_modal_usaha]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Nomor Pendaftaran : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[no_pendaftaran]" class="form-control" value="<?php echo $isi->no_pendaftaran; ?>">
							<p class="help-block"><?php echo form_error('isi[no_pendaftaran]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<p class="legend-form"></p>
						</div>
						<label for="pemeriksa" class="control-label col-md-3 col-xs-12">Petugas Verifikasi : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<select name="pemeriksa" class="form-control">
								<option value="">- PILIH -</option>
					<?php  
					/* Loop Data Pegawai */
					foreach($pemeriksa as $row) :
					?>
								<option value="<?php echo $row->ID; ?>" <?php if($row->ID==$get->pemeriksa) echo 'selected'; ?>><?php echo $row->nama; ?></option>
					<?php  
					endforeach;
					?>
							</select>
							<p class="help-block"><?php echo form_error('pemeriksa', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Tanda Tangan : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<select name="ttd_pejabat" class="form-control">
								<option value="">- PILIH -</option>
					<?php  
					/* Loop Data Pegawai */
					foreach($pegawai as $row) :
					?>
								<option value="<?php echo $row->ID; ?>" <?php if($row->ID==$get->pegawai) echo 'selected'; ?>><?php echo $row->nama; ?> (<?php echo $row->jabatan; ?>)</option>
					<?php  
					endforeach;
					?>
							</select>
							<p class="help-block"><?php echo form_error('ttd_pejabat', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>		
					<div class="form-group">
						<div class="col-md-12"> <hr> </div>
						<div class="col-md-3">
							<small><strong class="text-red">*</strong>	Field wajib diisi!</small> <br>
							<small><strong class="text-blue">*</strong>	Field Optional</small>
						</div>
						<div class="col-md-3">
							<a href="<?php echo site_url('surat_keluar') ?>" class="btn btn-app hvr-shadow">
								<i class="ion ion-reply"></i> Kembali
							</a>
						</div>
						<div class="col-md-5 col-xs-6 pull-right">
							<?php  
							if( $get->status == 'approve' OR $this->permission->is_admin()) :
							?>
							<a href="<?php echo site_url("surat_keluar/print_surat/{$get->ID}") ?>" class="btn btn-app btn-print hvr-shadow">
								<i class="fa fa-print"></i> Cetak
							</a>
							<?php  
							endif;
							?>
							<button type="submit" class="btn btn-app hvr-shadow pull-right">
								<i class="fa fa-save"></i> Simpan
							</button>
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<?php  
					/**
					 * Tampilkan Data Pemohon
					 *
					 * @var string
					 **/
					$this->load->view('surat-keluar/data-pemohon');
					?>
				</div>
			</div>
<?php  
// End Form
echo form_close();
?>
		</div>
	</div>
</div>