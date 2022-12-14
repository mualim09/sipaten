<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<div class="col-md-7">
					<h3 class="box-title">Data Pengguna Sistem</h3>
				</div>
			</div>
			<div class="box-body">
<?php  
/**
 * Start Form Pencarian
 *
 * @return string
 **/
echo form_open(current_url(), array('method' => 'get'));
?>
				<div class="col-md-7">
					Tampilkan 
					<select name="per_page" class="form-control input-sm" style="width:60px; display: inline-block;" onchange="window.location = '<?php echo site_url('user?per_page='); ?>' + this.value + '&query=<?php echo $this->input->get('query'); ?>';">
					<?php  
					/**
					 * Loop 10 to 100
					 * Guna untuk limit data yang ditampilkan
					 * 
					 * @var 10
					 **/
					$start = 20; 
					while($start <= 100) :
						$selected = ($start == $this->input->get('per_page')) ? 'selected' : '';
						echo "<option value='{$start}' " . $selected . ">{$start}</option>";

						$start += 10;
					endwhile;
					?>
					</select>
					per halaman
				</div>
				<div class="btn-group col-md-2">
					<a href="<?php echo site_url('user/create') ?>" class="btn btn-warning hvr-shadow btn-flat btn-sm"><i class="fa fa-plus"></i> Tambah Baru</a>	
				</div>
            <div class="col-md-3">
               <div class="input-group input-group-sm">
                  <input type="text" name="query" class="form-control pull-right" name="<?php echo $this->input->get('query') ?>" placeholder="Pencarian ...">
                  <div class="input-group-btn">
                  	<button type="submit" class="btn btn-warning hvr-shadow"><i class="fa fa-search"></i></button>
                  </div>
               </div>
            </div>
<?php  
// End form pencarian
echo form_close();

/**
 * Start Form Multiple Action
 *
 * @return string
 **/
echo form_open(site_url('user/bulk_action'));
?>
				<table class="table table-hover table-bordered col-md-12" style="margin-top: 10px;">
					<thead class="bg-silver">
						<tr>
							<th width="30">
			                    <div class="checkbox checkbox-inline">
			                        <input id="checkbox1" type="checkbox"> <label for="checkbox1"></label>
			                    </div>
							</th>
							<th class="text-center">NIP</th>
							<th>Nama Pengguna</th>
							<th class="text-center">Alamat</th>
							<th class="text-center">E-Mail</th>
							<th class="text-center">Telepon</th>
							<th>Level Akses</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
				<?php  
				/**
				 * Loop Data Users
				 *
				 **/
				foreach($users as $row) :
				?>
						<tr>
							<td>
					<?php if($row->user_id != 1) : ?>
			                    <div class="checkbox checkbox-inline">
			                        <input type="checkbox" name="users[]" value="<?php echo $row->user_id; ?>"> <label></label>
			                    </div>
					<?php endif; ?>
							</td>
							<td><?php echo $row->nip; ?></td>
							<td><?php echo $row->name; ?></td>
							<td><?php echo $row->address; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->phone; ?></td>
							<td><?php echo $row->role_name; ?></td>
							<td class="text-center" width="80">
					<?php if($row->user_id != 1) : ?>
								<a href="<?php echo site_url("user/update/{$row->user_id}") ?>" class="icon-button text-blue" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="fa fa-pencil"></i></a>
								<a class="icon-button text-red get-delete-user" data-id="<?php echo $row->user_id; ?>" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i></a>
					<?php endif; ?>
							</td>
						</tr>
				<?php  
				endforeach;
				?>
					</tbody>
					<tfoot>
						<th>
	                    <div class="checkbox checkbox-inline">
	                        <input id="checkbox1" type="checkbox"> <label for="checkbox1"></label>
	                    </div>
						</th>
						<th colspan="6">
							<label style="font-size: 11px; margin-right: 10px;">Yang terpilih :</label>
							<!-- <button type="submit" name="action" value="update" class="btn btn-xs btn-round btn-primary"><i class="fa fa-pencil"></i> Sunting</button> -->
							<a class="btn btn-xs btn-round btn-danger get-delete-user-multiple"><i class="fa fa-trash-o"></i> Hapus</a>
							<small class="pull-right"><?php echo count($users) . " dari " . $num_users . " data"; ?></small>
						</th>
					</tfoot>
				</table>

				<div class="modal animated fadeIn modal-danger" id="modal-delete-user-multiple" tabindex="-1" data-backdrop="static" data-keyboard="false">
				    <div class="modal-dialog modal-sm">
				        <div class="modal-content">
				           	<div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                <h4 class="modal-title"><i class="fa fa-question-circle"></i> Hapus!</h4>
				                <span>Hapus pengguna ini dari sistem?</span>
				           	</div>
				           	<div class="modal-footer">
				                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
				                <button type="submit" name="action" value="delete" id="btn-delete" class="btn btn-outline"> Hapus </button>
				           	</div>
				        </div>
				    </div>
				</div>
<?php  
// End Form Multiple Action
echo form_close();
?>
			</div>
			<div class="box-footer text-center">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>



<div class="modal animated fadeIn modal-danger" id="modal-delete-user" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
           	<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-question-circle"></i> Hapus!</h4>
                <span>Hapus pengguna ini dari sistem?</span>
           	</div>
           	<div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                <a href="#" id="btn-delete" class="btn btn-outline"> Hapus </a>
           	</div>
        </div>
    </div>
</div>