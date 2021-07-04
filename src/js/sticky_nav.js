window.onscroll = function(){stickyNav();};

var otherNav = document.getElementById("other-nav");

var sticky = otherNav.offsetTop;

function stickyNav(){
  var vwpWidth = $(window).width();

  if(vwpWidth > 976){
    var otherNavWidth = vwpWidth - 225;
    var newWidth = otherNavWidth+"px";
    $('#other-nav').attr("style", "left:225px; width: "+newWidth);
  } else if(vwpWidth < 975){
    $('#other-nav').attr("style", "left:0px; width: 100%");
  } 
  var liveAuLink = $('#live-au-link');
  var closedAuLink = $('#closed-au-link');
  var myBidLink = $('#my-bid-link');

  var tabs = new Array(liveAuLink, closedAuLink, myBidLink);

  //set the style for active and inactive navigation item and links
  //styles differ if the nav is fixed on top or below the carousel
  if (window.pageYOffset >= sticky) {
    otherNav.setAttribute("class", "nav bg-dark shadow text-white no-gutters");
    otherNav.classList.add("sticky");
    styleStickyNav(tabs, 'text-white', 'active');
  } else {
    otherNav.classList.remove("sticky");
    otherNav.setAttribute("class", "nav nav-tabs no-gutters row");
    styleStickyNav(tabs, 'text-white', 'inactive');
  }
}

function styleStickyNav(tabs, activeTxtStyle, status){
  var i = 0;
  var activeTab = "nav-item col-4 text-center text-nowrap active";
  while(i < 3){
    //if the status is active then change the style of the active item
    //and change the style of the inactive tabs
    if(tabs[i].attr("class") === activeTab){
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
    otherNav.setAttribute("class", "nav bg-dark shadow text-white no-gutters");
    otherNav.classList.add("sticky");
  } else {
    otherNav.classList.remove("sticky");
    otherNav.setAttribute("class", "nav nav-tabs no-gutters row");
  }
}

function responsiveNav(){
  $(document).ready(function(){
    $(window).resize(function(){
      var vwpWidth = $(window).width();

      if(vwpWidth > 976){
        var otherNavWidth = vwpWidth - 225;
        var newWidth = otherNavWidth+"px";
        $('#other-nav').attr("style", "left:225px; width: "+newWidth);
      } else if(vwpWidth < 975){
        $('#other-nav').attr("style", "left:0px; width: 100%");
      } 
    });
  });
}