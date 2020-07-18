const fixedHeader = $('.header-fixed')
const fixedFooter = $('.footer-fixed')
const mainForm = $('.form-main')
const btnMenu = $('.btn-menu')
const fixedMenu = $('.fixed-menu')
const btnFormFixed = $('.btn-form-fixed')
const fixedForm = $('.modal-form')
const btnModalFilter = $('.btn-modal-filter')
const modalFilter = $('.modal-filter')
const btnModalFavorites= $('.btn-modal-favorites')

const headerThreshold = 450

$(document).ready(function(){
    //initialize my-tabs
    $(".my-tabs-content").hide()
    $(".my-tabs.active").each(function(){
        const tab_ativa = $(this).attr("data-content")
        $("#" + tab_ativa).show()
    });
    //initialize my-tabs

    //Hide Favorite Bar
    toggleFavoriteBar();
})

// my-tabs
$(".my-tabs").click(function(){
    const tab_group = $(this).data('rel')
    $(".my-tabs[data-rel='"+ tab_group +"']").removeClass("active")
    $(this).addClass("active")
    $(".my-tabs-content[data-rel='"+ tab_group +"']").hide()
    $("#"  + $(this).attr("data-content")).fadeIn();
});
// my-tabs

// accordion
$('.accordion .title').on('click', function(){
    const el = $(this)
    el.toggleClass('active')
    el.parent('.accordion')
        .find('.collapse')
        .slideToggle('fast')
})
// accordion

$(window).on('scroll', function(){
    

    if(isMobile()){
        toggleElOnScroll(fixedHeader)
    } else {
        toggleElOnScroll(fixedHeader, headerThreshold)
        toggleElOnScroll(mainForm, headerThreshold, true)
    }    
    toggleElOnScroll(fixedFooter)
})

function toggleElOnScroll(el, threshold = 50, reverse = false){
    if($(window).scrollTop() > threshold){
        reverse ? el.fadeOut() : el.fadeIn()
    } else {
        reverse ? el.fadeIn() : el.fadeOut()
    }
}

function isMobile(){
    if($(window).width() > 992){
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

$('.btn-privacy').on('click', function(e){
    e.preventDefault()
})


btnFormFixed.on('click', function(){
    if(!fixedHeader.is(':visible') && !isMobile()){

        $('html, body').animate({
            scrollTop: headerThreshold + 1
        }, 100);
    }
    controlModals(btnFormFixed, fixedForm)
})
fixedForm.on('click', function(){
    btnFormFixed.removeClass('active')
})

btnModalFilter.on('click', function(){
    controlModals(btnModalFilter, modalFilter)
})
modalFilter.on('click', function(){
    btnModalFilter.removeClass('active')
})

btnMenu.on('click', function(){
    controlModals($(this), fixedMenu)
    $('.fixed-menu .pop-up-content').toggleClass('active')
})
fixedMenu.on('click', function(){
    btnMenu.removeClass('active')
    $('.fixed-menu .pop-up-content').removeClass('active')
})

//controls special modals interactions
function controlModals(btn, el){
    if(btn.hasClass('active')){
        popClose()
    } else {
        popClose()
        btnMenu.removeClass('active')
        btnModalFilter.removeClass('active')
        btnFormFixed.removeClass('active')
        $('.fixed-menu .pop-up-content').removeClass('active')
        popUp(el)
    }
    btn.toggleClass('active')
}

$('.btn-drop-menu').on('click', function(){
    const btn = $(this)
    btn.toggleClass(`active`)
    btn.find('.submenu').slideToggle('fast')
})

// sliders
const phoneSlider = new Swiper('.swiper-phones', {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            pagination: {
                el: '.swiper-pagination',
            }
        }
    },
    watchOverflow: true
})
const bannerSlider = new Swiper('.swiper-banners', {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    watchOverflow: true
})
const usedSlider = new Swiper('.swiper-used', {
    spaceBetween: 0,
    slidesPerView: 1,
    navigation: {
        nextEl: '.btn-swiper-used-next',
        prevEl: '.btn-swiper-used-prev',
    },
    breakpoints: {
        992: {
            spaceBetween: 30,
            slidesPerView: 5,
        }
    },
    watchOverflow: true
})
const usedRelatedSlider = new Swiper('.swiper-used-related', {
    spaceBetween: 0,
    slidesPerView: 1,
    navigation: {
        nextEl: '.btn-swiper-used-related-next',
        prevEl: '.btn-swiper-used-related-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
        992: {
            spaceBetween: 30,
            slidesPerView: 4
        }
    },
    watchOverflow: true
})
const newSlider = new Swiper('.swiper-tabs-new', {
    slidesPerView: 4,
    navigation: {
        nextEl: '.btn-car-tabs-next',
        prevEl: '.btn-car-tabs-prev'
    },
    breakpoints: {
        992: {
            slidesPerView: 5
        }
    },
    watchOverflow: true
})


