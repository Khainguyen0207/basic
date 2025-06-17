'use strict'

$(document).ready(function () {
    const resort = $('#resort_id');
    const room_amenities = $('#room_amenities');
    const option_success = $('#option_success');
    const option_error = $('#option_error');
    const general_amenities = $('#general_amenities');

    if (resort.length) {
        resort.select2();
    }
    if (option_success.length) {
        option_success.select2();
    }
    if (option_error.length) {
        option_error.select2();
    }
    if (general_amenities.length) {
        general_amenities.select2();
    }
    if (room_amenities.length) {
        room_amenities.select2();
    }
})

