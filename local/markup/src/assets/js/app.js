import $ from 'jquery';
import 'jquery-mousewheel';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
// import './lib/foundation-explicit-pieces';

// import 'tablesaw/dist/tablesaw.jquery';
import libs from './lib/dependencies';
import './lib/jquery.fancybox.js';
import './lib/jquery.mCustomScrollbar';

window.libs = libs;

// $(document).foundation();

// libs.AOS.init();

// SVG Injector
// Elements to inject
var mySVGsToInject = document.querySelectorAll('img.svg-inject-me');

// Options
var injectorOptions = {
  evalScripts: 'once',
  pngFallback: 'assets/png'
};

// var afterAllInjectionsFinishedCallback = function (totalSVGsInjected) {
  // Callback after all SVGs are injected
//   console.log('We injected ' + totalSVGsInjected + ' SVG(s)!');
// };

// var perInjectionCallback = function (svg) {
  // Callback after each SVG is injected
//   console.log('SVG injected: ' + svg);
// };

// create injector configured by options
var injector = new libs.svgInjector(injectorOptions);

// Trigger the injection
injector.inject(
  mySVGsToInject,
//   afterAllInjectionsFinishedCallback,
//   perInjectionCallback
);

// tablesaw table plugin
$(function () {
  $(document).foundation();
});

// var TablesawConfig = {
//   swipeHorizontalThreshold: 15
// };

// app dashboard toggle
// $('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
//   e.preventDefault();
//   $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
// });


/* Sliders */
$(function () {
    let $sliderJury = $('.slider-jury'),
        $sliderJuryItems = $sliderJury.find('.slider-jury__items'),
        $sliderJuryButtonLeft = $sliderJury.find('.slider-jury__btn--left'),
        $sliderJuryButtonRight = $sliderJury.find('.slider-jury__btn--right');

    let $sliderQuotesItems = $('.main-quotes__items'),
        $sliderQuotesOutput = $('#js-sliderQuoteOutput');

    let sliderQuotesOnAfterChange = (e, slick, currSlide) => {
        $sliderQuotesOutput.val(currSlide).change();
    };

    const sliderSettings = {
        /* jury: {
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            swipeToSlide: true,
            focusOnSelect: true,
            nextArrow: $sliderJuryButtonRight,
            prevArrow: $sliderJuryButtonLeft,

            responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                // infinite: true
            }
            }, {
                breakpoint: 600,
            settings: {
                slidesToShow: 2,
                // dots: true
            }
            }, {
                breakpoint: 300,
                settings: "unslick" // destroys slick
            }]
        }, */
        quotes: {
            // normal options...
            // speed: 5000,
            autoplay: false,
            // autoplaySpeed: 0,
            // cssEase: 'linear',
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            swipeToSlide: true,
            // centerMode: true,
            focusOnSelect: true,
            nextArrow: false,
            prevArrow: false,
            // the magic
        }
    };

    $sliderQuotesItems.on('afterChange', sliderQuotesOnAfterChange);

    // $sliderJuryItems.slick(sliderSettings.jury);
    $sliderQuotesItems.slick(sliderSettings.quotes);

    $('.js-quotes-slider').on('changed.zf.slider', function (e) {
        const currSlider = Number($sliderQuotesItems.slick('slickCurrentSlide'));
        const val = Number($sliderQuotesOutput.val());

        if (currSlider !== val) {
            $sliderQuotesItems.slick('slickGoTo', val, false);
        }
    });
});

function getCoords(elem) {
    let box = elem.getBoundingClientRect();

    return {
      top: box.top + pageYOffset,
      left: box.left + pageXOffset
    };
}

