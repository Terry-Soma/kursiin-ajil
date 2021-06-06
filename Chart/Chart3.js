Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Нийт сургуулуудлын Элсэгчдийн Тоо'
    },
    subtitle: {
        text: 'Жил болгоноор'
    },
    xAxis: {
        categories: ['ҮИТС', 'ХЗС', 'СЭЗС', 'СООСЭ', 'БСУС', 'АУС', 'ДУДТС', 'ЖЕСАН'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ' Оюутан',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' Оюутанууд'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        // 'ҮИТС', 'ХЗС', 'СЭЗС', 'СООСЭ', 'БСУС', 'АУС','ДУДТС','ЖЕСАН'
        name: '2018',
        data: [156, 265, 635, 203, 250, 635, 986, 576]
    }, {
        name: '2019',
        data: [133, 156, 947, 408, 643, 800, 750, 630]
    }, {
        name: '2020',
        data: [814, 841, 714, 727, 632, 903, 760, 655]
    }, {
        name: '2021',
        data: [1216, 1001, 436, 738, 40, 546, 900, 1050]
    }]
});