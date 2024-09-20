$('#event-min').click(function(){
    $('#title-event-target').text($('#title-event-src').text());
});

function changeEvent(title, date, description, img_target){

    $('#event-img').attr('src', img_target);
    $('.event-title').text(title);
    $('#event-date').text(date);
    $('#event-description').text(description);

}

$('#send-message').click(function(){
    var first_name = $('#first_name');
    var last_name = $('#last_name');
    var phone_number = $('#phone_number');
    var email_addr = $('#email_addr');
    var message_text = $('#message_text');

    var first_name_error = $('#first_name-error');
    var last_name_error = $('#last_name-error');
    var phone_number_error = $('#phone_number-error');
    var email_addr_error = $('#email_addr-error');
    var message_text_error = $('#message_text-error');

    var form = $('#send-message-form');
    var token = $('#send-message-token');

    if(first_name.val() != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(first_name.val())) {
        first_name.removeClass('is-invalid');
        first_name_error.text("");

        if(last_name.val() != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(last_name.val())) {
            last_name.removeClass('is-invalid');
            last_name_error.text("");

            if(phone_number.val() != "" && /^[0-9]/.test(phone_number.val())) {
                phone_number.removeClass('is-invalid');
                phone_number_error.text("");

                if(email_addr.val() != "" && /^[a-zA-Z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email_addr.val())) {
                    email_addr.removeClass('is-invalid');
                    email_addr_error.text("");

                    if(message_text.val() != "") {
                        message_text.removeClass('is-invalid');
                        message_text_error.text("");

                        $('#send-message').addClass('d-none');
                        $('#send-message-loading').removeClass('d-none');

                        $.ajax({
                            type: 'post',
                            url: form.attr('action'),
                            data: {
                                '_token': token.val(),
                                'name': first_name.val() + ' ' + last_name.val(),
                                'phone_number': phone_number.val(),
                                'email_addr': email_addr.val(),
                                'message_text': message_text.val()
                            },
                            success:function(response) {

                                console.log(response);
                                $('#send-message').removeClass('d-none');
                                $('#send-message-loading').addClass('d-none');

                                if(response.status == "success") {
                                    $('.alert-success').removeClass('d-none');
                                    $('.alert-danger').addClass('d-none');
                                    document.getElementById('send-message-form').reset();
                                } else {
                                    $('.alert-success').addClass('d-none');
                                    $('.alert-danger').removeClass('d-none');
                                }
                            }
                        });

                    } else {
                        message_text.addClass('is-invalid');
                        message_text_error.text(message_text_error.attr('message'));
                    }
                } else {
                    email_addr.addClass('is-invalid');
                    email_addr_error.text(email_addr_error.attr('message'));
                }
            } else {
                phone_number.addClass('is-invalid');
                phone_number_error.text(phone_number_error.attr('message'));
            }
        } else {
            last_name.addClass('is-invalid');
            last_name_error.text(last_name_error.attr('message'));
        }
    } else {
        first_name.addClass('is-invalid');
        first_name_error.text(first_name_error.attr('message'));
    }
});
