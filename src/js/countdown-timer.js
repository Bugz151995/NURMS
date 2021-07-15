// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
  var endDate = new Date(document.getElementById('auctionEndDate').getAttribute("value"));
  
  var startDate = new Date(document.getElementById('auctionStartDate').getAttribute("value"));
  
  // Find the distance between now and the count down date  
  var distance = endDate - now;

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
    document.getElementById("bidBtn").setAttribute("disabled", true);
    document.getElementById("watchBtn").setAttribute("class", "fs-btn btn bid-btn d-flex align-items-center disabled");
    document.getElementById("watchBtn").setAttribute("onclick", "");
    document.getElementById("bidInputNumber").setAttribute("disabled", true);
    document.getElementById("bidInputNumber").setAttribute("value", 0);
  } else if (startDate > now) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "UNAVAILABLE";
    document.getElementById("bidBtn").setAttribute("disabled", true);
    document.getElementById("bidInputNumber").setAttribute("disabled", true);
    document.getElementById("bidInputNumber").setAttribute("value", 0);
  }
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element
  document.getElementById("days").innerHTML = days+"d";
  document.getElementById("hours").innerHTML = hours+"h";
  document.getElementById("minutes").innerHTML = minutes+"m";
  document.getElementById("seconds").innerHTML = seconds+"s";
}, 1000);