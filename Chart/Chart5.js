Highcharts.chart('container', {

    chart: {
        type: 'column',
        styledMode: true
    },

    title: {
        text: 'Элсэлтийн Комис болон Онлайн бүртгэлийн График'
    },

    yAxis: [{
        className: 'highcharts-color-0',
        title: {
            text: 'Элсэлтийн Комис'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: true,
        title: {
            text: 'Онлайн'
        }
    }],

    plotOptions: {
        column: {
            borderRadius: 5
        }
    },

    series: [{
        data: [1000, 780, 950, 440]
    }, {
        data: [750, 2000, 350, 850],
        yAxis: 1
    }]

});