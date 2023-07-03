$(document).ready(function() {
    "use strict";
    $("#picsection").hide();
    $("#show").click(function() {
        var checked = $(this).is(':checked');
        if (checked) {
            $("#picsection").show();
        } else {
            $("#picsection").hide();
        }
    });

    $("#picsection").hide();
    
        var checked = $("#show").is(':checked');
        if (checked) {
            $("#picsection").show();
        } else {
            $("#picsection").hide();
        }
    
});



$(document).ready(function() {
    "use strict";
    $("#language").change(function() {
        var lagngval = $("#language").val();
        var baseurl = $("#baseurl").val();
        var url  = baseurl+'/language/'+lagngval; 
        

        $.ajax({  
            method: "GET",  
            url: url,  
            dataType: "JSON",
           
            success: function (response) {
                location.reload();
            } 
                 
        });

      
        
    });

    
    
});


$(document).ready(function() {
    "use strict";
    var fontfamily = $("#fontfamily").val();

    if (fontfamily == null) {
        
    }
    else
    {
        $('body').css('font-family', fontfamily);
    }
    
    
    
});


$(document).ready(function() {
    "use strict";
    $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });
     
});

$(document).ready(function() {
    "use strict";
    var invalidChars = ["-", "e", "+", "E"];

    $("input[type='number']").on("keypress", function(e){ 
        if(invalidChars.includes(e.key)){
            e.preventDefault();
        }
    });
     
});

