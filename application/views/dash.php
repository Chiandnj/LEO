<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Deposits Chart</title>
        <script src="<?php echo base_url()?>assets/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.7.2.min.js"></script>
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <script type="text/javascript">
        $(document).ready(function() {
            var options = {
			credits:{enabled:false},
                chart: {
                    renderTo: 'container',
                    type: 'spline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Deposits',
                    x: -20 //center
                },
                subtitle: {
                    text: '',
                    x: -20
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Amount'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                
                series: []
            }
            
            $.getJSON("data", function(json) {
            options.xAxis.categories = json[0]['data'];
                options.series[0] = json[1];
                
                
                chart = new Highcharts.Chart(options);
            });
        });
        </script>
           <script src="<?php echo base_url()?>assets/highcharts.js"></script>
        <script src="<?php echo base_url()?>assets/modules/exporting.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>