setTimeout(() => {
    const AnnouncementBox = document.getElementById("AnnouncementBox");
    const Body = document.body;
    Body.style.filter = "";
    AnnouncementBox.style.animationName = "FastAnnoucement";
    console.log("Hided AnnouncementBox");
}, 5000);
setTimeout(() => {
    const AnnouncementBox = document.getElementById("AnnouncementBox");
    AnnouncementBox.style.display = "none";
}, 7000);