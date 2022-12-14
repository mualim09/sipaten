<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('userguide/parent-navigation', $this->data);

?>
   <div class="col-md-9">
        <div class="box box-solid">
            <div class="box-body box-userguide">
            	<h4>Bagaimana Membuat Surat Non Perizinan? </h4>
				<p>Untuk membuat Surat Non Perizinan yaitu :</p>
				<ol class="list-angka">
					<li><p>Pilih salah satu Surat melalui tombol <strong>Shortcut Surat Non Perizinan</strong> pada dashboard Tempayan atau Menu Navigasi <strong>Surat Non Perizinan</strong>.</p>
                    <img src="<?php echo base_url('public/image/userguide/shortcut-non.png'); ?>" width="300" alt="Shortcut" class="" style="margin: 20px;">
                     <img src="<?php echo base_url('public/image/userguide/menu-non.png'); ?>" width="150" alt="Shortcut" class="" style="margin: 20px;">
                    </li>
					<li><p>Lalu cari data pemohon berdasarkan NIK atau Nama kemudian <strong>Pilih</strong> atau <strong>Klik</strong></p>.
                    <img src="<?php echo base_url('public/image/userguide/isi-nik.png'); ?>" alt="Shortcut" class="" style="margin: 20px;">
                    </li>
					<li><p>Kemudian isikan beberapa form isian surat. Kemudian klik simpan.</p></li>
				</ol>
            </div>
            <div class="box-footer with-border">

            </div>
        </div>
    </div>
</div>

<?php
/* End of file proses-1.php */
/* Location: ./application/views/userguide/proses-1.php */