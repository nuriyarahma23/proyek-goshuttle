"use strict";
$( "#fleet_id" ).change(function() {
  
    var fleet_id = $('#fleet_id').val();
    var baseurl = $('#baseurl').val();
    var url  = baseurl+'/ajax/vehicle/list/'+fleet_id;

    $.ajax({  
        method: "GET",  
        url: url,  
        data: {fleet_id:fleet_id},  
        success: function (data) {
            
            var data = JSON.parse(data);
         
            $("#vehicle_id").empty();
            $("#vehicle_id").append('<option value ="" >None</option>');

            $.each(data, function(key, value) {
              $("#vehicle_id").append('<option value="' + value.id + '">' + value.reg_no+
                    '</option>');
            });

            }  
    });


  });

  "use strict";
  function remove(picid)
{
 
  var deleteid = picid;
  var baseurl = $('#baseurl').val();
 
  var url  = baseurl+'/ajax/vehicle/pic/delete'; 

  // var csrfName = $("#csrf" + picid).attr('name'); // CSRF Token name
  // var csrfHash = $("#csrf" + picid).val(); // CSRF hash

  // var datadel = { 
  //   [csrfName]: csrfHash, 
  //   picid: deleteid, 
   
  // }; 
  var datadel = { 
   
    picid: deleteid, 
   
  }; 


  $.ajax({  
    method: "POST",  
    url: url,  
    dataType: "JSON",
    data: datadel,  
    success: function (response) {
        $( "#" + picid ).remove();
         }  
});
 
}


"use strict";
$("#login_email").focusout(function(){
   
  var email = $("#login_email").val();
  var type = "email";
  var userdetail = null;

 if (email == "") {
  
  return false;
 }
  var baseurl = $('#baseurl').val();
  var url  = baseurl+'/ajax/passanger/'+email+'/'+type;
 
    $.ajax({  
      method: "GET",  
      url: url,  
      dataType: "JSON",
       
      success: function (result) {
        
        if (result.response == 200) {

          userdetail = JSON.parse(result.data);
         
          $.each(userdetail, function(index, value) {

            $("#last_name").val(value.last_name);
            $("#first_name").val(value.first_name);
            $("#login_mobile").val(value.login_mobile);
            $("#login_email").val(value.login_email);
            $("#id_type").val(value.id_type);
            $("#id_number").val(value.id_number);
            $("#country_id").val(value.country_id);
            $("#city").val(value.city);
            $("#zip_code").val(value.zip_code);
            $("#address").val(value.address);

            console.log(userdetail);
          });
          
        }


        if (result.response == 204) {
          
        }
       

          
          

      }

  });



});

"use strict";  
$("#login_mobile").focusout(function(){
    
  var mobile = $("#login_mobile").val();
  var type = "mobile";
  var userdetail = null;

 if (mobile == "") {
  
  return false;
 }
  var baseurl = $('#baseurl').val();
  var url  = baseurl+'/ajax/passanger/'+mobile+'/'+type;
 
    $.ajax({  
      method: "GET",  
      url: url,  
      dataType: "JSON",
       
      success: function (result) {

        if (result.response == 200) {

          userdetail = JSON.parse(result.data);
         
          $.each(userdetail, function(index, value) {

            $("#last_name").val(value.last_name);
            $("#first_name").val(value.first_name);
            $("#login_mobile").val(value.login_mobile);
            $("#login_email").val(value.login_email);
            $("#id_type").val(value.id_type);
            $("#id_number").val(value.id_number);
            $("#country_id").val(value.country_id);
            $("#city").val(value.city);
            $("#zip_code").val(value.zip_code);
            $("#address").val(value.address);

            console.log(userdetail);
          });
          
        }


        if (result.response == 204) {
          
        }
          

      }

  });



});





"use strict";
$("#couponcode").focusout(function(){
      
  var code = $("#coupon").val();
  var journetydate = $("#journeydate").val();
  var subtripid = $("#subtripId").val();
  var validation = null;

 
  var baseurl = $('#baseurl').val();
  var url  = baseurl+'/ajax/coupon/'+code+'/'+subtripid+'/'+journetydate;
 
    $.ajax({  
      method: "GET",  
      url: url,  
      dataType: "JSON",
       
      success: function (result) {

        if (result.response == 200) {

            console.log(result.discount);

            var successmessage = result.status;
            $("#couponmessage").html(successmessage);
            $("#couponmessage").css("color", "green");


            var discount = result.discount;
            var oldtotal = $("#oldgrandtotal").val();
            discount = parseFloat(discount)
            if (discount == 0) {
                $("#grandtotal").val(oldtotal);
                $("#partialpay").val(oldtotal);
            } else {
                var newgrandtotal = parseFloat(oldtotal) - discount;
    
                $("#grandtotal").val(newgrandtotal);
                $("#partialpay").val(newgrandtotal);
                $("#discount").val(discount);
                $("#discount").attr('readonly',true);
                $("#coupon").attr('readonly',true);
            }
           
            validation = JSON.parse(result.data);
            console.log(validation);
          
        }


        if (result.response == 204) {

          console.log(result.message);
          var errormessage = result.message;
          $("#couponmessage").html(errormessage);
          $("#couponmessage").css("color", "red");
          validation = JSON.parse(result.data);
          console.log(validation);
          
        }
          

      }

  });



  




});



"use strict";
$( "#trip_id" ).change(function() {

  var maintrip_id = $('#trip_id').val();
  var baseurl = $('#baseurl').val();
  var url  = baseurl+'/get/subtrip/'+maintrip_id;

  $.ajax({  
      method: "GET",  
      url: url,  
      data: {maintrip_id:maintrip_id},  
      success: function (data) {

       
        if(data.data == '"all"')
        {
          $("#subtrip_id").empty();
          $("#subtrip_id").append('<option value="all">All</option>');

        }


        else
        {
        var  subtipdata = JSON.parse(data.data);
          $("#subtrip_id").empty();

          
            $("#subtrip_id").append('<option value ="all" >All</option>');
         
            $.each(subtipdata, function(key, value) {
            $("#subtrip_id").append('<option value="' + value.subtripsid + '">' + value.pickup_location_name+'-'+value.drop_location_name+
                  '</option>');
            });
        }
 
   }
     
  });


});




"use strict";
$( "#lngid" ).change(function() {
 
  var lang_id = $('#lngid').val();
  var baseurl = $('#baseurl').val();
  var url  = baseurl+'/get/lang/code/'+lang_id;

  $.ajax({  
      method: "GET",  
      url: url,  
      data: {lang_id:lang_id},  
      success: function (data) {

       
        var getData = JSON.parse(data)
        console.log(getData)
        $("#language_code").val("");
        $("#language_code").val(getData.lngcode);

        $("#name").val("");
        $("#name").val(getData.name);
 
   }
     
  });


});