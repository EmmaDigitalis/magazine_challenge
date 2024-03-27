//Setup
var page = 1; //sos page value

//Change the value of the Museum Page
function changeMus(changevalue) {
    var current = document.getElementById("item-" + String(page));
    var updated = document.getElementById("item-" + String(page + changevalue));

    if ((changevalue > 0 && page < 4) || (changevalue < 0 && page > 1)) {
        current.style.display = "none";
        updated.style.display = "block";
        page = page + changevalue;
    }
}

//Switch the Flat VS Skeuo Page
function changeFlat(current_id, updated_id) {
    if (current_id == "body-skeuo") {
        document.getElementById(current_id).style.animation = "slide-up-out 1s ease-in-out forwards";
        document.getElementById(updated_id).style.animation = "slide-up-in 1s ease-in-out forwards";
        document.getElementById(updated_id).style.display = "flex";
        setTimeout(function () {
            document.getElementById(current_id).style.display = "none";
        }, 1000);
    } else if (current_id == "body-flat") {
        document.getElementById(current_id).style.animation = "slide-down-out 1s ease-in-out forwards";
        document.getElementById(updated_id).style.animation = "slide-down-in 1s ease-in-out forwards";
        document.getElementById(updated_id).style.display = "flex";
        setTimeout(function () {
            document.getElementById(current_id).style.display = "none";
        }, 1000);
    }
}

//Setup the onscroll transition
function positionPrep() {
    setTimeout(function () {
        window.scrollTo(0, 0);
    }, 1);
}

//Change position of sos page
function changeInterview(updpage) {
    var btncur = document.getElementById("btn-" + String(page));
    var btnupd = document.getElementById("btn-" + String(updpage));
    var pagecur = document.getElementById("sec-" + String(page));
    var pageupd = document.getElementById("sec-" + String(updpage));

    btncur.classList.remove("current");
    btnupd.classList.add("current");

    pagecur.classList.add("hidden");
    pageupd.classList.remove("hidden");

    page = updpage;
}

function pagePrep(pageID, pageCount) {
    document.getElementById(pageID).style.height = "calc(100vh - 1px + " + String(pageCount * 600) + "px";
}

var currentPage = 0;

function positionChange(pageArray) {
    var pages = pageArray;
    var pageAmount = pages.length;
    var item = document.documentElement;
    var scrollPosition = item.scrollTop;

    for (var i = 0; i < pageAmount; i++) {
        if (scrollPosition >= i * 600 && scrollPosition < ((i + 1) * 600)) {
            if (currentPage != i){
                if (currentPage > i) {
                    document.getElementById(pages[i]).style.animation = "slide-down-in 0.5s ease-in-out forwards";
                    document.getElementById(pages[i+1]).style.animation = "slide-down-out 0.5s ease-in-out forwards";
                }else{
                    document.getElementById(pages[i-1]).style.animation = "slide-up-out 0.5s ease-in-out forwards";
                    document.getElementById(pages[i]).style.animation = "slide-up-in 0.5s ease-in-out forwards";
                }
                currentPage = i;
                document.getElementById("page-num").style.backgroundImage = "url('img/haiko/style/ui/page-" + String(i+1) + ".png')";
            }
        }
    }
}