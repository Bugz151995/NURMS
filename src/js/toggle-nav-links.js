$(document).ready(function(){
  $('#auction-toggle').click(function(){
    var disp = $('#auction-links').attr('style');
    $('#auction-links').slideToggle();
    if(disp != ""){
      $('#auction-toggle-icon').attr('class', 'fas fa-caret-up');
    } else {
      $('#auction-toggle-icon').attr('class', 'fas fa-caret-right');
    }
  });
});