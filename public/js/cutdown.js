
var cut_down = function()
{
    var cut_down_source =function() {
        var myChart = echarts.init(document.getElementById('meth_cutdown'));
        var app = {};
        var option = {
            legend: {},
            tooltip: {},
            dataset: {
                source: [
                    ['product', 'can not cut down(user%)', 'can cut down(user%)'],
                    ['2001', 11, 88.9],
                    ['2004', 5.4, 94.6],
                    ['2007', 13.3,86.7],
                    ['2010', 5.5, 94.5],
                    ['2013', 11.7, 88.3],
                    ['2016', 12.7, 87.3]
                ]
            },
            xAxis: {type: 'category'},
            yAxis: {},
            // Declare several bar series, each will be mapped
            // to a column of dataset.source by default.
            series: [
                {type: 'bar'},
                {type: 'bar'}
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