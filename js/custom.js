

$(window).on( "load", function() {
    setTimeout(function() {
        $('#pop-up').show();
    }, 500);
    $('body, html').css("overflow-y","hidden");
});

$('.close-form').click(function() {
    $('#pop-up').hide();
    $('body, html').css("overflow-y","unset");

})


$("#contact_form").validate({
    rules: {
        name: "required",
        email: {
            required: true,
            email: true
        },
        tel: {
            required: true,
            minlength: 10
        }
    
    },
    messages: {
        name: "Please enter your name",
        tel: {
            required: "Please provide a valid number"
        },
        email: "Please enter a valid email address"
    },
    submitHandler: function (form) {
        form.submit();
    }
});
$('input[type=tel]').keydown(function(event) {
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 ||
        event.keyCode == 27 || event.keyCode == 13 ||
        (event.keyCode == 65 && event.ctrlKey === true) ||
        (event.keyCode >= 35 && event.keyCode <= 39)) {
        return;
    } else {
        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
            event.preventDefault();
        }
    }
});

