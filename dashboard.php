<?php include('footer.php'); ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="min-width: 1000px;  height: 100ph; max-width:60%; font-size: 22px; margin: 0 auto"></div>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Statistik Pemasaran'
    },
    subtitle: {
        text: 'Toko XY'
    },
    xAxis: { 
    //INI ADALAH UNTUK KOLOM KETERANGAN
        categories: [ 
            'I/a',
            'I/b',
            'I/c',
            'I/d',
            'II/a',
            'II/b',
            'II/c',
            'II/d',
            'III/a',
            'III/b',
            'III/c',
            'III/d',
            'IV/a',
            'IV/b',
            'IV/c',
            'IV/d',
            'IV/e',
        ],
         title: {
            text: 'Golongan'
        },
        crosshair: true
    },
    yAxis: {
         
        title: {
            text: 'Jumlah'
        }
    },
     
    tooltip: {
        headerFormat: '<span style="font-size:8pt">{point.key}</span><table style="font-size:8pt">',
        pointFormat: '<tr><td style="color:{series.color};padding:0">Jml.: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.,
            borderWidth: 0
        }
    },
    series: [{
         colorByPoint: true,
       showInLegend: false,
        
        data: [15,18,87,55,558,408,366,331,522,659,475,597,397,74,31,250,300] //INI ADALAH UNTUK JUMLAH
 
    },
    ]
});
</script>