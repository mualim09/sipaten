<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('surat-stats/nav-surat-stats', $this->data);

?>
   <div class="col-md-9">
        <div class="box box-solid">
            <div class="box-body">
                <div id="chart-perizinan"></div>
            </div>
            <div class="box-body">
            	<div id="chart-bar"></div>
            </div>
        </div>
    </div>
</div>

<script>
Highcharts.chart('chart-perizinan', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    colors: ['#FF9200','#F6CA7C','#FCC700','#E8AB2E','#52BD33','#42CBEC','#CDCDCD','#FF6A19'],
    title: {
        text: 'Data Surat Non Perizinan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b><br> Jumlah : <b>{point.y}</b> Surat'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [
        <?php  
        /**
         * Loop Data Desa
         *
         **/
        foreach($this->stats->surat_category(NULL, 'perizinan') as $row) :
        ?>
            {
            	name: '<?php echo $row->nama_kategori; ?>',
            	y:<?php echo $this->stats->count_by_category($row->id_surat); ?>
            },
        <?php  
        endforeach;
        ?>]
    }]
});

/* Bar Chart */
Highcharts.chart('chart-bar', {
    chart: {
        type: 'column'
    },
    colors:['#FFAB19'],
    title: {
        text: 'Rata-rata Data Surat Keluar'
    },
    subtitle: {
        text: 'Tahun : <?php echo $this->stats->year; ?>'
    },
    xAxis: {
        categories: [<?php for($m = 1; $m <= 12; $m++) echo '"'.bulan($m).'",'; ?>],
        crosshair: true
    },
    yAxis: {
        min: 0,
        allowDecimals: false,
        title: {
            text: 'Surat Keluar'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color: {series.color};padding:0"> {series.name} : </td>' +
            '<td style="padding:0"><b> {point.y:f} Data</b></td></tr>',
        footerFormat: '</table>',
        percentageDecimals: 1,
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Surat Keluar',
        data: [<?php for($m = 1; $m <= 12; $m++) echo $this->stats->count_by_month($m, 2017, 'perizinan').','; ?>]

    }]
});
</script>
<?php
/* End of file perizinan.php */
/* Location: ./application/views/surat-stats/perizinan.php */