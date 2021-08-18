var dashboard_sidenav = document.getElementsByClassName("sidenav")[0];
var sidenav_button = document.getElementsByClassName("sidenav-open-button")[0];

if (window.innerWidth <= 1024) {
    dashboard_sidenav.style.left = "-309px";
}
$(".sidenav-open-button").on("click", () => {
    dashboard_sidenav.style.left == '-309px' ?
        dashboard_sidenav.style.left = "0px" :
        dashboard_sidenav.style.left = "-309px";
});
