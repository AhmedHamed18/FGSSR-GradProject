/* Start Chart Pir */
var options = {
    chart: {
        type: "donut",
        height: 200,
    },
    labels: ['Brisk walking', 'Running', 'Zumba', 'Climbing stairs'],
    dataLabels: {
        enabled: false
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '16px',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '16px',
                        offsetY: 10,
                        fontWeight: 900,
                        color: '#fff',
                        opacity: 1,
                        formatter: function(val) {
                            return val
                        }
                    },
                }
            }
        }
    },
    series: [10, 50, 15, 25],
    tooltip: {
        enabled: true,

        y: {
            series: [{
                name: "series A",

            }, {
                name: "series B",

            }],
            title: {
                formatter: function(seriesName) {
                    return ''
                }
            }
        }
    },
    legend: {
        show: true,
        position: 'right',

        labels: {
            colors: '#fff',
        },
        markers: {
            width: 12,
            height: 12,
            strokeWidth: 0,
            radius: 0,
        },
    }
};

var chart = new ApexCharts(document.querySelector("#chartCardio"), options);
chart.render();


var options = {
    chart: {
        type: "donut",
        height: 200,
    },
    labels: ['Shoulder Press', 'Chest Press', 'Lat Pulldown', 'Burpees'],
    dataLabels: {
        enabled: false
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '16px',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '16px',
                        offsetY: 10,
                        fontWeight: 900,
                        color: '#fff',
                        opacity: 1,
                        formatter: function(val) {
                            return val
                        }
                    },
                }
            }
        }
    },
    series: [10, 50, 15, 25],
    tooltip: {
        enabled: true,

        y: {
            series: [{
                name: "series A",

            }, {
                name: "series B",

            }],
            title: {
                formatter: function(seriesName) {
                    return ''
                }
            }
        }
    },
    legend: {
        show: true,
        position: 'right',

        labels: {
            colors: '#fff',
        },
        markers: {
            width: 12,
            height: 12,
            strokeWidth: 0,
            radius: 0,
        },
    }
};

var chart = new ApexCharts(document.querySelector("#StrengthTraining"), options);
chart.render();



var options = {
    chart: {
        type: "donut",
        height: 200,
    },
    labels: ['Football', 'Walk Dog', 'Swimming', 'Other Activities'],
    dataLabels: {
        enabled: false
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '16px',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '16px',
                        offsetY: 10,
                        fontWeight: 900,
                        color: '#fff',
                        opacity: 1,
                        formatter: function(val) {
                            return val
                        }
                    },
                }
            }
        }
    },
    series: [10, 50, 15, 25],
    tooltip: {
        enabled: true,

        y: {
            series: [{
                name: "series A",

            }, {
                name: "series B",

            }],
            title: {
                formatter: function(seriesName) {
                    return ''
                }
            }
        }
    },
    legend: {
        show: true,
        position: 'right',

        labels: {
            colors: '#fff',
        },
        markers: {
            width: 12,
            height: 12,
            strokeWidth: 0,
            radius: 0,
        },
    }
};

var chart = new ApexCharts(document.querySelector("#OtherActivities"), options);
chart.render();

/* End Chart Pir */

/* Start Chart Columns */

