
var first_use = function()
{
    var first_user = function (data, year) {
        var myChart = echarts.init(document.getElementById('meth_first_use'));
        var app = {};
    
        //let year = '2013';
        let ffm = 'Friends or family member were using it/offered by friend or family member';
        let tiw = 'Thought it would improve mood/to stop feeling unhappy';
        let tds = 'To do something exciting';
        let tsw = 'To see what it was like/curiosity';
        let tea = 'To enhance an experience';
        let other = 'Other';
        let type_friend = [];
        let type_mood = [];
        let type_exciting = [];
        let type_curiosity = [];
        let type_experience = [];
        let type_other = [];
        data.forEach( function(value, index, array) {
            if(value.year == year && value.reason.localeCompare(ffm)==0){
                type_friend.push(value.usage)
            }
            if(value.year == year && value.reason.localeCompare(tiw)==0){
                type_mood.push(value.usage)
            }
            if(value.year == year && value.reason.localeCompare(tds)==0){
                type_exciting.push(value.usage)
            }
            if(value.year == year && value.reason.localeCompare(tsw)==0){
                type_curiosity.push(value.usage)
            }
            if(value.year == year && value.reason.localeCompare(tea)==0){
                type_experience.push(value.usage)
            }
            if(value.year == year && value.reason.localeCompare(other)==0){
                type_other.push(value.usage)
            }
    
        });
    
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
                show: true,
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
    
        var option = {
            color: ['#003366', '#006699', '#4cabce', '#e5323e'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                }
            },
            legend: {
                data: ['Friends or family', 'improve mood', 'To do something exciting',
                    'To see what it was like/curiosity','To enhance an experience','other']
            },
            toolbox: {
                show: true,
                orient: 'vertical',
                left: 'right',
                top: 'center',
                feature: {
                    mark: {show: true},
                    // dataView: {show: true, readOnly: false},
                    // magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                    // restore: {show: true},
                    // saveAsImage: {show: true}
                }
            },
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    axisTick: {show: false},
                    data: ['14-19 years old', '20-29 years old', '30-39 years old', '40-49 years old', '50-59 years old','60+ years old']
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
    
                {
                    name: 'Friends or family',
                    type: 'bar',
                    barGap: 0,
                    label: labelOption,
                    data: type_friend
                },
                {
                    name: 'improve mood',
                    type: 'bar',
                    label: labelOption,
                    data: type_mood
                },
                {
                    name: 'To do something exciting',
                    type: 'bar',
                    label: labelOption,
                    data: type_exciting
                },
                {
                    name: 'To see what it was like/curiosity',
                    type: 'bar',
                    label: labelOption,
                    data: type_curiosity
                },
                {
                    name: 'To enhance an experience',
                    type: 'bar',
                    label: labelOption,
                    data: type_experience
                },
                {
                    name: 'other',
                    type: 'bar',
                    label: labelOption,
                    data: type_other
                }
            ]
        };
    
    
        myChart.setOption(option);
    }
 
 
  var getAllFirstUse = function (year)
  {
    
        $.ajax({
          method: "GET",
          url: "/first-use/getFirstUse",
          data: {}
        })
        .done(function( data ) {
            first_user(data, year);

        });
  }
  var changeYear = function()
  {
    $('#first_use_select').change(function(){            
        getAllFirstUse($(this).val());
    })
  }
  return {
    //main function to initiate the module
    init: function () 
    {
        getAllFirstUse();
        changeYear();
      
    }

}

}();

jQuery(document).ready(function() 
{
    first_use.init();
});