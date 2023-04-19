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
// TURN OFF RIGHT CLICK
document.addEventListener('contextmenu', event => event.preventDefault());

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
        window.alert('Định làm j vậy cu?')
        return false;
    }
}