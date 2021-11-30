google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['', 'Produtos Vendidos',],
        ['Doces', 500],
        ['Leite', 300],
        ['Sucos', 200],
        ['Arroz', 330],
        ['Feijão', 111]
      ]);

      var options = {
        backgroundColor: '#212529',
        title: 'Total de Vendas',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Quantidade',
          minValue: 2,
          textStyle:{color: 'white'}
        },
        vAxis: {
          title: 'City',
          textStyle:{color: 'white'},
        },
        titleTextStyle: { color: 'white' },
        
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

      chart.draw(data, options);
    }