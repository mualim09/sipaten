<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12 col-xs-12">
		<div class="box box-primary">
            <div class="box-header with-border">
              	<h3 class="box-title"> <?php echo $title; ?></h3>
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
							<strong><?php echo $surat->kode_surat; ?>/</strong>
							<input type="text" name="nomor_surat" class="no_surat" id="no_surat" value="<?php echo set_value('nomor_surat'); ?>">
							<strong>/<?php echo $this->option->get('kode_kecamatan'); ?>/<?php echo date('Y') ?></strong>
							<p class="help-block"><?php echo form_error('nomor_surat', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<p class="legend-form">Surat Rekomendasi Keterangan Dari Lurah / Desa</p>
						</div>
						<label for="email" class="control-label col-md-3 col-xs-12">Nomor Surat : <strong class="text-red">*</strong></label>
						<div class="col-md-7">
							<input type="text" name="isi[no_surat_rek]" class="form-control" value="<?php echo set_value('isi[no_surat_rek]'); ?>">
							<p class="help-block"><?php echo form_error('isi[no_surat_rek]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Tanggal Surat : <strong class="text-red">*</strong></label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="isi[tgl_surat_rek]" id="datepicker" value="<?php echo set_value('isi[tgl_surat_rek]'); ?>" placeholder="Ex : <?php echo date('Y-m-d'); ?>">
							<p class="help-block"><?php echo form_error('isi[tgl_surat_rek]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Nama Desa : <strong class="text-red">*</strong></label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="isi[nama_desa]" value="<?php echo set_value('isi[nama_desa]'); ?>">
							<p class="help-block"><?php echo form_error('isi[nama_desa]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<p class="legend-form">Keterangan Domisili</p>
						</div>
						<label for="email" class="control-label col-md-3 col-xs-12">Nama Perusahaan : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<input type="text" name="isi[nama_perusahaan]" class="form-control" value="<?php echo set_value('isi[nama_perusahaan]'); ?>">
							<p class="help-block"><?php echo form_error('isi[nama_perusahaan]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-md-3 col-xs-12">Alamat  : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<textarea name="isi[alamat_perusahaan]" class="form-control" cols="30" rows="3"><?php echo set_value('isi[alamat_perusahaan]'); ?></textarea>
							<p class="help-block"><?php echo form_error('isi[alamat_perusahaan]', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-9 col-md-offset-3">
							<p class="legend-form"></p>
						</div>
						<label for="email" class="control-label col-md-3 col-xs-12">Tanda Tangan : <strong class="text-red">*</strong></label>
						<div class="col-md-9">
							<select name="ttd_pejabat" class="form-control">
								<option value="">- PILIH -</option>
					<?php  
					/* Loop Data Pegawai */
					foreach($pegawai as $row) :
					?>
								<option value="<?php echo $row->ID; ?>" <?php if($row->ID==set_value('ttd_pejabat')) echo 'selected'; ?>><?php echo $row->nama; ?> (<?php echo $row->jabatan; ?>)</option>
					<?php  
					endforeach;
					?>
							</select>
							<p class="help-block"><?php echo form_error('ttd_pejabat', '<small class="text-red">', '</small>'); ?></p>
						</div>
					</div>	
					<div class="form-group">
						<div class="col-md-12"> <hr> </div>
						<div class="col-md-4">
							<small><strong class="text-red">*</strong>	Field wajib diisi!</small> <br>
							<small><strong class="text-blue">*</strong>	Field Optional</small>
						</div>
						<div class="col-md-3 col-xs-6 pull-right">
							<button type="submit" class="btn btn-app">
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
					$this->load->view('create-surat/data-pemohon');
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