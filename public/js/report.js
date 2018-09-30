var generateReport = function ()
  {
    var csrf = $("#csrf").val();    
    $.ajax({
        headers: 
        {
            'X-CSRF-TOKEN': csrf
        },
        method: "POST",
        url:'/reports/generate',
        data: 
        {
            date_begin: $('#date_begin').val(),
            date_end: $('#date_end').val(),
            details: $('#details').val()
        }
    })
    .done(function( msg ) 
    {
        //fillReport(msg);            
        $('#report_modal').modal('show');
    });
  }
 
var fillReport = function(data)
{
    let report = data['report'];
    let events = data['event'];
    // declare html variable (a string holder):
    var html = '';
    for (var i = 0; i < events.length; i++) {
        // add opening <tr> tag to the string:
        html += '<tr>';
        html += '<td>' + events[i].date + '</td>';
        html += '<td>' + events[i].location + '</td>';
        html += '<td>' + events[i].mood + '</td>';
        html += '<td>' + events[i].physical_condition + '</td>';
        html += '<td>' + events[i].details + '</td>';
        // add closing </tr> tag to the string:
        html += '</tr>';
    }
    //append created html to the table body:
    $('#table_body').append(html);
    // reset the count:
    
    console.log(events);

}

jQuery(document).ready(function () {

    $('#date_begin').datetimepicker({
        timepicker:false,
        format:'Y/m/d'
    });

    $('#date_end').datetimepicker({
        timepicker:false,
        format:'Y/m/d'
    });

    $("#generateReport").click( function()
           {
            generateReport();
           }
        );


});

