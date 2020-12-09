$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});



$(document).ready(function () {

    $('.delete-button').on('click', function () {
        id = $(this).attr('data-id');
        $.ajax({
            url: '/unlike',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id: id},
            success: function (data) {
                $('#wishlist-header-link')
                    .html(  "<i class=\"fa fa-heart\"></i>  Wishlist(" + data.countUserLikes + ")");
                $('#product-'+id).fadeOut(300);


            },
        });
    });
// like button



if($('#like-div').attr('data-like') > 0)  $('#svg_2').addClass('filled');
let id =  $('#like-div').attr('product-id');


    $('#svg_2').on('click', function(){
        let likeId =  $('#like-div').attr('data-like');
        $.ajax({
            url: likeId > 0 ? '/unlike' : '/like',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id: id},

            success: function (data) {
                $('#like-div').attr('data-like', data.statusLike);
                $('#svg_2').toggleClass('filled');
                $('#count-likes').html(data.countProductLikes + ' customer add to wishlist');
                $('#wishlist-header-link')
                 .html(  "<i class=\"fa fa-heart\"></i>  Wishlist(" + data.countUserLikes + ")");
            },
        });
    });


    //view the watch history on index page
    $('.link-watch-info').on('click', function () {
        $('.text-content').slideToggle(500);
    });



    $('#edit-button').on('click', function () {
            $('#form-panel').slideToggle(500);

    });


});






