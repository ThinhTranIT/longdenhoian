/**
 * Created by PC on 08/03/2017.
 */

$(document).ready(function(){
    $('.relatedItem').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        speed: 500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$('.detailProduct .size li span').click(function () {
    $('.detailProduct .size li span').removeClass('active');
    $(this).addClass('active');
});

$('.detailProduct .colors li').click(function () {
    $('.detailProduct .colors li').removeClass('active');
    $(this).addClass('active');
});

$('.detailProduct .accessories li').click(function () {
    $(this).toggleClass('active');
});

// $('#sp1').click(function () {
//     $('#main').attr('src', '<?php echo $url; ?>/asset/Images/item.jpg');
// });

// $('#sp2').click(function () {
//     $('#main').attr('src', '<?php echo $url; ?>/asset/Images/item.jpg');
// });

// $('#sp3').click(function () {
//     $('#main').attr('src', '<?php echo $url; ?>/asset/Images/img.jpg');
// });