var options = {
    series: [{
        name: 'Fat',
        data: [44, 55, 41, 67, 22, 43, 20],
        color: '#00E396'
    }, {
        name: 'Protein',
        data: [13, 23, 20, 8, 13, 27, 17],
        color: '#008FFB'
    }, {
        name: 'Calories',
        data: [11, 17, 15, 15, 21, 14, 23],
        color: '#FF4560'
    }],
    chart: {
        type: 'bar',
        height: 250,
        stacked: true,
        stackType: '100%',
        toolbar: {
            show: false
        },
        zoom: {
            enabled: true
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    plotOptions: {
        bar: {
            horizontal: false,
            borderRadius: 5,
            columnWidth: '60%',
        },
    },
    xaxis: {
        /* type: 'datetime', */
        categories: ['Sat', 'Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri'],
        labels: {
            style: {
                colors: '#fff'
            }
        }
    },
    yaxis: {

        labels: {
            formatter: function(value) {
                return value + "%";
            },
            style: {
                colors: '#fff'
            }
        },

    },
    legend: {
        position: 'bottom',
        labels: {
            colors: '#fff',
        },

    },
    tooltip: {
        style: {
            colors: '#000',
        },
    },
    fill: {
        opacity: 1,
        colors: '#f00'
    }
};

var chart = new ApexCharts(document.querySelector("#DIETARYANALYSIS"), options);
chart.render();

/* End Chart Columns */

/* Start Chart Colums And line */
var options = {
    series: [{
        name: 'Calories  Burned',
        type: 'column',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
        name: 'Duration (Min)',
        type: 'line',
        data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
    }],
    chart: {
        height: 250,
        type: 'line',
        toolbar: {
            show: false
        },
    },
    stroke: {
        width: [0, 4],
        curve: 'smooth',
    },
    /* title: {
        text: 'Traffic Sources'
    }, */
    dataLabels: {
        enabled: false,
        enabledOnSeries: [1]
    },
    labels: ['01 Jan ', '02 Jan ', '03 Jan ', '04 Jan ', '05 Jan ', '06 Jan ', '07 Jan ', '08 Jan ', '09 Jan ', '10 Jan ', '11 Jan ', '12 Jan '],
    xaxis: {
        /* type: 'datetime' */
        labels: {
            style: {
                colors: '#fff'
            }
        }
    },
    tooltip: {

    },
    markers: {
        size: 0,
    },
    yaxis: [{
            show: false,

            labels: {

                style: {
                    colors: '#fff'
                }
            },

        },

        {
            opposite: false,
            labels: {

                style: {
                    colors: '#fff'
                }
            },
        }
    ],
    legend: {
        position: 'bottom',
        labels: {
            colors: '#fff',
        },

    },
};

var chart = new ApexCharts(document.querySelector("#EXERCISEANALYSIS"), options);
chart.render();


var options = {
    series: [{
        name: 'Calories  Burned',
        type: 'column',
        data: [440, 505, 414, 671, 227]
    }, {
        name: 'Duration (Min)',
        type: 'line',
        data: [23, 42, 35, 27, 43]
    }],
    chart: {
        height: 200,
        type: 'line',
        toolbar: {
            show: false
        },
    },
    stroke: {
        width: [0, 4],
        curve: 'smooth',
    },
    /* title: {
        text: 'Traffic Sources'
    }, */
    dataLabels: {
        enabled: false,
        enabledOnSeries: [1]
    },
    labels: ['01/3 ', '08/3 ', '15/3 ', '22/3 ', '29/3 '],
    xaxis: {
        /* type: 'datetime' */
        labels: {
            style: {
                colors: '#fff'
            }
        }
    },
    tooltip: {

    },
    markers: {
        size: 0,
    },
    yaxis: [{
            show: false,

            labels: {

                style: {
                    colors: '#fff'
                }
            },

        },

        {
            opposite: false,
            labels: {

                style: {
                    colors: '#fff'
                }
            },
        }
    ],
    legend: {
        position: 'bottom',
        labels: {
            colors: '#fff',
        },

    },
};

var chart = new ApexCharts(document.querySelector("#WeightBMI"), options);
chart.render();


var options = {
    series: [{
        name: 'Calories  Burned',
        type: 'column',
        data: [440, 505, 414, 671, 227]
    }, {
        name: 'Duration (Min)',
        type: 'line',
        data: [23, 42, 35, 27, 43]
    }],
    chart: {
        height: 200,
        type: 'line',
        toolbar: {
            show: false
        },
    },
    stroke: {
        width: [0, 4],
        curve: 'smooth',
    },
    /* title: {
        text: 'Traffic Sources'
    }, */
    dataLabels: {
        enabled: false,
        enabledOnSeries: [1]
    },
    labels: ['01/3 ', '08/3 ', '15/3 ', '22/3 ', '29/3 '],
    xaxis: {
        /* type: 'datetime' */
        labels: {
            style: {
                colors: '#fff'
            }
        }
    },
    tooltip: {

    },
    markers: {
        size: 0,
    },
    yaxis: [{
            show: false,



        },

        {

            opposite: false,
            labels: {
                style: {
                    colors: '#fff'
                }
            },
        }
    ],
    legend: {
        position: 'bottom',
        labels: {
            colors: '#fff',
        },

    },

};

var chart = new ApexCharts(document.querySelector("#WeightBodyFat"), options);
chart.render();



/* End Chart Colums And line */

/* Start Chart Multi Line  */

var options = {
    series: [{
        name: 'Hips (cm)',
        type: 'line',
        data: [23, 20, 18, 16, 14, 11]
    }, {
        name: 'Waist (cm)',
        type: 'line',
        data: [30, 25, 36, 32, 28, 23]
    }, {
        name: 'Chest (cm)',
        type: 'line',
        data: [55, 69, 58, 52, 48, 43]
    }],
    chart: {
        height: 200,
        type: 'line',
        toolbar: {
            show: false
        },
    },
    stroke: {

        curve: 'straight',
    },
    /* title: {
        text: 'Traffic Sources'
    }, */
    dataLabels: {
        enabled: false,
        enabledOnSeries: [1]
    },
    labels: ['Jan ', 'Feb ', 'Mar ', 'Apr ', 'May ', 'Jun'],
    xaxis: {
        /* type: 'datetime' */
        labels: {
            style: {
                colors: '#fff'
            }
        }
    },
    tooltip: {

    },
    markers: {
        size: 0,
    },
    yaxis: [{
            show: false,



        },

        {

            opposite: false,
            labels: {
                style: {
                    colors: '#fff'
                }
            },
        }
    ],
    legend: {
        position: 'bottom',
        labels: {
            colors: '#fff',
        },

    },

};

var chart = new ApexCharts(document.querySelector("#Measurements"), options);
chart.render();

/* End Chart Multi Line  */