
var cut_down = function()
{
    var cut_down_source =function() {
        var myChart = echarts.init(document.getElementById('meth_cutdown'));
        var app = {};
        var option = {
            color:["#0000CD","#bc0101"],
                tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['can not cut down','can cut down']
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
        data: ['2001','2004','2007','2010','2013','2016']
    },
    yAxis: {
        type: 'value',
        axisLabel:{
            formatter:'{value}(%)'
                    }
    },
    series: [
        {
            name:'can not cut down',
            type:'line',
            
            data:[11,5.4,13.3,5.5,11.7,12.7]
        },
        {
            name:'can cut down',
            type:'line',
            data:[88.9,94.6,86.7,94.5,88.3,87.3]
        }
    ]
        };
    
    
        myChart.setOption(option);
    
    
    }
 
 
   return {
    //main function to initiate the module
    init: function () 
    {
        cut_down_source();        
    }

}

}();

jQuery(document).ready(function() 
{
    cut_down.init();
});