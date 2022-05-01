require('./bootstrap');


$(function() {
    $('.main-sidebar .side-nav-toggler').click(function() {
        $('.main-sidebar nav.side-nav').slideToggle(500)
        $(this).find('i').toggleClass('fa-times');
    })
})

$('.main-header .overlay').css('height', $(window).height() - $('.navbar').outerHeight());
$(window).on('resize', function() {
    $('.main-header .overlay').css('height', $(window).height() - $('.navbar').height());
})

for(let i = 0; i < $('.career .item-devider').length; i++) {
    $($('.career .item-devider')[i]).css('height', $($('.career .item-devider')[i]).parent().parent().height() + 30)

}


$(window).on('resize', function() {
    for(let i = 0; i < $('.career .item-devider').length; i++) {
        $($('.career .item-devider')[i]).css('height', $($('.career .item-devider')[i]).parent().parent().height() + 30)
    
    }
    
    if($(window).width() <= 720) {
        $('table').addClass('table-responsive')
    } else {
        $('table').removeClass('table-responsive')
    }
})


$('.publications .box').on('click', function() {
    $(this).children('.box-content').slideToggle(500);
    $(this).children('.special-heading').children('i').toggleClass('fa-angle-down').toggleClass('fa-angle-up')

})

$(function() {
    $('.login-form span.toggle-password i#show').click(function() {
        $(this).parentsUntil(".form-group").siblings('input').attr('type', 'text')
        $(this).hide().addClass('d-none');
        $(this).siblings("i#hide").show().removeClass('d-none')
    })
    $('.login-form span.toggle-password i#hide').click(function() {
        $(this).parentsUntil(".form-group").siblings('input').attr('type', 'password')
        $(this).hide().addClass('d-none');
        $(this).siblings("i#show").show().removeClass('d-none')

    })
})









