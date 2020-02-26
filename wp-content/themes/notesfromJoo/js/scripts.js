'use strict'

let currentSlide = 1,
    $slider = $('.slide-show'),
    sliderBtnLeft = $('.slider-btn-left'),
    sliderBtnRight = $('.slider-btn-right'),
    slideCount = $slider.children().length




function nextSlide() {


    if (currentSlide < slideCount) {

        currentSlide++;
        $slider.animate({
            marginLeft: '-=100%'
        }, 800)
    }





}

function prevSlide() {


    if (currentSlide > 1) {
        currentSlide--;

        $slider.animate({
            marginLeft: '+=100%'
        }, 800)
    }


}

sliderBtnLeft.click(prevSlide)
sliderBtnRight.click(nextSlide)



// $(document).ready(function () {
//     alert('test');
// })