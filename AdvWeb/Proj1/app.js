function openNav(){
    document.getElementById('mySideNav').style.marginLeft = "0px";
    document.querySelector('section').style.opacity = "0.6";
    document.querySelector('main').style.opacity = "0.6";
    document.querySelector('footer').style.opacity = "0.6";
    document.querySelector('body').style.overflowY = 'hidden';
}

function closeNav(){
    document.getElementById('mySideNav').style.marginLeft = "-300px";
    document.querySelector('body').style.overflowY = 'scroll';
    document.querySelector('section').style.opacity = "1";
    document.querySelector('main').style.opacity = "1";
    document.querySelector('footer').style.opacity = "1";


}