var page = 0; 

function updatePage(){
    var descbox = document.getElementById("textpaster");

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            descbox.innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "php/issue-1/" + page + ".php", true);
    xmlhttp.send();
}