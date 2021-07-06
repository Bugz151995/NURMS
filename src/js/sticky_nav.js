window.onscroll = function(){stickyNav();};

var other_nav = document.getElementById("other-nav");

var sticky = other_nav.offsetTop;

function stickyNav(){
  var vwp_width = $(window).width();

  if(vwp_width > 976){
    var other_nav_width = vwp_width - 225;
    var new_width = other_nav_width + "px";
    $('#other-nav').attr("style", "left:225px; width: "+new_width);
  } else if(vwp_width < 975){
    $('#other-nav').attr("style", "left:0px; width: 100%");
  } 
  var live_auction_link = $('#live-au-link');
  var closed_auction_link = $('#closed-au-link');
  var my_bid_link = $('#my-bid-link');

  var tabs = new Array(live_auction_link, closed_auction_link, my_bid_link);

  //set the style for active and inactive navigation item and links
  //styles differ if the nav is fixed on top or below the carousel
  if (window.pageYOffset >= sticky) {
    other_nav.setAttribute("class", "nav bg-dark shadow text-white no-gutters");
    other_nav.classList.add("sticky");
    styleStickyNav(tabs, 'text-white', 'active');
  } else {
    other_nav.classList.remove("sticky");
    other_nav.setAttribute("class", "nav nav-tabs no-gutters row");
    styleStickyNav(tabs, 'text-white', 'inactive');
  }
}

function styleStickyNav(tabs, activeTxtStyle, status){
  var i = 0;
  var active_tab = "nav-item col-4 text-center text-nowrap active";
  while(i < 3){
    //if the status is active then change the style of the active item
    //and change the style of the inactive tabs
    if(tabs[i].attr("class") === active_tab){
      tabs[i].children().each(function(){
        if(status == 'active') {
          $(this).attr("class", "nav-link active text-light");
        } else {
          $(this).attr("class", "nav-link active");
        }
      });
    } else {
      tabs[i].children().each(function(){
        if(status == 'inactive') {
          $(this).attr("class", "nav-link text-primary");
        } else {
          $(this).attr("class", "nav-link active");
        }
      });
    }
    i++;
  }
}

function styleStickyNavContainer(){
  if (window.pageYOffset >= sticky) {
    other_nav.setAttribute("class", "nav bg-dark shadow text-white no-gutters");
    other_nav.classList.add("sticky");
  } else {
    other_nav.classList.remove("sticky");
    other_nav.setAttribute("class", "nav nav-tabs no-gutters row");
  }
}

function responsiveNav(){
  $(document).ready(function(){
    $(window).resize(function(){
      var vwp_width = $(window).width();

      if(vwp_width > 976){
        var other_nav_width = vwp_width - 225;
        var new_width = other_nav_width+"px";
        $('#other-nav').attr("style", "left:225px; width: " + new_width);
      } else if(vwp_width < 975){
        $('#other-nav').attr("style", "left:0px; width: 100%");
      } 
    });
  });
}