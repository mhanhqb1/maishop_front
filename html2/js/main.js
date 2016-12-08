$(document).ready(function(){
  var width = $(window).width();
//active href///
  var touch = false;
  var link = $(location).attr('href');
  var s = link.indexOf("?");
  var index = link.substring(s+1, s+6);
  if(s!=-1 && index != 'route'){
    var res = link.substring(0, s);
    $("[href]").each(function() {
    if (this.href == res) {
        $(this).addClass("active");
        }
    });
  }else{
      $("[href]").each(function() {
      if (this.href == window.location.href) {
          $(this).addClass("active");
          $(this).parent().addClass("active");
          }
      });
  }
//end active href///

//list product --  grip prduct  -- product slide //
  $('.slide_product .product-layout-custom').owlCarousel({
      navigation : true, 
      pagination : false,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="mdi mdi-keyboard-arrow-left"></i>','<i class="mdi mdi-keyboard-arrow-right"></i>'],
       afterAction: function(el){
        $('.slide_product .medium').removeClass('col-lg-3 col-md-3 col-sm-6 col-xs-12');
       }
  });
  $('.list_product .medium').removeClass('col-lg-3 col-md-3 col-sm-6 col-xs-12');
//end list product - grip prduct //

// search box //
  $('#search_box > i').click(function(){
    $('#search_box').toggleClass('opened');
  })

  $(document).mouseup(function (e){
    var container = $("#search_box");
    if (!container.is(e.target)
    && container.has(e.target).length === 0)
    {
      $('#search_box').removeClass('opened');
    }
  });
// search box //

// menu //
  if(width <1025){
    $('.header .menu-content').addClass('collapse');
    $('.header .menu-content .menu ul').addClass('collapse');
      $('.header .menu-content .menu').find('li').has('ul').children('.expander').on('click', function() {
        $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
        $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
    });
  }
// menu //

// menu sidebar //
  $('.menu_category .nav ul').addClass('collapse');
    $('.menu_category .nav').find('li').has('ul').children('.icon_menu').on('click', function() {
      $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
      $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
  });
// menu sidebar //

// instagram //
  $('.instagram .list').owlCarousel({
      navigation : true, 
      pagination : false,
      items : 5,
      itemsDesktop : [1300,4],
      itemsDesktopSmall : [1024,3], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
  });
// instagram //

//active display category//
 if (localStorage.getItem('display') == 'list') {
    $('#list-view').trigger('click');
    $('.entry .list').addClass('active');
  } else {
    $('#grid-view').trigger('click');
    $('.entry .grid').addClass('active');
  }

   $('.entry .grid').click(function(){
      $('.entry .list').removeClass('active');
      $(this).addClass('active');
   })

   $('.entry .list').click(function(){
      $('.entry .grid').removeClass('active');
      $(this).addClass('active');
   })
//end active display category//
	cols = $('#column-right, #column-left').length;
	if (cols == 2) {
		$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-4 col-xs-6');
		$('#content .product-layout:nth-child(2n+2)').addClass('visible-lg');
	} else if (cols == 1) {
		$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-6 col-sm-4 col-xs-6');
	} else {
		$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-4 col-sm-4 col-xs-6');
		$('#content .pd-content .clearfix').addClass('visible-lg');
	}
  if (localStorage.getItem('display') == 'list') {
    $('#list-view').trigger('click');
    $('.entry .list').addClass('active');
  } else {
    $('#grid-view').trigger('click');
    $('.entry .grid').addClass('active');
  }

  $('.entry .grid').click(function(){
    $('.entry .list').removeClass('active');
    $(this).addClass('active');
  })

  $('.entry .list').click(function(){
    $('.entry .grid').removeClass('active');
    $(this).addClass('active');
  })




	function setheight(p1) {
		(function($){$.fn.equalHeights=function(minHeight,maxHeight){tallest=(minHeight)?minHeight:0;this.each(function(){if($(this).height()>tallest){tallest=$(this).height()}});if((maxHeight)&&tallest>maxHeight)tallest=maxHeight;return this.each(function(){$(this).height(tallest)})}})(jQuery)
		  $(window).load(function(){
		    if($(p1).length){
		    $(p1).equalHeights()}
		});
	}

	setheight(".show-in-tab-mod .product-thumb .caption");
  if(width < 1200 && width > 480){
    setheight(".pd-content .product-thumb .caption");
  }
  if(width < 992 && width > 750){
    $('.vertical_footer > .dv-module-content .row .col-xs-12:nth-child(2n+2)').after('<div class="clearfix visible-md visible-sm"></div>');
  }

// footer //
if(width < 751){
  $('.footer-top .vertical-name .menu-content').addClass('collapse');
  $('.footer-top .vertical-name').children('h4').on('click', function() {
    $(this).parent('.vertical-name').toggleClass('open').children('.menu-content').collapse('toggle');
    $(this).parent('.vertical-name').siblings().removeClass('open').children('.menu-content.in').collapse('hide');
  });
}
// footer //

//scrolltop//
 $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: 'linear',
      scrollSpeed: 900,
      animation: 'fade'
  });
//end scrolltop//

});(jQuery);
(window.jQuery);
