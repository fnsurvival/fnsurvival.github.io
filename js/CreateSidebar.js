console.log("Loading JS SideBar");
window.onload = CreateSideBar;
function CreateSideBar() {
    // Tạo khung
    const sidebar = document.createElement("div");
    sidebar.className = "sidebar";
    sidebar.id = "sidebar";
    const OutB = document.body;
    OutB.appendChild(sidebar);
    // Tạo khung logo
    const logo = document.createElement("div");
    logo.className = "logo";
    logo.id = "logo";
    sidebar.appendChild(logo);
    // Tạo chữ trong khung logo
    const lg_text = document.createElement("a");
    lg_text.className = "logo-font";
    lg_text.id = "logo-font";
    lg_text.href = "/index";
    lg_text.style.fontFamily = "IntoRrust";
    lg_text.text = "FNSURVIVAL";
    logo.appendChild(lg_text);
    // Tạo khung NAV
    const NavBar = document.createElement("nav");
    sidebar.appendChild(NavBar);
    // Tạo phần tử trong khung NAV
    const content = document.createElement("ul");
    content.className = "mother-content";
    NavBar.appendChild(content);
    // Tạo phần tử li trong ul
    const li_content_1 = document.createElement("li");
    li_content_1.className = "main-content";
    const li_content_2 = document.createElement("li");
    li_content_2.className = "main-content";
    content.appendChild(li_content_1);
    content.appendChild(li_content_2);
    // Tạo phần tử a trong li
    const li_text1 = document.createElement("a");
    li_text1.href = "/caythue/index";
    li_text1.style.color = "green";
    li_text1.text = "Shop Roblox";
    const li_text2 = document.createElement("a");
    li_text2.href = "/ViewMore";
    li_text2.text = "Xêm thêm";
    li_content_1.appendChild(li_text1);
    li_content_2.appendChild(li_text2);
    // Tạo khung icon
    const icon = document.createElement("div");
    icon.className = "icon";
    NavBar.appendChild(icon);
    // Tạo icon
    const i_icon = document.createElement("i");
    i_icon.className = "fas fa-bars";
    icon.appendChild(i_icon);
}
console.log("Loaded JS SideBar")
const sidebarC = document.getElementById("sidebar");
if (sidebarC === true) {
    console.log("JS SideBar still working properly");
    // MENU NAV
    document.addEventListener("DOMContentLoaded",function(){
        var nut = document.querySelector('div.icon i');
        var mobile = document.querySelector('ul');
        nut.addEventListener('click',function(){
            mobile.classList.toggle('active');
        })
    })
} else {
    console.log("Error JS SideBar");
}