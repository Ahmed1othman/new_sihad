'use strict';

function submitSubscription() {
    var email = document.getElementById("subemail");
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email.value)) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/site-projects",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: email.value
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                    email.value = ''
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });

    } else {
        round_error_noti('You Nead To Enter Correct Email')

    }


}

function request_call() {
    var call_email = document.getElementById("call_email");
    var call_name = document.getElementById("call_name");
    var call_phone = document.getElementById("call_phone");

        if (call_name.value === '') {
            round_error_noti('You Nead To Enter Name')
            return;
        }
        if (call_phone.value === '') {
            round_error_noti('You Nead To Enter Phone')
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/orders",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: call_email.value,
                name: call_name.value,
                phone: call_phone.value
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                        call_email.value = ''
                        call_name.value = ''
                        call_phone.value = ''
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });
}

function submitContactUs() {
    var contact_email = document.getElementById("contact_email");
    var contact_name = document.getElementById("contact_name");
    var contact_phone = document.getElementById("contact_phone");
    var contact_msg = document.getElementById("contact_msg");

    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (contact_name.value === '') {
            round_error_noti('You Nead To Enter Name')
            return;
        }
        if (contact_phone.value === '') {
            round_error_noti('You Nead To Enter Phone')
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: app_url + "/" + lang + "/contactus",
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                email: contact_email.value,
                name: contact_name.value,
                phone: contact_phone.value,
                msg: contact_msg.value
            },
            async: true,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.code === 0) {
                    round_error_noti(obj.msg)
                } else {
                    round_success_noti(obj.msg)
                    contact_email.value = ''
                        contact_name.value = ''
                        contact_phone.value = ''
                        contact_msg.value
                }
            },
            error: function(error) {
                round_error_noti()

            }
        });

}


function submit_offer_price() {
    var offer_price_name = document.getElementById("offer_price_name");
    var offer_price_phone_number = document.getElementById("offer_price_phone_number");
    var offer_price_required_service = document.getElementById("offer_price_required_service");
    var offer_price_required_meters = document.getElementById("offer_price_required_meters");
    var offer_price_required_date = document.getElementById("offer_price_required_date");
    var offer_price_details = document.getElementById("offer_price_details");

    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (offer_price_name.value === '') {
        round_error_noti('من فضلك ادخل اسمك ')
        return;
    }
    if (offer_price_required_service.value === '') {
        round_error_noti('من فضلك اختر الخدمة المطلوبة ')
        return;
    }

    if (offer_price_required_date.value === '') {
        round_error_noti('من فضلك حدد التاريخ المطلوب لابدء الخدمة ')
        return;
    }
    if (offer_price_phone_number.value === '') {
        round_error_noti('من فضلك ادخل رقم هاتفك')
        return;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: app_url + "/" + lang + "/offer-price",
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            name: offer_price_name.value,
            phone_number: offer_price_phone_number.value,
            details: offer_price_details.value,
            required_date: offer_price_required_date.value,
            required_meters: offer_price_required_meters.value,
            required_service: offer_price_required_service.value,
        },
        async: true,
        success: function(data) {
            var obj = JSON.parse(data);
            if (obj.code === 0) {
                round_error_noti(obj.msg)
            } else {
                round_success_noti(obj.msg)
                offer_price_name.value = '';
                offer_price_phone_number.value = '';
                offer_price_details.value = ''
                offer_price_required_date.value = '';
                offer_price_required_meters.value = '';
                offer_price_required_service.value = '';
            }
        },
        error: function(error) {
            round_error_noti()

        }
    });

}
