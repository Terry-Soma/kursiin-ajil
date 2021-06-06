Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Аймгийн элсэлтийн График'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Аймагууд',
        colorByPoint: true,
        data: [{
            name: 'Архангай',
            y: 3,
        }, {
            name: 'Баян-Өлгий ',
            y: 4
        }, {
            name: 'Баянхонгор',
            y: 5
        }, {
            name: 'Булган ',
            y: 4.67
        }, {
            name: 'Говь-Алтай',
            y: 4.18
        }, {
            name: 'Говьсүмбэр',
            y: 1.64
        }, {
            name: 'Дархан',
            y: 1.6
        }, {
            name: 'Дорноговь ',
            y: 1.2
        }, {
            name: 'Дорнод',
            y: 2.61
        }, {
            name: 'Дундговь',
            y: 2.61
        }, {
            name: 'Завхан',
            y: 2.61
        }, {
            name: 'Орхон',
            y: 2.61
        }, {
            name: 'Сэлэнгэ',
            y: 2.61
        }, {
            name: 'Сүхбаатар',
            y: 2.61
        }, {
            name: 'Төв',
            y: 2.61
        }, {
            name: 'Увс',
            y: 2.61
        }, {
            name: 'Ховд',
            y: 2.61
        }, {
            name: 'Хэнтий',
            y: 2.61
        }, {
            name: 'Хөвсгөл',
            y: 2.61
        }, {
            name: 'Өвөрхангай',
            y: 2.61
        }, {
            name: 'Өмнөговь',
            y: 2.61
        }, {
            name: 'Багануур',
            y: 2.61
        }, {
            name: 'Улаанбаатар',
            y: 52.61,
            sliced: true,
            selected: true
        }]
    }]
});