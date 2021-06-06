Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Элсэлтийн Комис болон Онлайн бүртгэлийн График'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: [
            '2019',
            '2020',
            '2021'
        ],
        plotBands: [{
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Нийт Элсэгчдийн тоо'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' Оюутанууд'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Элсэлтийн Комис',
        data: [1000, 780, 950]
    }, {
        name: 'Онлайнаар',
        data: [750, 2000, 350]
    }]
});