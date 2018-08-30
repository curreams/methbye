
var trend = function()
{

    var age = function (data) {
        var myChart = echarts.init(document.getElementById('trend_source'));
        var app = {};
        let user_trend_12 = [];
        let user_trend_18 = [];
        let user_trend_25 = [];
        let user_trend_35 = [];
        let user_trend_45 = [];
        let user_trend_55 = [];
    
        let age_12 = '12–17';
        let age_18 = '18–24';
        let age_25 = '25–34';
        let age_35 = '35–44';
        let age_45 = '45–54';
        let age_55 = '55+';
        data.forEach( function(value, index, array) {
            if(value.age.localeCompare(age_12)==0){
                user_trend_12.push(value.user);
            }
            if(value.age.localeCompare(age_18)==0){
                user_trend_18.push(value.user);
            }
            if(value.age.localeCompare(age_25)==0){
                user_trend_25.push(value.user);
            }
            if(value.age.localeCompare(age_35)==0){
                user_trend_35.push(value.user);
            }
            if(value.age.localeCompare(age_45)==0){
                user_trend_45.push(value.user);
            }
            if(value.age.localeCompare(age_55)==0){
                user_trend_55.push(value.user);
            }
    
        });
    
    
        var option4 = {
            // title: {
            //     text: 'The trend of Meth use'
            // },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['12-17','18-24','25-34','35-44','45-54','55+']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['2007','2010','2013','2016']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'12-17',
                    type:'line',
                    smooth: true,
                    data:user_trend_12
                },
                {
                    name:'18-24',
                    type:'line',
                    smooth: true,
                    data:user_trend_18
                },
                {
                    name:'15-34',
                    type:'line',
                    smooth: true,
                    data:user_trend_25
                },
                {
                    name:'35-44',
                    type:'line',
                    smooth: true,
                    data:user_trend_35
                },
                {
                    name:'45-54',
                    type:'line',
                    smooth: true,
                    data:user_trend_45
                },
                {
                    name:'55+',
                    type:'line',
                    smooth: true,
                    data:user_trend_55
                }
            ]
    
        }
    
    
        myChart.setOption(option4);
    
    
    }


    var offences = function(data){
        var myChart = echarts.init(document.getElementById('trend_source'));
        var app = {};
        let offence_rate = [];
        let offence_rate_unique = [];
        data.forEach(function (value) {
            offence_rate.push(value.offence);
        })
        $.each(offence_rate, function(i, el){
            if($.inArray(el, offence_rate_unique) === -1) offence_rate_unique.push(el);
        });
        
    
    
    
    // specify chart configuration item and data
    
    
        var option4 = {
            tooltip: {
                trigger: 'axis',
                showContent: true
            },
            xAxis: {
                type: 'category',
                data: ['2007', '2010' ,'2013','2016']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name:'offence rate',
                data: offence_rate_unique,
                type: 'line',
                smooth: true
            }]
        };
    
    
    // use configuration item and data specified to show chart
        myChart.setOption(option4);
    
    }
    
    
    
    var health = function (data){
        var myChart = echarts.init(document.getElementById('trend_source'));
        var app = {};
        let health_problem = [];
        data.forEach(function (value) {
            health_problem.push(value.health);
        })
        let healt_problem_unique = [];
        $.each(health_problem, function(i, el){
            if($.inArray(el, healt_problem_unique) === -1) healt_problem_unique.push(el);
        });
    
    // specify chart configuration item and data
        var option4 = {
            tooltip: {
                trigger: 'axis',
                showContent: true
            },
            xAxis: {
                type: 'category',
                data: ['2007', '2010', '2013','2016']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name:'Health problem rate',
                data: healt_problem_unique,
                type: 'line',
                smooth: true
            }]
        };
    // use configuration item and data specified to show chart
        myChart.setOption(option4);
    
    }
    
    
    var death = function(data){
        var myChart = echarts.init(document.getElementById('trend_source'));
        var app = {};
        let death_rate = [];
        let death_rate_unique = [];
        data.forEach(function (value) {
            death_rate.push(value.death);
        })
        $.each(death_rate, function(i, el){
            if($.inArray(el, death_rate_unique) === -1) death_rate_unique.push(el);
        });
    
    // specify chart configuration item and data
        var option4 = {
            tooltip: {
                trigger: 'axis',
                showContent: true
            },
            xAxis: {
                type: 'category',
                data: ['2007', '2010','2013','2016']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name:'Death rate',
                data: death_rate_unique,
                type: 'line',
                smooth: true
            }]
        };
    // use configuration item and data specified to show chart
        myChart.setOption(option4);
    
    }

 
  var getAllTrend = function (trend)
  {    
        $.ajax({
          method: "GET",
          url: "/trend/getTrend",
          data: {}
        })
        .done(function( data ) {
            if(trend.localeCompare("health")==0){
                health(data);
            }else if(trend.localeCompare("death")==0){
                death(data);
            }else if(trend.localeCompare("offences")==0){
                offences(data);
            }else if(trend.localeCompare("age")==0){
                age(data);
            }            
        });
  }
  var changeTrend = function()
  {   
    $('#trend_select').change(function(){
        let trend = $(this).val()
        if(trend.localeCompare("health")==0){
            getAllTrend("health");
        }else if(trend.localeCompare("death")==0){
            getAllTrend("death");
        }else if(trend.localeCompare("offences")==0){
            getAllTrend("offences");
        }else if(trend.localeCompare("age")==0){
            getAllTrend("age");
        }
    })
  }
  return {
    //main function to initiate the module
    init: function () 
    {
        getAllTrend("");
        changeTrend();      
    }

}

}();

jQuery(document).ready(function() 
{
    trend.init();
});