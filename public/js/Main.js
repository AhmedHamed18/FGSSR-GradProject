$(document).ready(function() {

    $('.event a').click(function() {
        var DataValue = $(this).attr('data-value');
        $('#Register_module').load(DataValue);
        console.log(DataValue);

    });

});