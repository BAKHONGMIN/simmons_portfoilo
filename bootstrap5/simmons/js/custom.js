
  $(document).ready(function(){
  
    
  
  "use strict";

    // AOS ANIMATIONS
    AOS.init();

    // NAVBAR
    $('.navbar-nav .nav-link').click(function(){
        $(".navbar-collapse").collapse("hide");
    });

 


    // NEWS IMAGE RESIZE
    function NewsImageResize(){
      $(".navbar").scrollspy({ offset: -76 });
      
      var LargeImage = $('.large-news-image').height();

      var MinusHeight = LargeImage - 6;

      $('.news-two-column').css({'height' : (MinusHeight - LargeImage / 2) + 'px'});
    }

    $(window).on("resize", NewsImageResize);
    $(document).on("ready", NewsImageResize);

    $('a[href*="#"]').click(function (event) {
     
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          // $('html, body').animate({
          //   scrollTop: target.offset().top - 0
          // }, 100);
        }
      }
    });
////////////////////////////////////////collection /////////////////////////////////
    var count =0;

    $('.indecate_brand > button').click(function(){
      
      clearInterval(viewAction);
      count = $(this).index();
      brandAction(count); //클릭하자마자걸림
      viewAction = setInterval(function(){ //5초뒤에 걸림
      count++;
      count %= $('.indecate_brand > button').length;

      brandAction(count);
    }, 5000);
      
    });

// ////////////////상품 슬라이드 버튼
    $('.smimg > button').click(function(){
      //console.log($(this).index());
      clearInterval(viewAction);
      viewAction = setInterval(function(){ //5초뒤에 걸림
        count++;
        count %= $('.indecate_brand > button').length;
  
        brandAction(count);
      }, 5000);      
    });

    function brandAction(num){
      $('.indecate_brand > button').eq(num).addClass('act').siblings().removeClass('act');
      $('.viewBrand > div').eq(num).removeClass('d-none').siblings().addClass('d-none');
    }

   

   var viewAction = setInterval(function(){
      count++;
      count %= $('.indecate_brand > button').length;

      brandAction(count);
    }, 7000);



///////////////////////////////////////////메인배너에서 시간 지나면 밑으로 내려오게//////////////////////////
    setTimeout(movepage, 10000); 
      
    function movepage(){
      location.href="#about";
    }
    clearTimeout(movepage);
    setTimeout(movepage, 10000); 

  //  var mainAdshow = setTimeout(movieAd, 5000);
  //  var mainAdshowbelow = setTimeout(movieAdbelow, 6000);
  //  var aboutAosArr =  document.querySelectorAll('.anibelowtitle[data-aos]');
  
  
  

    // function movieAd(){
    //   $('#hero').removeClass('open');  
    //   for(var i=0; i < aboutAosArr.length; i++){
    //     $(aboutAosArr[i]).attr('data-aos-delay', i*500 )
    //   }    
    // }
    // function movieAdbelow(){      
    //   $('.anibelowtitle').addClass('aos-init aos-animate');
    // }
      
    function movepage(){
        $('html, body').animate({
            scrollTop : 750
          },1000);
    }
    clearTimeout(movepage);
  $('html, body').animate({
    scrollTop : 1000
  },10000);
// ///////////////////////////////////////////////////////////////////////////////////////////////////
// $(".mousein > img").mouseover(function(){

//   $(this).eq(0).addClass('big').siblings().removeClass('big');
//   $(this).eq(0).removeClass('position-absolute').siblings().addClass('position-absolute');
// });

  $(window).scroll(function(e){
    buttonTop();
  
  });

  function buttonTop(){
    let scrollTop = $(window).scrollTop();
    if(scrollTop > $(window).outerHeight()){
      $('.buttonTop').addClass('on');
      $('.storebutton').addClass('on');
    }else {
      $('.buttonTop').removeClass('on');
      $('.storebutton').removeClass('on');
    }
  }
  
  
// $(".nav-item").click(function(){

//   $(this).eq(0).addClass('active').siblings().removeClass('active');
// });


// ////////////////////////




// ///////////////////////// 
  });
  


  
