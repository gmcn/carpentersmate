( function($) {

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});


    $( document ).ready(function() {


        var ppp = 2; // Post per page
        var pageNumber = 4;


        function load_posts(){
            pageNumber++;
            var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
            $.ajax({
                type: "POST",
                dataType: "html",
                url: ajax_posts.ajaxurl,
                data: str,
                success: function(data){
                    var $data = $(data);
                    if($data.length){
                        $("#ajax-posts").append($data);
                        $("#more_posts").attr("disabled",false);
                    } else{
                        $("#more_posts").attr("disabled",true);
                    }
                },
                error : function(jqXHR, textStatus, errorThrown) {
                    $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }

            });
            return false;
        }

        $("#more_posts").on("click",function(){ // When btn is pressed.
            $("#more_posts").attr("disabled",true); // Disable the button, temp.
            load_posts();
            $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
        });


      });




} ) (jQuery);

$(function() {
  $('#bh-sl-map-container').storeLocator();
});

$("#bh-sl-submit").click(function(){
  $(".loadingDiv").addClass("display");
  $(".loadingDiv").removeClass("hidden");
});

(function() {
    var search = $('.__js_header-search');
    var toggle = search.find('.header-search__toggle');
    var activeClass = 'header-search--opened';
    toggle.on('click', function() {
        search.toggleClass(activeClass);
    });
})();

var i = 0;
	  $('.widget .panel').each(function() {
	    $(this).find('.panel-heading').attr('id', 'heading' + i);
	    $(this).find('.panel-collapse').attr('id', 'toggle' + i).attr('aria-labelledby', 'heading' + i);
	    $(this).find('.widget-title a').attr('href', '#toggle' + i).attr('aria-controls', 'toggle' + i);
	    i++;
	  });

    if ($('.layout-shop__body__controls').length) {
      let sortGrid = $('.layout-shop__body__controls .sort-grid');
      let sortList = $('.layout-shop__body__controls .sort-list');
      let body = $('body');

      sortGrid.on('click', function() {
        body.removeClass('woocommerce-sort-list');
        Cookies.set('cm-wc-sort-list', '0', { expires: 365, path: '/' });
      });

      sortList.on('click', function() {
        body.addClass('woocommerce-sort-list');
        Cookies.set('cm-wc-sort-list', '1', { expires: 365, path: '/' });
      });
    }

var heroSwiper = new Swiper(".heroSwiper", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var productSwiper = new Swiper(".productSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,

        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 4,
          },
        },

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

      });

var testimonialSwiper = new Swiper(".testimonialSwiper", {

  loop: true,
  autoHeight: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

});

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#fecb16",
      "text": "#00509f"
    },
    "button": {
      "background": "#00509f"
    }
  },
  "theme": "edgeless",
  "position": "bottom-left",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

var mySwiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'vertical',
   loop: true,

   // If we need pagination
   pagination: {
     el: '.swiper-pagination',
   },

   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
 })
