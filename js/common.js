$(document).ready(function(){
    $(window).bind('scroll', function(e){
        parallaxScroll();
    });
    function parallaxScroll(){
        var scrolledY = $(window).scrollTop();
        $('.parallax-top').css('top','+' + ((scrolledY*0.4)) + 'px');
        $('.header-content').css('top','-' + ((scrolledY*0.02)) + '%');
        $('.header-content').css('opacity','1' - (scrolledY*0.002));
        $('#header-symbol-line line').css('stroke-dashoffset','20' - ((scrolledY*0.4)) + '%');
        $('.rect').attr('viewBox','0' + ' ' + ('-200' - ((scrolledY*0.500))) + ' ' + '1500' + ' ' + '600');
        $('.rect rect').css('stroke-dashoffset','1060' - ((scrolledY*0.2)) + '%');
        $('.rect rect').css('fill-opacity','0.1' - (scrolledY*0.0001));

        /*$('.opacity').css('opacity','0' + (scrolledY*0.001));*/
    }
    var scene = document.getElementById('top-parallax-block');
    var parallax = new Parallax(scene,{
        calibrateX: false,
        calibrateY: true,
        invertX: true,
        invertY: true,
        limitX: false,
        limitY: 10,
        scalarX: 8,
        scalarY: 0,
        frictionX: 0.5,
        frictionY: 0.8,
        originX: 0.0,
        originY: 1.0
    });

    $(function(){
        $('#search-top').focusin(function () {
            $('.search').find('i.fa').addClass('fa-lg');
        });
        $('#search-top').focusout(function () {
            $('.search').find('i.fa').removeClass('fa-lg');
        });
    });
    $(function(){
        $('#search-top-no-index').focusin(function () {
            $('.search').find('i.fa').addClass('fa-lg');
        });
        $('#search-top-no-index').focusout(function () {
            $('.search').find('i.fa').removeClass('fa-lg');
        });
    });




});