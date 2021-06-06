Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Их Засаг Олон Улсийн Их Сургууль, Үндэсний Инженер Технологийн Сургууль'
    },
    subtitle: {
        text: 'Нийт Сурагчдийн Мэргэжлийн Элсэлтийн График'
    },
    xAxis: {
        categories: ['2019', '2020', '2021', '2022'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        labels: {
            format: '{value}%'
        },
        title: {
            enabled: false
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.percentage:.1f}%</b> ({point.y:,.0f} Оюутанууд)<br/>',
        split: true
    },
    plotOptions: {
        area: {
            stacking: 'percent',
            lineColor: '#ffffff',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#ffffff'
            },
            accessibility: {
                pointDescriptionFormatter: function(point) {
                    function round(x) {
                        return Math.round(x * 100) / 100;
                    }
                    return (point.index + 1) + ', ' + point.category + ', ' +
                        point.y + ' Оюутанууд, ' + round(point.percentage) + '%, ' +
                        point.series.name;
                }
            }
        }
    },
    series: [{
        name: 'Програм Хангамж',
        data: [450, 250, 350]
    }, {
        name: 'Барилгийн Инженер',
        data: [500, 300, 200]
    }, {
        name: 'Цахилгааний Инженер',
        data: [400, 730, 270]
    }, {
        name: 'График Дизайнэр',
        data: [380, 310, 544]
    }, {
        name: 'Аялал Жуучлалийн Хөтөч',
        data: [200, 522, 720]
    }]
});