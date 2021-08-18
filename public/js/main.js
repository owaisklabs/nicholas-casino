var mainBannerBacvk = document.getElementsByClassName('csBackI')[0];
var mainHome = document.getElementsByClassName('homeMain')[0];
console.log(mainHome)
if(mainHome){
    var Hbanner = mainHome.getElementsByClassName('banner')[0];
    var numbo = mainBannerBacvk.clientHeight - 163;
    var svg = document.getElementById('Layer_1').getElementsByTagName('path');
}

var navbar = document.getElementById('navbarMain');
var navTogglre = navbar.getElementsByClassName('fa-bars')[0];
var navbar_collapse = navbar.getElementsByClassName('navbar-collapse')[0];
var scrollTop;

if(mainHome){
    var colors = ['#e8f74d', '#ff6600d9', '#00ff66', '#13ff13', '#ad27ad', '#bd2681', '#6512b9', '#ff3300de', '#5aabde']
    for(var i = 0 ; i < svg.length; i++){
        svg[i].style.stroke = colors[Math.floor(Math.random() * 9)];
    }
    setInterval(()=>{
        setTimeout(()=>{
            for(var i = 0 ; i < svg.length; i++){
                svg[i].style.stroke = colors[Math.floor(Math.random() * 9)];
            }
        },500)
    },2000)
}


if (window.innerWidth > 1280 && mainHome) {
    Hbanner.style.height = numbo + 'px'
}

window.addEventListener('scroll', () => {
    scrollTop = this.scrollY;
    scrollTop >= 100 ? (navbar.style.backgroundColor = "#af7800d4" , navTogglre.style.color = "#000") : 
    (navbar.style.backgroundColor = 'transparent', navTogglre.style.color = "goldenrod");

    if(scrollTop < 100 && navbar_collapse.classList.contains('show')){
        navbar.style.backgroundColor = "#af7800d4";
        navTogglre.style.color = "#000"
    }

})

$('.navbar-toggler').on('click', () => {
    if(scrollTop < 100 || scrollTop == undefined){
        navbar.style.backgroundColor == "" || navbar.style.backgroundColor == 'transparent' ?
        (navbar.style.backgroundColor = "#af7800d4" , navTogglre.style.color = "#000") : 
        (navbar.style.backgroundColor = 'transparent', navTogglre.style.color = "goldenrod")
    }  
})



const _iOSDevice = !!navigator.platform.match(/iPhone|iPod|iPad/);
window.scroll(0, 0)
// smooth scroll
var Scrollbar = window.Scrollbar;
const options = {
    damping: 0.5,
    thumbMinSize: 20,
    renderByPixels: !('ontouchstart' in document),
    alwaysShowTracks: false,
    continuousScrolling: true,
};
if (screen.width >= 1024 && !navigator.userAgent.includes('Firefox') && !navigator.userAgent.includes('iPad')){
    $('body').css({'height':'6000px'});
    Scrollbar.init(document.querySelector('.my-scrollbar'));
  }
$(document).ready(()=>{
    $('body').addClass('iosDevice')
    var scrollCount = 0 ;
    if(!navigator.userAgent.includes('Firefox')){
        setTimeout(()=>{
            document.getElementsByClassName("my-scrollbar")[0].addEventListener("wheel", (e)=>{
                if(scrollCount >= 0){
                    if(e.deltaY < 100){
                        scrollCount+=e.deltaY;
                    }else if(e.deltaY === 100){
                        scrollCount+=100
                    }
                    else if(e.deltaY < 0){
                        scrollCount-=100;
                    }
                }else{
                    scrollCount = 0 
                }
                if (screen.width >= 1024 && !_iOSDevice){
                    window.scroll(0, scrollCount);
                    console.log( window.pageYOffset)
                }
                scrollCount >= 100 ? (navbar.style.backgroundColor = "#af7800d4" , navTogglre.style.color = "#000") : 
                (navbar.style.backgroundColor = 'transparent', navTogglre.style.color = "goldenrod");

                if(scrollCount < 100 && navbar_collapse.classList.contains('show')){
                    navbar.style.backgroundColor = "#af7800d4";
                    navTogglre.style.color = "#000"
                }
            });
            // navigator.userAgent.includes('Firefox')
            
            if(window.innerWidth >= 1024 && !navigator.userAgent.includes('iPad')){
                $('.my-scrollbar').css({
                    'position': 'fixed',
                    'top': '0',
                    'right': '0',
                    'bottom': '0',
                    'left': '0',
                })
            }
        })
    }
})

var profileInpp = document.getElementsByClassName('fileProf')[0]
$('.profile-upload-button').on('click',()=>{
    profileInpp.click()
})
profileInpp.addEventListener('change',(e)=>{
    $('.profile-input-placeholder').text(e.target.files[0].name);
    $('.profile-input-placeholder').css('color','#fff')
})