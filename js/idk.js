
// LOAD PAGE
var loadpage;
function LoadSite() {
    loadpage = setTimeout(showPage, 100);
}
function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("in-loader").style.display = "block";
}

// COPY IP SERVER  (DISABLED)
// function IPSever() {
//     var copyText = document.getElementById("ServerIP");
//     copyText.select();
//     copyText.setSelectionRange(0, 99999);    // mobile device
//     // COPY TEXT INSIDE TEXTFIELD
//     navigator.clipboard.writeText(copyText.value);

//     var tooltip = document.getElementById("Tooltip");
//     // tooltip.innerHTML = "Copied: " + copyText.value;  ---- default tip value
//     tooltip.innerHTML = "Đã copy:" + "<br>" + copyText.value;
//     document.getElementById('nexttext').innerText = "Nhưng vẫn không béo bằng mẹ mình:)";
//     document.getElementById('nexttext').style.transition = "1s";
// }

// function outFunc() {
//     var tooltip = document.getElementById("Tooltip");
//     tooltip.innerHTML = "Copy to clipboard";
// }

// MENU RIGHTCLICK
document.onclick = hideMenu;
document.oncontextmenu = rightClick;
function hideMenu() {
    document.getElementById("contextMenu").style.display = "none"
}
function rightClick(e) {
    e.preventDefault();
    if (
        document.getElementById("contextMenu").style.display == "block"
    )
        hideMenu();
    else {
        var menu = document.getElementById("contextMenu")
        menu.style.display = 'block';
        menu.style.left = e.pageX + "px";
        menu.style.top = e.pageY + "px";
    }
}

// PREVENT CTRL
var isNS = (navigator.appName == "Netscape") ? 1 : 0;

if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

function mischandler() {
    return false;
}

function mousehandler(e) {
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if ((eventbutton == 2) || (eventbutton == 3)) return false;
}
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
var isCtrl = false;
document.onkeyup = function (e) {
    if (e.which == 17)
        isCtrl = false;
}

document.onkeydown = function (e) {
    if (e.which == 17)
        isCtrl = true;
    if (((e.which == 85) || (e.which == 117) || (e.which == 65) || (e.which == 97) || (e.which == 67) || (e.which == 99)) && isCtrl == true) {
        console.log('NO Shortcut key HERE LOL');
        return false;
    }
}

// DISABLE RIGHT CLICK
document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function (e) {
    // DISABLE F12 KEY
    if (e.keyCode == 123) {
        return false;
    }
    // DISABLE I KEY
    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        return false;
    }
    // DISABLE J KEY
    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        return false;
    }
    // DISABLE U KEY
    if (e.ctrlKey && e.keyCode == 85) {
        return false;
    }
}

// 


// CLOCK
setInterval(myTimer, 0);
function myTimer() {
    const d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
    document.getElementById("clock").style.padding = "none"
}
