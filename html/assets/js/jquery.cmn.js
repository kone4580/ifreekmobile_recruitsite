$(window).on('load', function() {
	_pageScroll();
	_fixedHeader();
	_preload();
	faqClick();
	_modalOpen();
	if ($(window).width() < 1180) {
		_setSpMenu();
	}
});


function _preload(){
	$('body').removeClass('preload');
}
var ifHide = true;
$(window).scroll(function(){
	if($(window).scrollTop() < 300 && ifHide==false){
		$("#pagetop").animate({bottom:-60});
		$(".fixed-header").animate({top:-120});
		$(".fixed_buttons").removeClass('scrolled');
		ifHide = true;
	} else if ($(window).scrollTop() > 300 && ifHide==true){
		if ($(window).width() < 769) {
			$("#pagetop").animate({bottom:8});
		} else {
			$("#pagetop").animate({bottom:8});
		}
		$(".fixed-header").animate({top:0});
		$(".fixed_buttons").addClass('scrolled');
		ifHide = false;
	}
});


function _fixedHeader(){
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 300) {
      $('.fixed-header').addClass('fixed');
    } else {
      $('.fixed-header').removeClass('fixed');
    }
  });
}


function _setSpMenu(){
	$(".menuBtn").click(function() {
		if($("#header").hasClass("opened")) {
			$("#header").removeClass("opened");
			$(".menuBtn").removeClass("menu-open");
    } else {
			$("#header").addClass("opened");
			$(".menuBtn").addClass("menu-open");
    }
	});
}


/* ページ内リンク */
function _pageScroll(){
	$('a[href^="#"]').click(function() {
    var speed = 300;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
	});
}


/* タブ切り替え */
/* タブ切り替え */
$(function(){
  $('.tab-target').eq(0).addClass('current');

  $('.tab_navi li').click(function(){
    var index = $('.tab_navi li').index(this);

    if($(this).hasClass('current')){
    }else{
      $('.tab_navi li').removeClass('current');
      $(this).addClass('current');

      $('.tab-target').removeClass('current');
      $('.tab-target').eq(index).addClass('current');
    }
  });
});


$(window).on('load scroll', function(){
	$(".animation").each(function(){
	  var position = $(this).offset().top;
	  var scroll = $(window).scrollTop();
	  var windowHeight = $(window).height();
	  if (scroll > position - windowHeight + windowHeight/4){
			$(this).addClass('moved');
	  }
	});
});


function faqClick() {
	$('.js-accordion__trigger').click(function(){
		$(this).parents('.js-accordion').toggleClass('active');
	});
}

function _modalOpen() {
	$('.js-modal-open').each(function(){
		$(this).on('click',function(){
			var target = $(this).data('target');
			var modal = document.getElementById(target);
			$(modal).fadeIn();
			return false;
		});
	});
	$('.js-modal-close').on('click',function(){
		$('.js-modal').fadeOut();
		return false;
	});
}
