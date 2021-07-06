function responsiveLayout(id){
  $(document).ready(function(){
    $(window).resize(function(){
      var vwp_width = $(window).width();
      var childs = $(id).children();
      if(vwp_width > 1200){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-4");
        });
      } else if(vwp_width > 976){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-6");
        });
      } else if(vwp_width < 975){
        childs.each(function(){
          $(this).attr("class", "p-1 col-md-6");
        });
      } 
    });
  });
}
