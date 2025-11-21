$(function() {
  $('.header-humburger').click(function() {
    $(this).parents('.header-big').toggleClass('hd-fixed')
  })
  window.onscroll = function() {scrollFunction()};
})


function scrollFunction() {
  // const sticky = document.getElementById("bg-header");
  // const mybutton = document.getElementById("myBtn");
  // if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
  //   sticky.classList.add('sticky-header')
  // } else {
  //   sticky.classList.remove('sticky-header')
  // }
  // if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
  //   mybutton.style.display = "block";
  // } else {
  //   mybutton.style.display = "none";
  // }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
$(function() {
  var totalItems = $('.item').length;
  var currentIndex = $('div.item.active').index() + 1;

  var down_index;
  $('.num').html(''+currentIndex+'/'+totalItems+'');

      $(".next").click(function(){
      currentIndex_active = $('div.item.active').index() + 2;
      if (totalItems >= currentIndex_active)
      {
          down_index= $('div.item.active').index() + 2;
          $('.num').html(''+currentIndex_active+'/'+totalItems+'');
      }
  });

      $(".prev").click(function(){
          down_index=down_index-1;
      if (down_index >= 1 )
      {
          $('.num').html(''+down_index+'/'+totalItems+'');
      }
  });
})

