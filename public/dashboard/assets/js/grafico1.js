google.charts.load('current', { packages: [ 'corechart' ] })
google.charts.setOnLoadCallback(drawChart)

    function drawChart() {
        const container = document.querySelector('#chart')
        const data = new google.visualization.arrayToDataTable([
                [ 'Character', '%', {role: 'style'} ],
                [ 'Doces', 4, 'rgb(132, 16, 240)' ],
                [ 'Limpeza', 10, 'rgb(132, 16, 240)' ],
                [ 'Bebidas', 6, 'rgb(132, 16, 240)' ],
                [ 'Frutas', 8, 'rgb(132, 16, 240)' ],
                [ 'Higiene', 5, 'rgb(132, 16, 240)' ],
                [ 'Carnes', 2, 'rgb(132, 16, 240)' ],
                [ 'Padaria', 9, 'rgb(132, 16, 240)' ],
                
        ])
        const options = {
                legend: {
                  position: 'none'
                },
                backgroundColor: '#212529',
                height: 550,
                width: 1050,
                titleTextStyle: { color: 'white' },
                hAxis: {
                        textStyle:{color: 'white'}
                },
                vAxis: {
                        textStyle:{color: 'white'}
                }
        }

        const chart = new google.visualization.ColumnChart(container)
            chart.draw(data, options)
    }