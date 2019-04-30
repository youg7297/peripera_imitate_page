$(function(){
    var slides = $(".slide-area ul li");
    var max = slides.length -1;
    var sno = 0;

    function slide(no){
        $(slides[sno]).animate({opacity:0},1000);
        if(no){
            sno = no;
        } else {
            sno++;
            if(sno > max) sno = 0;
        }
        $(slides[sno]).animate({opacity:1},1000);
    }
    function slideAction(){
        var Timer = setInterval(function(){slide()},3000);
        // $(".slide-nav ul li img").on('click', function(e){
        //     clearInterval(Timer);
        //     var no = $(this).attr("value");
        //     Timer = setInterval(function(){slide(no)},3000);
        // });
    }

    slideAction();

    //비디오 팝업창
    function popup(){
        var height = $(document).height();
        var width = 100+"%";

        $('.mask').css({'width':width,'height':height});

        var left = ($(window).scrollLeft()+($(window).width()-$('.popup-video').width())/2);
        // var top = ($(window).scrollTop()+($(window).height()-$('.popup-video').height())/2);
        var top = (($(window).height()-$('.popup-video').height())/2);

        $('.popup-video').css({'left':left,'top':top});

        $('.popup-video, .mask').show();
    }


    $(document).ready(function(){
        $('.slide-nav ul li').click(function(e){
            e.preventDefault();
        });
        $('.img5').click(function(e){
            e.preventDefault();
            popup();
        });
        $('.close').click(function(e){
            e.preventDefault();
            $('.mask,.popup-video').hide();
        });

        $('.gnb-area').on("mouseout", function(){
            $('.gnb-area').css("height","50px");
        });
        $('.gnb-area').on("mouseover", function(){
            $('.gnb-area').css("height","220px");
        });
    });

    var sec1 = $('.img1,.img2,.img3,.img4');
    var sec2 = $('.img6,.img7,.img8,.img9');
    var sec3 = $('.img10,.img11');
    var sec4 = $('.img12,.img13,.img14,.img15');
    var sec5 = $('.img16,.img17,.img18,.img19,.img20,.img21,.img22,.img23,.img24,.img25');
    // var sec5 = $('.container4');
    $(window).scroll(function(){
        if($(this).scrollTop() >= 75) {
            $('.top-area-wrap').removeClass('.top-area-wrap').addClass('top-area-wrap-add');
            $('.top-area').removeClass('.top-area').addClass('top-area-add');
            $('.main-logo-box').removeClass('.main-logo-box').addClass('main-logo-box-add');
            $('.top-area-h2').removeClass('top-area-h2');
            $('.form').removeClass('form').addClass('form-add');
            $('.gnb-area').addClass('gnb-area-add');
        } else {
            $('.top-area-wrap').addClass('.top-area-wrap').removeClass('top-area-wrap-add');
            $('.top-area').addClass('.top-area').removeClass('top-area-add');
            $('.main-logo-box').addClass('.main-logo-box').removeClass('main-logo-box-add');
            $('.top-area h2').addClass('top-area-h2');
            $('.form-add').addClass('form').removeClass('form-add');
            $('.gnb-area').removeClass('gnb-area-add');
        }
        if($(this).scrollTop() >= 180) {
            $(sec1).addClass('scroll-e1');
        }
        if($(this).scrollTop() >= 850) {
            $('.img5').addClass('scroll-e2');
        }
        if($(this).scrollTop() >= 1450) {
            $(sec2).addClass('scroll-e3');
        }
        if($(this).scrollTop() >= 2150) {
            $(sec3).addClass('scroll-e4');
        }
        if($(this).scrollTop() >= 3150) {
            $(sec4).addClass('scroll-e5');
        }
        if($(this).scrollTop() >= 3850) {
            $(sec5).addClass('scroll-e6');
        }
    });
});