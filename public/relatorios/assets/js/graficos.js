google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['', 'Produtos Vendidos',],
        ['Doce', 3792000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
      ]);

      var options = {
        backgroundColor: '#212529',
        title: 'Produtos Vendidos ',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0,
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