const directSalesSlider = new Swiper('.swiper-tabs-direct', {
    slidesPerView: 3,
    navigation: {
        nextEl: '.btn-direct-tabs-next',
        prevEl: '.btn-direct-tabs-prev'
    },
    breakpoints: {
        992: {
            slidesPerView: 7
        }
    },
    watchOverflow: true
})

const assistSalesSlider = new Swiper('.swiper-tabs-assist', {
    slidesPerView: 2,
    navigation: {
        nextEl: '.btn-direct-tabs-next',
        prevEl: '.btn-direct-tabs-prev'
    },
    breakpoints: {
        992: {
            slidesPerView: 6
        }
    },
    watchOverflow: true
})

const versionSliderThumbs = new Swiper('.swiper-versions', {
    slidesPerView: 1,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        992: {
            spaceBetween: 30,
            slidesPerView: 4,
        }
    }
})
const versionSliderContent = new Swiper('.swiper-versions-content', {
    navigation: {
        nextEl: '.btn-swiper-versions-next',
        prevEl: '.btn-swiper-versions-prev'
    },
    thumbs: {
        swiper: versionSliderThumbs
    }
})

const usedBannerSlider = new Swiper('.swiper-used-highlights', {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.btn-highlight-next',
        prevEl: '.btn-highlight-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    watchOverflow: true
})

const sliderGaleryThumbs = new Swiper('.swiper-galery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    navigation: {
        nextEl: '.swiper-button-next-thumb',
        prevEl: '.swiper-button-prev-thumb',
    }
})
const sliderGalery = new Swiper('.swiper-galery', {
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: sliderGaleryThumbs
    }
})

const favoriteSlider = new Swiper('.swiper-favorites', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.btn-favorite-next',
        prevEl: '.btn-favorite-prev',
    },
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            spaceBetween: 30,
            slidesPerView: 4
        }
    },
    watchOverflow: true
})

//Select box  limit and order
$('#limitSelect').change(function () {
    $('#limitCars').val($('#limitSelect').val());
    $('#filterSearch').submit();
});

$('#orderSelect').change(function () {
    $('#orderCars').val($('#orderSelect').val());
    $('#filterSearch').submit();
    
});

//range slider
const rangeSlider = $('.range-slider')
const sliders = rangeSlider.map((index, slider) => {
    const sliderId = $(slider).attr('id')
    const input = $(slider).parents('.range-slider-wrapper').find('input')
    const rangeValues = [
        $(slider).parents('.range-slider-wrapper').find('.min-value'),
        $(slider).parents('.range-slider-wrapper').find('.max-value')
    ]
    const sliderFormat = wNumb({
        decimals: 0,
        thousand: '.',
        prefix: $(slider).data('prefix'),
        suffix: $(slider).data('suffix')
    })

    const uiSlider = noUiSlider.create(slider, {
        start: [curMinPrice, curMaxPrice],
        connect: true,
        step: $(slider).data('step'),
        range:{
            'min': minPrice,
            'max': maxPrice
        },
        format: sliderFormat
    })

    const getInputVal = val => {
        let inputVal = uiSlider.get().map( value => (
            sliderFormat.from(value)
        ))
        return inputVal
    }

    input.val(getInputVal(uiSlider.get()))
    
    uiSlider.on('update', (values, handle) => {
        input.val(getInputVal(uiSlider.get())).trigger('change')
        rangeValues[handle].text(values[handle]);
        console.log(values[0]+" - "+values[1]);
        $('#page-filtermin_price').val(values[0].replace('R$ ', '').replace('.', ''));
        $('#page-filtermax_price').val(values[1].replace('R$ ', '').replace('.', ''));
        $('#modal-filtermin_price').val(values[0].replace('R$ ', '').replace('.', ''));
        $('#modal-filtermax_price').val(values[1].replace('R$ ', '').replace('.', ''));
    })

    return {sliderId, uiSlider}
})
//range slider

// update upload field text
$(".custom-file-input").on("change", function() {
    const fileName = $(this).val().split("\\").pop()
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName)
});

// modal cupom content
$('.btn-modal-cupom').on('click', function(){
    const btn = $(this)
    const imgSrc = btn.data('img')
    const title = btn.data('title')
    const departmentPromo = btn.data('department')
    $('.modal-cupom img').prop('src', imgSrc)
    $('.modal-cupom .title').text(title)
    $('#promoProduct').val(title)
    $('#departmentPromo').val(departmentPromo)
    
})

$('.btn-vendas').on('click', function(){
    const btn = $(this)
    const vendaDireta = btn.data('val')
    $('#idVendas').val(vendaDireta)
    
})

var totalFavorites = ".total-favorites";
var divHtmlContent = ".favorite-wrapper";

