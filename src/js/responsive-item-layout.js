function responsiveLayout(id){
  $(document).ready(function(){
    $(window).resize(function(){
      var vwpWidth = $(window).width();
      var childs = $(id).children();
      if(vwpWidth > 1200){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-4");
        });
      } else if(vwpWidth > 976){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-6");
        });
      } else if(vwpWidth < 975){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-6");
        });
      } 
    });
  });
}
