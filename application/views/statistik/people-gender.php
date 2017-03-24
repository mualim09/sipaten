<div class="row">
	<div class="col-md-3">
        <?php $this->load->view('statistik/nav-kependudukan'); ?>
	</div>
	<div class="col-md-9">
        <div class="box box-solid">
            <div class="box-body">
                <div id="chart-populasi-gender"></div>
            </div>
            <div class="box-header">
                <a href="<?php echo site_url('stats_people/print_out/gender') ?>" class="btn btn-default btn-flat btn-sm btn-print"><i class="fa fa-print"></i> Cetak</a>
                <a href="<?php echo site_url('stats_people/export/gender_population') ?>" class="btn btn-default btn-flat btn-sm"><i class="fa fa-download"></i> Ekspor</a>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered col-md-12" style="margin-top: 10px;">
                    <thead class="bg-silver">
                        <tr>
                            <th width="30">No. </th>
                            <th class="text-center">Jenis Kelompok</th>
                            <th class="text-center" colspan="2">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td class="text-center">Laki-laki</td>
                            <td class="text-center"><?php echo $this->stats_people->gender_population('laki-laki'); ?> Orang</td>
                            <td class="text-center"><?php echo $this->stats_people->gender_population('laki-laki', TRUE); ?> %</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td class="text-center">Perempuan</td>
                            <td class="text-center"><?php echo $this->stats_people->gender_population('perempuan'); ?> Orang</td>
                            <td class="text-center"><?php echo $this->stats_people->gender_population('perempuan', TRUE); ?> %</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Total : </th>
                            <th class="text-center"><?php echo ($this->stats_people->gender_population('perempuan')+$this->stats_people->gender_population('laki-laki')) ?> Orang</th>
                            <th class="text-center"><?php echo ceil($this->stats_people->gender_population('laki-laki', TRUE)+$this->stats_people->gender_population('perempuan', TRUE)) ?> %</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
Highcharts.chart('chart-populasi-gender', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Populasi Penduduk Menurut Jenis Kelamin'
    },
    subtitle: {
        text: '<strong>Kecamatan <?php echo $this->option->get('kecamatan'); ?></strong>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Populasi',
        data: [
            {'name': 'Laki-laki','y':<?php echo $this->stats_people->gender_population('laki-laki', TRUE); ?>},
            {'name': 'Perempuan','y':<?php echo $this->stats_people->gender_population('perempuan', TRUE); ?>},
        ]
    }]
});
</script>