const fixedHeader = $('.fixed-header')
const headerThreshold = 600
const rellax = new Rellax('.rellax')

$(window).on('scroll', function(){
    if(isMobile()){
        toggleElOnScroll(fixedHeader)
    } else {
        toggleElOnScroll(fixedHeader, headerThreshold)
    }    
})

function toggleElOnScroll(el, threshold = 50, reverse = false){
    if($(window).scrollTop() > threshold){
        reverse ? el.fadeOut() : el.fadeIn()
    } else {
        reverse ? el.fadeIn() : el.fadeOut()
    }
}

function isMobile(){
    if($(window).width() > 1050){
        return false
    }
    return true
}

// Modals
function popUp(selector){
    $('body,html').addClass('scroll-lock')
    selector.fadeIn('fast')
}

function popClose(){
    $('.modal-overlay').fadeOut()
    $('body,html').removeClass('scroll-lock')
}

$('.btn-open-modal').on('click', function(){
    const el = $(this).data('target')
    popUp($(el))
})

$('.modal-overlay, .btn-close-modal').on('click',function(){
    popClose()
}).on('click', '.pop-up-content', function(event){
    event.stopPropagation()
})

$('.pop-up-content .btn-privacy').on('click', function(){
    const el = $(this).data('target')
    $(el).modal('show')
})

// menu
$('.scroll-to').on('click', function(e){
    e.preventDefault()

    const threshhold = isMobile() ? 110 : 160
    const target = $(this).data('scrollto')
    const targetScroll = $(target).offset().top - threshhold

    $('html, body').animate({
        scrollTop: targetScroll
    }, 800);
})

function addClass(el) {
    const menuItems = $('.fixed-header a')
    menuItems.removeClass('active');
    $(el).addClass('active');
};

$(document).on('scroll', function () {
    var scroll = $(document).scrollTop()
    var currentElement
    $('.content-section').each(function (i) {
        const sectionPosition = $(this).position().top;
        if (scroll > sectionPosition - 170){
            const sectionId = $(this).attr('id')
            currentElement = $('.fixed-header a[data-scrollto="#' + sectionId + '"]')
        }
    })
    currentElement && addClass(currentElement)
})


//Floating Labels
const formGroup = $('.form-group')

formGroup.each(function(){
    const input = $(this).find('.form-control')
    const label = $(this).find('label')

    input.on('focus', function(){
        label.addClass('active')
    })
    input.on('blur', function(){
        const value = input.val()
        if(!value){
            console.log(value)
            label.removeClass('active')
        }
    })
})
