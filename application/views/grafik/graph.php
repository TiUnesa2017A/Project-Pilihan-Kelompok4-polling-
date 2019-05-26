<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<!-- refresh otomatis, setInterval -->
<meta http-equiv="refresh" content="60;url=#">

<style>
.chart1{
  margin: 0 0 0 0;
  float: left;
  margin-top: 80px;
}
.chart2{
  float: right;
  margin-top: 80px;
}
</style>
<div class="chart1" id="container"></div>
<div class="chart2" id="container2"></div>

<script>
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Jumlah ketua osis'
    },
    credits: {
      enabled: false
  },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}%</b> of total<br/>'
    },
    series: [{
        name: 'Ketua osis',
        colorByPoint: true,
        data: [<?php foreach ($get_ketua as $ketua):?>{
            name: '<?php echo $ketua->nama_calon; ?>',
            <?php foreach ($get_sumketua as $max): $r=$ketua->jumlah_vote/$max->jumlah_vote*100; ?>
            y: <?php echo (int)$r; ?>,
            <?php endforeach; ?>
        },<?php endforeach; ?>]
    }],




});

Highcharts.chart('container2', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Jumlah vote wakil osis'
    },
    credits: {
      enabled: false
  },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}%</b> of total<br/>'
    },
    series: [{
        name: 'Wakil osis',
        colorByPoint: true,
        data: [<?php foreach ($get_wakil as $wakil):?>{
            name: '<?php echo $wakil->nama_calon; ?>',
            <?php foreach ($get_sumwakil as $max): $z=$wakil->jumlah_vote/$max->jumlah_vote*100; ?>
            y: <?php echo (int)$z; ?>,
            <?php endforeach; ?>
        },<?php endforeach; ?>]
    }],

});
</script>
