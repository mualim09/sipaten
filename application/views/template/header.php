<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | <?php echo $this->option->get('nama_sistem'); ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet/less" type="text/css" href="<?php echo base_url("public/build/sipaten.less"); ?>" media="screen, projection"/>
  <link rel="stylesheet" href="<?php echo base_url("public/bootstrap/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/font-awesome/css/font-awesome.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/ionicons/css/ionicons.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/select2/select2.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/dist/css/AdminLTE.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/dist/css/skins/skin-sipaten.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/dist/css/animate.css"); ?>">  
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/bootstrap-checkbox/awesome-bootstrap-checkbox.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/plugins/validation/css/formValidation.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/datepicker/datepicker3.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/autocomplete/tautocomplete.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/bootstrap-tour/css/bootstrap-tour.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); ?>">
  <link  rel="stylesheet" href="<?php echo base_url("public/dist/css/hover-min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/plugins/datatables/dataTables.bootstrap.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/plugins/lightbox/ekko-lightbox.min.css"); ?>" media="screen" />
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url("public/image/{$this->option->get('small_logo')}"); ?>"/>
  <script src="<?php echo base_url("public/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/bootstrap/js/bootstrap.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/slimScroll/jquery.slimscroll.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/fastclick/fastclick.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/jquery.sticky.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/app.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/jquery.tableCheckbox.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/jquery.printPage.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/bnotify/bootstrap-notify.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/jquery.timeago.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/moment.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/select2/select2.full.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/less-1.3.0.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/dist/js/prefixfree.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/datepicker/bootstrap-datepicker.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/heightchart/highcharts.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/heightchart/modules/exporting.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/heightchart/modules/data.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/heightchart/modules/drilldown.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/autocomplete/tautocomplete.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/bootstrap-tour/js/bootstrap-tour.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
  <script src="<?php echo base_url("public/plugins/datatables/dataTables.bootstrap.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("public/plugins/lightbox/ekko-lightbox.min.js") ?>"></script>

  <script type="text/javascript"> 
      var base_url   = '<?php echo site_url(); ?>';
      var base_path  = '<?php echo base_url('public'); ?>';
      var current_url = '<?php echo current_url(); ?>';
      var my_channel = 'channel-<?php echo $this->session->userdata('account')->nip; ?>';
  </script>

  <style>
    .content-wrapper { background: #F4F5F7 }
    * { font-family: 'Arial', sans-serif; font-size: 13px; }
    li > a > i.ion { font-size: 18px; }
    a.link { color:blue; }
    a.link:hover { color:#00C0EF; }
    .mini-font { font-size:0.9em; }
    a.active { font-weight: bold; }
    a { cursor: pointer; }
    div.checkbox, label.checkbox { padding-top:0px; padding-bottom: 0px; }
    .bg-silver { background:rgb(249,250,252); border:#444; }
    .icon-button { font-size: 1.1em; margin: 5px 6px 0px 0px; }
    .text-line { text-decoration: line-through; color: rgb(173,0,0); }
    dt { text-align: left; }
    .top { margin-top: 20px; }
    div.kisaran > .ticks_labels { padding: 10px; }
    .bigger-font { font-size: 15px; }
     label.control-label { font-size: 12px !important; } 
     div.icon > i.ion  { font-size: 80px; }
     div.icon > i.fa { font-size: 60px; }
    .block-no-surat > strong { font-size: 16px; }
     input.no_surat { padding: 0px 0px 0px 0px; width:42px;   border-bottom: none;  border-top: none; border-right: none; border-left: none; text-align:center; font-size: 16px; font-weight: bold;
       position: inline; color:orange;
     }
    input.no_surat:focus { outline:none !important; }
    div.modal-sm {
      top:30%;
    }
    small > a { font-size:inherit; }
    iframe { width: 100%; min-height:530px;  }
  </style>
</head>
<?php
/* End of file header.php */
/* Location: ./application/views/template/header.php */