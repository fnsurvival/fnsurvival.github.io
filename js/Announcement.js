function load(){
    // tạo khung
    const MotherBox = document.createElement('div')
    MotherBox.classList = 'Important-announcement amargin'
    MotherBox.id = 'AnnouncementBox'
    document.body.appendChild(MotherBox)
    // tạo đầu
    const Header = document.createElement('div')
    Header.classList = 'Header-annoucement center-text'
    MotherBox.appendChild(Header)
    // thông báo đầu
    const p1 = document.createElement('p')
    p1.textContent = 'Đây là tin nhắn tự động'
    Header.appendChild(p1)
    // tạo thân
    const Body = document.createElement('div')
    Body.className = 'Body-annoucement'
    MotherBox.appendChild(Body)
    // thông báo thân
    const p2 = document.createElement('p')
    p2.textContent = 'Máy phát hiện bạn đang sử dụng Adblock. Chúng tôi yêu cầu bạn tắt Adblock để gia đình bạn có thể sống trong hòa bình và tiếp tục cuộc hành trình của bạn💀.'
    p2.style.color = 'rgba(0, 255, 0, 0.678)'
    Body.appendChild(p2)
    // kết
    const footer = document.createElement('div')
    footer.className = 'footer-annoucement'
    MotherBox.appendChild(footer)
    // note
    const p3 = document.createElement('p')
    p3.textContent = 'Mong bạn có thể hợp tác cùng chúng tôi'
    footer.appendChild(p3)
}
window.onload = load