var savedCarDiv = `<div class="swiper-slide swiper-slide-next" style="width: 255px; margin-right: 30px;">
 <div class="card-used favorite-card">
     <button class="font-12 d-flex align-items-center btn-remove-fevorite" onclick="deleteCar({{id}});updateFavorites() ">
         <i class="icon-erase font-18"></i>
         EXCLUIR
     </button>
     <a href="{{url_full}}">
         <div class="img-wrapper d-flex">
             <div class="brand color-white font-12">{{brand}}</div>
             <img class="mw-100" src="{{image}}" alt="alt-da-iamgem">
         </div>
         <div class="body text-center">
             <p class="car-name font-12 mb-10" title="{{version}}">
             {{version}}
             </p>
             <div class="price text-center">
                 <p class="price-for bold font-16 mb-10">
                     Por: {{price}}
                 </p>
             </div>
             <button class="btn btn-blue mb-10">
                 Mais detalhes
             </button>
         </div>
     </a>
 </div>
</div>`;

String.prototype.replaceAll=function(e,s){return this.replace(new RegExp(e,"g"),s)}

$('.btn-save-favorite').on('click', function(){
    const btn = $(this)
    const car = btn.data('json')

    const opacity = btn.find('.icon-like-active').css('opacity')
   
    if(opacity == 0)
        {
            btn.find('.icon-like-active').css('opacity', '1')
            saveCar(car);
            updateFavorites();    
        }
    else
        {
            btn.find('.icon-like-active').css('opacity', '0')
            getDeleteCar(car);
            updateFavorites();
        }
    
})

function saveCar(car) {
    var favoritesArray = [];
    var vehicleFavorite = car;
    

    if (localStorage.getItem('alpes-favorite-vehicle') && localStorage.getItem('alpes-favorite-vehicle') != null) {
       favoritesArray = JSON.parse(localStorage.getItem('alpes-favorite-vehicle'))
    }
        favoritesArray.push(vehicleFavorite);
        localStorage.setItem('alpes-favorite-vehicle', JSON.stringify(favoritesArray));
    
}

function getDeleteCar(car){

    deleteCar(car.id);
}

function deleteCar(carId) {
    var favoritesArray = [];
    
    favoritesArray = JSON.parse(localStorage.getItem('alpes-favorite-vehicle'));

    if (localStorage.getItem('alpes-favorite-vehicle') && localStorage.getItem('alpes-favorite-vehicle') != null)
    {
        for (var i = 0; i < favoritesArray.length; i++) {
            if (favoritesArray[i].id === carId) { favoritesArray.splice(i, 1); i--; }
        }
        localStorage.setItem('alpes-favorite-vehicle', JSON.stringify(favoritesArray));
    }

    
}

function getFavorites() {
    return JSON.parse(localStorage.getItem('alpes-favorite-vehicle'));
}

function updateFavorites(){

    var vehicles = getFavorites();

    if(vehicles == null || vehicles.length < 1)
    {
        clearAll();
        toggleFavoriteBar();
     return;
    }

    if (!btnModalFavorites.is(':visible')) {
        toggleFavoriteBar('show');
    }
    
    $(totalFavorites).html(vehicles.length);
    $(divHtmlContent).html('');

    $.each(vehicles, function (key, obj) {
        var html = savedCarDiv;
        obj.hasOwnProperty("id") ? html = html.replaceAll("{{id}}", obj.id) : null;
        obj.hasOwnProperty("brand") ? html = html.replaceAll("{{brand}}", obj.brand) : null;
        obj.hasOwnProperty("model") ? html = html.replaceAll("{{model}}", obj.model) : null;
        obj.hasOwnProperty("year_model") ? html = html.replaceAll("{{year_model}}", obj.year_model) : null;
        obj.hasOwnProperty("year_version") ? html = html.replaceAll("{{year_version}}", obj.year_version) : null;
        obj.hasOwnProperty("km") ? html = html.replaceAll("{{km}}", obj.km) : null;
        obj.hasOwnProperty("version") ? html = html.replaceAll("{{version}}", obj.version) : null;
        obj.hasOwnProperty("url_full") ? html = html.replaceAll("{{url_full}}", obj.url_full) : null;
        obj.hasOwnProperty("price") ? html = html.replaceAll("{{price}}", obj.price) : null;
        obj.hasOwnProperty("image") ? html = html.replaceAll("{{image}}", obj.image) : null;

        $(divHtmlContent).append(html);
    });

    var saved = $('.btn-save-favorite');

    for (let i = 0; i < saved.length; i++) {

        const btn = $(saved[i])
        btn.find('.icon-like-active').css('opacity', '0')
        const car = btn.data('json')

        $.each(vehicles, function (key, obj) {
            if(obj.id == car.id)
            btn.find('.icon-like-active').css('opacity', '1')
        })

        
    }


}

$('.btn-remove-all-favorites').on('click', function () {

    clearAll();
    toggleFavoriteBar();
});

function clearAll() {
    localStorage.removeItem('alpes-favorite-vehicle');
    $(totalFavorites).html(0);
    $(divHtmlContent).html('');
}


function toggleFavoriteBar(show = false) {
    if (show) {
        btnModalFavorites.removeClass('d-none').addClass('d-flex');
    } else {
        btnModalFavorites.removeClass('d-flex').addClass('d-none');
    }
}