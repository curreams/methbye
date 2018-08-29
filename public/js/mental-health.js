
var mental_health = function()
{
 
 var mental_health= function (data,year) {
    

    var myChart = echarts.init(document.getElementById('mental_health_present'));

    //let year = '';
    let lpd = 'Low psychological distress';
    let mpd = 'Moderate psychological distress';
    let hhpd = 'High/Very high psychological distress';
    let type_low = [];
    let type_moderate = [];
    let type_high = [];
    var app = {};

    data.forEach( function(value, index, array) {
     if(value.year == year && value.type.localeCompare(lpd)==0){
      type_low.push(value.psychological_distres)
     }
     if(value.year == year && value.type.localeCompare(mpd)==0){
      type_moderate.push(value.psychological_distres)
     }
     if(value.year == year && value.type.localeCompare(hhpd)==0){      
      type_high.push(value.psychological_distres)
     }        

    });

    

// specify chart configuration item and data
    var posList = [
        'left', 'right', 'top', 'bottom',
        'inside',
        'insideTop', 'insideLeft', 'insideRight', 'insideBottom',
        'insideTopLeft', 'insideTopRight', 'insideBottomLeft', 'insideBottomRight'
    ];

    app.configParameters = {
        rotate: {
            min: -90,
            max: 90
        },
        align: {
            options: {
                left: 'left',
                center: 'center',
                right: 'right'
            }
        },
        verticalAlign: {
            options: {
                top: 'top',
                middle: 'middle',
                bottom: 'bottom'
            }
        },
        position: {
            options: echarts.util.reduce(posList, function (map, pos) {
                map[pos] = pos;
                return map;
            }, {})
        },
        distance: {
            min: 0,
            max: 100
        }
    };

    app.config = {
        rotate: 90,
        align: 'left',
        verticalAlign: 'middle',
        position: 'insideBottom',
        distance: 15,
        onChange: function () {
            var labelOption = {
                normal: {
                    rotate: app.config.rotate,
                    align: app.config.align,
                    verticalAlign: app.config.verticalAlign,
                    position: app.config.position,
                    distance: app.config.distance
                }
            };
            myChart.setOption({
                series: [{
                    label: labelOption
                }, {
                    label: labelOption
                }, {
                    label: labelOption
                }, {
                    label: labelOption
                }]
            });
        }
    };


    var labelOption = {
        normal: {
            show: false,
            position: app.config.position,
            distance: app.config.distance,
            align: app.config.align,
            verticalAlign: app.config.verticalAlign,
            rotate: app.config.rotate,
            formatter: '{c}  {name|{a}}',
            fontSize: 16,
            rich: {
                name: {
                    textBorderColor: '#fff'
                }
            }
        }
    };

    var option3 = {
        // title: {
        //     text: 'The mental health problem in 2013'
        // },
        color: ['#003366', '#006699', '#4cabce', '#e5323e'],
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            }
        },
        legend: {
            data: ['Low psychological distress', 'Moderate psychological distress', 'High/Very high psychological distress']
        },
        toolbox: {
            show: true,
            orient: 'vertical',
            left: 'right',
            top: 'center',
            feature: {
                mark: {show: true},
                dataView: {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                axisTick: {show: false},
                data: ['Used in last month', 'Used in 12 months', 'Not used in 12 months']
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: 'Low psychological distress',
                type: 'bar',
                barGap: 0,
                label: labelOption,
                data: type_low
            },
            {
                name: 'Moderate psychological distress',
                type: 'bar',
                label: labelOption,
                data: type_moderate
            },
            {
                name: 'High/Very high psychological distress',
                type: 'bar',
                label: labelOption,
                data: type_high
            }
        ]
    };


// use configuration item and data specified to show chart
    myChart.setOption(option3);

}




  var getAllMentalDistress = function (year)
  {
    
        $.ajax({
          method: "GET",
          url: "/mental-health/getMentalHealth",
          data: {}
        })
        .done(function( data ) {
          mental_health(data,year);

        });
  }

  var changeYear = function()
  {
    $('#mental_health_select').change(function(){            
      getAllMentalDistress($(this).val());
    })
  }
  return {
    //main function to initiate the module
    init: function () 
    {
      changeYear();
      getAllMentalDistress(0);
      
    }

}

}();


jQuery(document).ready(function() 
{
    console.log("Reaching this");
    mental_health.init();
});