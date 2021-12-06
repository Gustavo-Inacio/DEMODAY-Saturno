google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['', 'Produtos Vendidos',],
        ['Doce', 370, ],
        ['Desinfetante', 350, ],
        ['Salgadinho', 500,],
        ['Refrigerante', 400, ],
        ['Café', 300, ]
      ]);

      var options = {
        backgroundColor: 'none',
        colors: ['#fc0fc0'],
        chartArea: {width: '50%'},
        hAxis: {
          textStyle:{color: 'white'}
  },
        legend: {
          position: 'none' 
        },
        vAxis: {
        
          textStyle:{color: 'white'},
        },
        titleTextStyle: { color: 'white' },
        
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

      chart.draw(data, options);
    }