window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(document).ready(function(){
    $('#sidebarToggle').hover(
        function(){$(this).attr("style", "color: #ffffff");},
        function(){$(this).attr("style", "color: #5E35B1");}
    );
    $('.top-nav-icons').hover(
        function(){$(this).attr("style", "color: #ffffff");},
        function(){$(this).attr("style", "color: #5E35B1");}
    );
});