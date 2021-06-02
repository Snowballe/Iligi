$(document).ready(function() {
   var availableTutorials = [
      "ActionScript",
      "Bootstrap",
      "C",
      "C++",
   ];
   $('#autocompete-2').keyup(function(){
       var SearchTenant=$('#autocompete-2').val();
       console.log(SearchTenant);
   })
   $( "#automplete-2" ).autocomplete({
      source: availableTutorials,
      autoFocus:true
   });
});