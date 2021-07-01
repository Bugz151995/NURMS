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
  var activeTab = "nav-item col-4 text-center text-nowrap active";

  if (window.pageYOffset >= sticky) {
    otherNav.setAttribute("class", "nav bg-dark shadow text-white no-gutters");
    otherNav.classList.add("sticky");
    styleStickyNav(tabs, activeTab, 'text-white');
  } else {
    otherNav.classList.remove("sticky");
    otherNav.setAttribute("class", "nav nav-tabs no-gutters row");
    styleStickyNav(tabs, activeTab, 'text-dark');
  }
}

function styleStickyNav(tabs, activeTab, textColor){
  var i = 0;
  while(i < 3){
    if(tabs[i].attr("class") === activeTab){
      tabs[i].children().each(function(){
        $(this).attr("class", "nav-link "+textColor+" active");
      });
    } else tabs[i].attr("class", "nav-item col-4 text-center text-nowrap");
    i++;
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