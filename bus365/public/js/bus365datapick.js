$(document).ready(function () { 
 "use strict";
  $('#journeydate').datepicker();
  $('#returndate').datepicker();
  $('#startdate').datepicker({
    format: 'yyyy-mm-dd',
    });

    $('#filterjourneydate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      startDate: '-0m',
    });

    $('#filterreturndate').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      startDate: '-0m',
    });


    $('#start_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      // startDate: '-0m',
    });

    $('#end_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      // startDate: '-0m',
    });




    $('#filterjourneylistdate').datepicker();

});