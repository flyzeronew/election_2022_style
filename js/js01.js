$(function() {
// 輪播-快訊
$('.good_box .txt_box').owlCarousel({
    URLhashListener:true,
    startPosition:'URLHash',
    animateIn: 'fadeInDown',
    lazyContent:true,
    items:1,
    loop:true,
    nav:false,
    margin:0,
    autoplay:true,
    smartSpeed:800,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    navText:['',''],
});
//  蓋板關閉
$('.lightbox_ad .xx').click(function(){$('.lightbox_ad').hide();}); 
    $(window).scroll(function(){
        var $all_h=$(window).scrollTop() + $(window).height();
        var $obj_h=$('footer').outerHeight()+10;
        var $header_h=$('header').outerHeight();
        var $main_h=$('main').outerHeight();
        var $foot_top= $('footer').offset().top;
        var $bottom_ad_h=$('.flexd_bottom_ad').outerHeight();

        if ($(window).scrollTop()>50){
            $("#back").fadeIn(200);
        }else{
            $("#back").fadeOut(200);
        }

        if ($(window).width()>767){
            $(".flexd_bottom_ad").hide();
            if($all_h > $foot_top) {
                //alert("near bottom!");
                $("#back").css({"bottom":$obj_h});
            }else{
                $("#back").css({"bottom":"20px"});
            }
        }else{
            if ($(window).scrollTop()>50){
                $(".flexd_bottom_ad").show();
            }else{
                $(".flexd_bottom_ad").hide();
            }
            if($all_h > $foot_top) {
                //alert("near bottom!");
                $("#back").css({"bottom":$obj_h+$bottom_ad_h-5,"transition":"0.3s"});
                $(".flexd_bottom_ad").css({"bottom":$obj_h-10,"transition":"0.3s"});

            }else{
                $("#back").css({"bottom":$bottom_ad_h+5,"transition":"0.3s"});
                $(".flexd_bottom_ad").css({"bottom":"0px","transition":"0.3s"});
            }
        }
     });
/*gotop*/
    var $el = $(scrollableElement('html', 'body'));
    var speed = 550;
    var $iconTOP = $('#back-img1');
    $($iconTOP).click(function(event) {
        event.preventDefault();
        $el.stop().animate({ scrollTop: -50 }, speed);
    });
    // 透過scrollTop檢測可用元素的函數// http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links#update4
    function scrollableElement() {
        var i, len, el, $el, scrollable;
        for (i = 0, len = arguments.length; i < len; i++) {
            el = arguments[i];
            $el = $(el);
            if ($el.scrollTop() > 0) {

                return el;
            } else {
                $el.scrollTop(1);
                scrollable = $el.scrollTop() > 0;
                $el.scrollTop(0);
                if (scrollable) {
                    return el;
                }
            }
        }
        return [];
    }
 /*gotop ed*/

});
