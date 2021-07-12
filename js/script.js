var counter1 = document.querySelector(".counting1")
var counter2 = document.querySelector(".counting2")
var counter3 = document.querySelector(".counting3")

let count1 = 1;
let count2 = 1;
let count3 = 1;

setInterval(() =>{
    if (count1 < 255){
        count1++;
        counter1.innerText = count1;
    }
    if (count2 < 142){
        count2++;
        counter2.innerText = count2;
    }
    if (count3 < 63){
        count3++;
        counter3.innerText = count3;
    } 
},1)

$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
});

function openFormdonor() {
    document.getElementById("myFormdonor").style.display = "block";
}

function closeFormdonor() {
    document.getElementById("myFormdonor").style.display = "none";
}
function openFormreceiver() {
    document.getElementById("myFormreceiver").style.display = "block";
}

function closeFormreceiver() {
    document.getElementById("myFormreceiver").style.display = "none";
}