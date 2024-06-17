$(window).on('load', function() {
	_pageScroll();
	_fixedHeader();
	faqClick();
	if ($(window).width() < 1180) {
		_setSpMenu();
	}
});


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



$(window).on('load scroll', function(){
	$(".animation").each(function(){
		var position = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > position - windowHeight){
			$(this).addClass('moved');
		}
	});
});


function faqClick() {
	$('.js-accordion__trigger').click(function(){
		$(this).parents('.js-accordion').toggleClass('active');
	});
}


/* タブ切り替え */
$(function(){
	$('.tab-target').eq(0).addClass('current');

	$('.tab_navi li').click(function(){
		var index = $('.tab_navi li').index(this);

		if($(this).hasClass('current')){

		} else {
			$('.tab_navi li').removeClass('current');
			$(this).addClass('current');

			$('.tab-target').removeClass('current');
			$('.tab-target').eq(index).addClass('current');
		}
	});
});


/* TOPニュースticker */
$(function(){
	$(window).load(function(){
		var $setElm = $('.ticker');
		var effectSpeed = 1000;
		var switchDelay = 6000;
		var easing = 'swing';

		$setElm.each(function(){
			var effectFilter = $(this).attr('rel'); // 'fade' or 'roll' or 'slide'

			var $targetObj = $(this);
			var $targetUl = $targetObj.children('ul');
			var $targetLi = $targetObj.find('li');
			var $setList = $targetObj.find('li:first');

			var ulWidth = $targetUl.width();
			var listHeight = $targetLi.height();
			$targetObj.css({height:(listHeight)});
			$targetLi.css({top:'0',left:'0',position:'absolute'});

			var liCont = $targetLi.length;

			if(effectFilter == 'fade') {
				$setList.css({display:'block',opacity:'0',zIndex:'98'}).stop().animate({opacity:'1'},effectSpeed,easing).addClass('showlist');
				if(liCont > 1) {
					setInterval(function(){
						var $activeShow = $targetObj.find('.showlist');
						$activeShow.animate({opacity:'0'},effectSpeed,easing,function(){
							$(this).next().css({display:'block',opacity:'0',zIndex:'99'}).animate({opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({display:'none',zIndex:'98'}).removeClass('showlist');
						});
					},switchDelay);
				}
			} else if(effectFilter == 'roll') {
				$setList.css({top:'3em',display:'block',opacity:'0',zIndex:'98'}).stop().animate({top:'0',opacity:'1'},effectSpeed,easing).addClass('showlist');
				if(liCont > 1) {
					setInterval(function(){
						var $activeShow = $targetObj.find('.showlist');
						$activeShow.animate({top:'-3em',opacity:'0'},effectSpeed,easing).next().css({top:'3em',display:'block',opacity:'0',zIndex:'99'}).animate({top:'0',opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({zIndex:'98'}).removeClass('showlist');
					},switchDelay);
				}
			} else if(effectFilter == 'slide') {
				$setList.css({left:(ulWidth),display:'block',opacity:'0',zIndex:'98'}).stop().animate({left:'0',opacity:'1'},effectSpeed,easing).addClass('showlist');
				if(liCont > 1) {
					setInterval(function(){
						var $activeShow = $targetObj.find('.showlist');
						$activeShow.animate({left:(-(ulWidth)),opacity:'0'},effectSpeed,easing).next().css({left:(ulWidth),display:'block',opacity:'0',zIndex:'99'}).animate({left:'0',opacity:'1'},effectSpeed,easing).addClass('showlist').end().appendTo($targetUl).css({zIndex:'98'}).removeClass('showlist');
					},switchDelay);
				}
			}
		});
	});
});

/* TOPニュースtitle文字数 */
$(function(){
	var $setElm = $('.top_news_title');
	if ($(window).width() < 560) {
		var cutFigure = '18';
	} else {
		var cutFigure = '28';
	}
	var afterTxt = ' …'; // 文字カット後に表示するテキスト

	$setElm.each(function(){
		var textLength = $(this).text().length;
		var textTrim = $(this).text().substr(0,(cutFigure))

		if(cutFigure < textLength) {
			$(this).html(textTrim + afterTxt).css({visibility:'visible'});
		} else if(cutFigure >= textLength) {
			$(this).css({visibility:'visible'});
		}
	});
});
