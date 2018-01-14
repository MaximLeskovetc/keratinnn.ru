$(function () {
    $('#phone').mask('8(999) 999-9999');
    $('#phone').on('blur', function () {
        let last = $(this).val().substr($(this).val().indexOf('-') + 1);
        if (last.length === 5) {
            let move = $(this).val().substr($(this).val().indexOf('-') + 1, 1);
            let lastfour = last.substr(1, 4);
            let first = $(this).val().substr(0, 9);
            $(this).val(first + move + '-' + lastfour);
        }
    });
});