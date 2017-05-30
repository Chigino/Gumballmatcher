$('button[data-toggle="toggle"]').click(function() {
    $(this).parent().next('table[data-toggle="container"]').find('input[type="checkbox"]').each(function () {
        $(this).prop('checked', !$(this).prop('checked'));
    });
});