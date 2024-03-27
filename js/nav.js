var navpos = 'open';

function navToggle(){
    var navbar = document.getElementById("navbar");

    if (navpos == 'open'){
        navbar.style.bottom = '-96px';
        document.getElementById('openclose').innerHTML = 'Open';
        navpos = 'close';
    }else{
        navbar.style.bottom = '0';
        document.getElementById('openclose').innerHTML = 'Close';
        navpos = 'open';
    }
}

function changePage(loc){
    window.location = loc;
}