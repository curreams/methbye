jQuery(document).ready(function () {

    $('#date').datetimepicker({
        step:15
    });

    $('input:radio[id=location_other]').change(function() {
        $('#location_other_text').prop('disabled', false);        
      });

    $('input:radio[name=location]').change(function() {
        if(jQuery(this).attr("id") !== "location_other") {
            $('#location_other_text').val('');
            $('#location_other_text').prop('disabled', true);
        }
      });
    $('#physicalCondition_other').change(function() {
        if($('#physicalCondition_other').prop('checked')) {
            $('#physicalCondition_other_text').prop('disabled', false);
        } else {
            $('#physicalCondition_other_text').val('');
            $('#physicalCondition_other_text').prop('disabled', true);
        }
    });
    $('#currentMood_other').change(function() {
        if($('#currentMood_other').prop('checked')) {
            $('#currentMood_other_text').prop('disabled', false);
        } else {
            $('#currentMood_other_text').val('');
            $('#currentMood_other_text').prop('disabled', true);
        }
    });


    

});

