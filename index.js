import "./jquery.js";
$(function() {
 
    $( "button" ).on('click', function( event ) {
 
        $(event.target.parentElement.parentElement).hide(); 
    });
 
});