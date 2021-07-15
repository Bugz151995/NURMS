var upcomingEventList = document.getElementById('upcomingEventList');
var ongoingEventList = document.getElementById('ongoingEventList');

if(ongoingEventList.children.length === 0) {
  ongoingEventList.setAttribute("class", "fs-alert alert alert-danger");
  ongoingEventList.innerHTML;
  ongoingEventList.innerHTML = "<strong>Notice:</strong> Sorry, There are no ongoing live auction as of this moment.";
}

if(upcomingEventList.children.length === 0){
  upcomingEventList.setAttribute("class", "fs-alert alert alert-danger");
  upcomingEventList.innerHTML;
  upcomingEventList.innerHTML = "<strong>Notice:</strong> Sorry, There are no upcoming events as of this moment.";
}