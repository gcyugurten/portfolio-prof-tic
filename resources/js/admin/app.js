require('../bootstrap.js');



$(function() {


    $('.return-confirm').on('click', function() {
        return confirm('Are you sure ?');
    })

})

$(function() {
    $('.main-sidebar .side-nav-toggler').click(function() {
        $('.main-sidebar nav.side-nav').slideToggle(500)
        $(this).find('i').toggleClass('fa-times');
    })
})

$(function() {
    if($(window).width() > 720) {
        $('.table').removeClass('table-responsive')
    }
    $(window).on('resize', function() {
        if($(window).width() > 720) {
            $('.table').removeClass('table-responsive')
        } else {
            $('.table').addClass('table-responsive')
        }
    })
})

$(function() {

    
    $('.show-popup').click(function(e) {
        e.preventDefault();
        $('#'+ $(this).data("show") + ", .popup-bg").fadeIn(100)
    })

    $('.popup .close').click(function() {
        $('.popup-bg, .popup').fadeOut(100)
    })

    
})


$(function() {
    $('#logo').change(function() {
        $(this).next().remove().end().after(`
            <label for="logo">
                <img class="w-100" src="${window.URL.createObjectURL(this.files[0])}" alt="">
            </label>
        `)
    })
    $('#favicon').change(function() {
        $(this).next().remove().end().after(`
            <label for="favicon">
                <img class="w-100" src="${window.URL.createObjectURL(this.files[0])}" alt="">
            </label>
        `)
    })

    
})

