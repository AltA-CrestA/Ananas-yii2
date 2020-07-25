$(document).ready(function () {
    $('a.btn__delete').click(function (e) {
        e.preventDefault();
        var params = {
            'id': $(this).attr('data-id')
        };
        $.post('/favorite/delete', params, function (data) {
            if (data.success) {
                $('#catalog__box__' + params.id).fadeOut();
                $('.favorite-count').html(data.favoriteCount);
            }
        });
    });
});