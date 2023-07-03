function  addfieldboard()
{
  var time = new Date();
  var timeid = time.getTime();
    var baseurl = $('#baseurl').val();
   
    var url  = baseurl+'/ajax/stand/all'; 
   
    var stand =  $.ajax({  
      method: "get",  
      url: url,  
      dataType: "JSON",
      async: false,
      success: function (response) {
        
           }  
    
});

var html = '<div class="row mt-3" >';
html += '<div class="col-3 ">';
html += '<label for="picktime" class="form-label">Select Time *</label>';
html += '<input type="text" id="te" name="picktime[]" class="form-control element" onclick="timepic()" placeholder="Select Time">';
html += '</div>';

html += '<div class="col-3 ">';
html += '<label for="stand" class="form-label">Bus Stand *</label>';
html += '<select  name="picstand[]" class="form-select testselect1" required>';
html += '<option value="" >None</option>';
stand.responseJSON.forEach(element => {
html += '<option value="'+element.id+'" >'+element.name+'</option>';

});
html += '</select>';
html += '</div>';



html += '<div class="col-3 ">';
html += '<label for="detail" class="form-label">Detail</label>';
html += '<input type="text" id="detail" name="detail[]" class="form-control"  placeholder="Detail">';
html += '</div>';


html += '<input type="hidden"  name="type[]"  value="1">';
html += '<div class="col-3 mt-4">';

html += '<a id ="'+timeid+'" class="btn btn-danger mt-1 text-white" onclick="removerow()">Remove</a>';
html += '</div>';

html += '</div>'

 
$( "#boardinadd" ).append( html );


 
}


function removerow()
{
  
   var id = this.event.target.id;
    $("#"+id).parent().parent('div').remove();
}

function removerowedit()
{
  var id = this.event.target.id;
  $("#"+id).parent().parent('div').remove();

    // $("#removeedit").parent().parent('div').remove();
}





function  addfielddrop()
{

  var dtime = new Date();
  var dtimeid = dtime.getTime();
  var baseurl = $('#baseurl').val();
   
    var url  = baseurl+'/ajax/stand/all'; 
   
    var stand =  $.ajax({  
      method: "get",  
      url: url,  
      dataType: "JSON",
      async: false,
      success: function (response) {
        
           }  
    
});

var html = '<div class="row mt-3">';
html += '<div class="col-3 ">';
html += '<label for="droptime" class="form-label">Select Time *</label>';
html += '<input type="text" id="te" name="droptime[]" class="form-control element" onclick="timepic()" placeholder="Select Time">';
html += '</div>';

html += '<div class="col-3 ">';
html += '<label for="dropstand" class="form-label">Bus Stand *</label>';
html += '<select  name="dropstand[]" class="form-select testselect1" required>';
html += '<option value="" >None</option>';
stand.responseJSON.forEach(element => {
html += '<option value="'+element.id+'" >'+element.name+'</option>';

});
html += '</select>';
html += '</div>';



html += '<div class="col-3 ">';
html += '<label for="dropdetail" class="form-label">Detail</label>';
html += '<input type="text" id="detail" name="dropdetail[]" class="form-control"  placeholder="Detail">';
html += '</div>';


html += '<input type="hidden"  name="droptype[]"  value="0">';
html += '<div class="col-3 mt-4">';

html += '<a id ="'+dtimeid+'" class="btn btn-danger mt-1 text-white" onclick="removerowedit()">Remove</a>';
html += '</div>';

html += '</div>'

 
$( "#droppingadd" ).append( html );


 
}

