import "./jquery.js";
$(function() {
 
    $( ".button_hide" ).on('click', function( event ) {
 
        $(event.target.parentElement.parentElement).hide();
        $.ajax({
            url: "./edit/index.php",
            method: 'POST',
            data: {
                id: event.target.parentElement.parentElement.id,
                data: {
                    is_hidden: true
                }
            }
    });
    });
 
});
$(function() {
 
    $( ".button_increase" ).on('click', function( event ) {
        let span = $(event.target.parentElement).children('span');
        let input = $(event.target.parentElement).children('input');
        let curr_quantity = Number(span.text());
        let quantity_increase = Number(input.val());
        span.text(curr_quantity+quantity_increase);
        $.ajax({
            url: "./edit/index.php",
            method: 'POST',
            data: {
                id: event.target.parentElement.parentElement.id,
                data: {
                   product_quantity: curr_quantity+quantity_increase
                }
            }
    });
    });
 
});
$(function() {
 
    $( ".button_decrease" ).on('click', function( event ) {
        let span = $(event.target.parentElement).children('span');
        let input = $(event.target.parentElement).children('input');
        let curr_quantity = Number(span.text());
        let quantity_increase = Number(input.val());
        if (curr_quantity<quantity_increase) {
            throw new Error("decrement is too big");
        }
        span.text(curr_quantity-quantity_increase);
        $.ajax({
            url: "./edit/index.php",
            method: 'POST',
            data: {
                id: event.target.parentElement.parentElement.id,
                data: {
                   product_quantity: curr_quantity-quantity_increase
                }
            }
    });
    });
 
});
