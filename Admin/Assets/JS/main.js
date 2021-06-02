$(function() {
    $.ajax({
        url:'Models/Admin.php',
        data:{Admin:arrayTenant},
        success:function(yes){
            $( "#automplete_tenant" ).autocomplete({
                source: arrayTenant,
                autoFocus:true
             });
        }
    });

   
});




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