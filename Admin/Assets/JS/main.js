$( function() {
    $( "#automplete_tenant" ).autocomplete({
      source: "Models/Admin.php"
    });
  } );




//$('#autocompete-2').val();
//    if(SearchTenant!=""){
//        $.ajax({
//            url:'Models/Admin.php',
//            method='POST',
//            data:{Admin:SearchTenant},
//            success:function(data){
//                console.log(data)
//            }
//        }) 
//    }