$(function () {
    const heightHead = 145;
    const speedAnimate = 1000;
    const $body = $('html, body');

    let $hMenuParent = $('.header-menu'),
        $hMenuLink = $hMenuParent.find('.header-menu__link');

    let scrollBlocks = {};

    let init = () => {
        scrollBlocks = {};

        $hMenuLink.each((i, el) => {
            const idHref = $(el).attr('href').replace(/\//g,'');
            const $idHrefBlock = $(idHref);

            if ($idHrefBlock.length) {
                scrollBlocks[idHref] = {
                    elLink: el,
                    coords: getCoords($idHrefBlock[0])
                };
            }
        });
    };

    let onScrollWindow = (e) => {
        const scrollTop = $(this).scrollTop();

        for (var key in scrollBlocks) {
            let block = scrollBlocks[key];

            if (block.coords.top - heightHead <= scrollTop) {
                $hMenuLink.removeClass('is-active');
                $(block.elLink).addClass('is-active');
            }
        }
    };

    $hMenuLink.on('click', function (e) {
        const idHref = $(e.currentTarget).attr('href');

        if ($(idHref).length) {
            e.preventDefault();
            $body.animate({
                scrollTop: scrollBlocks[idHref].coords.top - heightHead
            }, speedAnimate);
        }
    });

    $(window).on('scroll', onScrollWindow);
    $(window).on('load', () => {
        init();
        $(window).scroll();
    });

    $(window).on('resize', () => {
        init();
    });
});

class MediaSlider {
    constructor(type) {
        this.$parent = $(`#slider-media--${type}`);
        this.$big = this.$parent.find('.slider-media__big');
        this.$thumbnails = this.$parent.find('.slider-media__thumbnails');
        this.$btnLeft = this.$parent.find('.slider-media__btn--left');
        this.$btnRight = this.$parent.find('.slider-media__btn--right');

        this.$big.on('beforeChange', (e, slick) => {
            let $video = slick.$slides.filter('.slick-current').find('video');

            if ($video.length) {
                $video[0].pause();
            }
        });

        this.settings = {
            slider: {
                big: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    dots: false,
                    infinite: true,
                    rows: 0,
                    adaptiveHeight: type === 'photo' ? true : false,
                    asNavFor: this.$thumbnails
                },
                thumbnails: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    asNavFor: this.$big,
                    dots: false,
                    rows: 0,
                    infinite: true,
                    focusOnSelect: true,
                    variableWidth: true,
                    nextArrow: this.$btnRight,
                    prevArrow: this.$btnLeft
                }
            },
            modal: {
                modal: true,
                buttons: [],
                video: {
                    autoStart: false
                },
                beforeShow: () => {
                    this.$parent.css('opacity', 1);
                    this.$big.slick(this.settings.slider.big);
                    this.$thumbnails.slick(this.settings.slider.thumbnails);
                },
                afterShow: () => {
                    this.$parent.css('opacity', 1);
                },
                afterClose: () => {
                    this.$big.slick('unslick');
                    this.$thumbnails.slick('unslick');
                },
                beforeClose: () => {
                    this.$parent.css('opacity', 0);
                }
            }
        };

        $(`.main-media-${type} [data-fancybox]`).fancybox(this.settings.modal);
    }
}

class ModalAwardRegulations {
    constructor(selected) {
        this.$award = $(selected);
        this.$btn = $(`[data-src="${selected}"]`);
        this.settings = {
            scroll: {
                axis: 'y',
                autoHideScrollbar: true,
                mouseWheel: {
                    enable: true,
                    // scrollAmount: 100
                }
            },
            modal: {
                modal: true,
                buttons: [],
                beforeShow: () => {
                    // this.$award.mCustomScrollbar();
                },
                afterShow: () => {
                    this.$award.mCustomScrollbar(this.settings.scroll);
                    this.$award.css('opacity', 1);
                },
                afterClose: () => {
                    // this.$big.slick('unslick');
                    // this.$thumbnails.slick('unslick');

                    this.$award.mCustomScrollbar('destroy');
                },
                beforeClose: () => {
                    this.$award.css('opacity', 0);
                }
            }
        }

        this.$btn.fancybox(this.settings.modal);
    }
}

$(function () {
    const mediaSliderVideo = new MediaSlider('video');
    const mediaSliderPhoto = new MediaSlider('photo');
    const modalAward = new ModalAwardRegulations('#award-regulations');
});

