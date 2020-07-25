$(document).ready(function () {
    $('a.add_to_favorite').click(function (e) {
        e.preventDefault();
        var params = {
            'id': $(this).attr('data-id')
        };
        $.post('/favorite/add', params, function (data) {
            if (data.success) {
                $('.product__add__' + params.id).hide();
                $('.product__added__' + params.id).show();
                $('.favorite-count').html(data.favoriteCount);
            }
        });
    });
});