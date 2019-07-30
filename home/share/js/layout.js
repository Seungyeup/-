$(document).ready(function() {

    var divWidth;

    function sizeControl(width) {
        width = parseInt(width);
        var wheight = document.body.scrollHeight;
        if (width < 1200) {
            $('#all-Navi').addClass('m-allmenu').removeClass('web-allmenu');
            $('#navi-wrap').addClass('mnavi-wrap').removeClass('webnavi-wrap');
            $('.depth2-wrap').addClass('mdepth2-wrap').removeClass('depth2-wrap');
            rightEvent();
            rightNavi();
        } else {
            $('#all-Navi').addClass('web-allmenu').removeClass('m-allmenu');
            $('#navi-wrap').addClass('webnavi-wrap').removeClass('mnavi-wrap');
            $('.mdepth2-wrap').addClass('depth2-wrap').removeClass('mdepth2-wrap');
            webNavi();
        }

        divWidth = $('#doc_wrap').width();
        $('#navi').find('li.nm-mn1 > .nm-am1').click( function(){
            if (divWidth < 1200 ) {
                return false;
            }else {
                return true;
            }
        });
    }

    $(function() {
        sizeControl($(this).width());

        $(window).resize(function() {
            if(this.resizeTO) {
                clearTimeout(this.resizeTO);
            }
            this.resizeTO = setTimeout(function() {
                $(this).trigger('resizeEnd');
            }, 0);
        });
    });

    $(window).on('resizeEnd', function() {
        sizeControl($(this).width());
    });

    /*PC Menu*/
    function webNavi(){
        $('#navi').find('.depth2-wrap').show();

        var bigHeight = 0;
        $(function(){
            $("#navi > li.nm-mn1 > .depth2-wrap > .depth2").each(function(){
                if( bigHeight < $(this).outerHeight(true) ){
                    bigHeight = $(this).outerHeight(true);
                }
            });

        });

        $('#navi').find('.depth2-wrap').css({'display':'block'}).stop().animate({'height' : 0 }, 100)
        $('.navi-bg').stop().animate({'height' : 0}, 100);

        $('#navi').find('li > a.nm-am1').mouseover(function(){
            $('.navi-bg').stop().animate({'height' : bigHeight + 20}, 200);
            $('#navi > li.nm-mn1 > .depth2-wrap').stop().animate({'height' : bigHeight }, 200);
            $(this).parent('li.nm-mn1').addClass('over').removeClass('mover');
            $(this).parent('li.nm-mn1').siblings('li.nm-mn1').removeClass('over').removeClass('mover');
        }).focus(function(){
            $('.navi-bg').stop().animate({'height' : bigHeight + 40}, 200);
            $('#navi > li.nm-mn1 > .depth2-wrap').stop().animate({'height' : bigHeight }, 200);
            $(this).parent('li.nm-mn1').addClass('over').removeClass('mover');
            $(this).parent('li.nm-mn1').siblings('li.nm-mn1').removeClass('over').removeClass('mover');
        });
        $('#container_wrap, #quick_wrap, .visual_wrap, .svis_wrap, #foot_quick_wrap, #contents, #footer-wrap').mouseenter(function(){
            $('.navi-bg').stop().animate({'height' : 0}, 100);
            $('#navi').find('.depth2-wrap').stop().animate({'height' : 0 }, 100)
        })
    }

    /*Mobile Menu*/
    function rightEvent() {
        var is_m = $("#navi-wrap").css('right');
        $('#m_menu_open').click(function () {
            if(is_m = -225){
                $('.m-allmenu').css({'width':'100%'});
                $('#navi-wrap').stop().animate({'right' :'0'},300);
                $('#m_menu_close').stop().animate({'right':'225'},300)
            }
        });
        $('#m_menu_close').click(function () {
            if(is_m <= 1){
                $('.m-allmenu').css({'width':'100%'});
                $('#all-Navi').css({'width':'0'});
                $('#navi-wrap').stop().animate({'right' :'-225'},300);
                $('#m_menu_close').stop().animate({'right':'0'},200)
            }
        });
    };

    /*Mobile Menu Event*/
    function rightNavi() {

        $('#navi >  li.nm-mn1 > .mdepth2-wrap').hide()

        $('#navi').find('li.nm-mn1 > a.nm-am1').click(function(){
            $('#navi >  li.nm-mn1').find('.mdepth2-wrap').css({"height":'auto'});

            $(this).parent('li').find('.mdepth2-wrap').slideDown()
            $(this).parent('li').addClass('mover').removeClass('over');
            $(this).parent('li').siblings('li').find('.mdepth2-wrap').slideUp()
            $(this).parent('li').siblings('li').removeClass('mover').removeClass('over');
        })
    }
    contScroll();
});

/*서브메뉴*/
jQuery(function($){
    $('.snb_pageTit > span.over').click(function(){
        $('.snb_pageTit > span.over').hide();
        $('.snb_pageTit > span.out').show();
        $('#snb').slideDown('fast');
    });
    $('#snb > li > a').click(function(){
        $('#snb').slideUp('fast');
    });
    $('.snb_pageTit > span.out').click(function(){
        $('.snb_pageTit > span.out').hide();
        $('.snb_pageTit > span.over').show();
        $('#snb').slideUp('fast');
    });
});


function contScroll(){

    //var $warp = $('#doc-wrap');
    var $header = $('#header_wrap');
    var $quick = $('#foot_quickArea');
    var $toTop = $('#toTop');

    $(window).scroll(function() {
        if ($(this).scrollTop() > 194){
            //$warp.addClass("scroll_doc");
            $header.addClass("headerFixed");
            //$toTop.show();
        }else{
            //$warp.removeClass("scroll_doc");
            $header.removeClass("headerFixed");
            //$toTop.hide();
        }
    });
    //상단으로 이동
    $('html,body').scrollTop();
    $toTop.click(function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop:0
        },500, 'swing');
    });
}


//폴딩
function viewFolingItem(id,h){
    if($('#'+id).hasClass("isOpen")){
        $('#'+id).stop().animate({"height":0},400);
        $('#'+id).removeClass("isOpen");
        $("#"+id+"-tit a").removeClass("over");
    }else{
        $('#'+id).stop().animate({"height":h},400);
        $('#'+id).addClass("isOpen");
        $("#"+id+"-tit a").addClass("over");
    }
}

//다중폴딩
function viewFolingListItem(idx){
    var obj = $(".foldings-list #foldings-data"+idx);
    var obj_other = $(".foldings-list li").not("#foldings-data"+idx);
    $(".foldings-in-cont",$(obj_other)).slideUp("fast");
    $(obj_other).removeClass("over");
    if(obj.hasClass("over")){
        $(".foldings-in-cont",$(obj)).slideUp("fast");
        $(obj).removeClass("over");
    }else{
        $(".foldings-in-cont",$(obj)).slideDown("fast");
        $(obj).addClass("over");
    }
}

