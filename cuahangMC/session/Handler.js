// ===== Live password validation =====
function setupPasswordValidation() {
    const passwordInput = document.getElementById("regInput");
    const letter = document.getElementById("letter");
    const number = document.getElementById("number");
    const special_character = document.getElementById("special_character");
    const length = document.getElementById("length");

    const letterL = document.getElementById("letterL");
    const numberN = document.getElementById("numberN");
    const special_characterS = document.getElementById("special_characterS");
    const lengthL = document.getElementById("lengthL");

    const requirementContainer = document.getElementById("requirment");

    if (!passwordInput || !requirementContainer) return;

    passwordInput.addEventListener("keyup", function () {
        const val = passwordInput.value;

        letter.classList.toggle("valid", /[A-Z]/.test(val));
        letter.classList.toggle("invalid", !/[A-Z]/.test(val));

        number.classList.toggle("valid", /\d/.test(val));
        number.classList.toggle("invalid", !/\d/.test(val));

        special_character.classList.toggle("valid", /[#?!@$%^&*-]/.test(val));
        special_character.classList.toggle("invalid", !/[#?!@$%^&*-]/.test(val));

        length.classList.toggle("valid", val.length >= 8 && val.length <= 100);
        length.classList.toggle("invalid", val.length < 8 || val.length > 100);
    });
}

// ===== Signup =====
function initSignup() {
    const form = document.querySelector(".form");
    if (!form) return;

    setupPasswordValidation();

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        const requirementContainer = document.getElementById("requirment");
        const invalidP = requirementContainer.querySelector("p.invalid");

        const username = document.getElementById("nameInput").value.trim();
        if (invalidP) {
            alert("Vui lòng hoàn thành tất cả yêu cầu mật khẩu trước khi đăng ký!");
            return;
        }
        if (username.length < 8 || username.length > 100) {
            alert("Username phải từ 8 đến 100 ký tự");
            return;
        }

        const password = document.getElementById("regInput").value;
        const email = document.getElementById("emailInput").value.trim();
        const device = navigator.platform;
        const browser = navigator.userAgent;
        const location = `${Intl.DateTimeFormat().resolvedOptions().timeZone} (UTC${new Date().toString().match(/GMT([+-]\d{4})/)[1].replace(/(\d{2})(\d{2})/, "$1:$2")})`;

        try {
            const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/register", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password, email, device, browser, location }),
                credentials: "include"
            });

            const data = await res.json();
            if (res.ok && data.success) {
                alert("Đăng ký thành công! 🎉");
                window.location.href = "login.html";
            } else {
                alert(data.error || "Đăng ký thất bại");
            }
        } catch (err) {
            alert("Lỗi kết nối: " + err.message);
        }
    });
}

// ===== Login =====
function initLogin() {
    const form = document.querySelector(".form");
    if (!form) return;

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        const username = document.querySelector('input[name="username"]').value.trim();
        const password = document.querySelector('input[name="password"]').value;

        try {
            const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/login", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ username, password }),
                credentials: "include"
            });

            const data = await res.json();
            if (res.ok && data.success) {
                alert("Đăng nhập thành công! ✅");
                window.location.href = "../index.html";
            } else {
                alert(data.error || "Đăng nhập thất bại");
            }
        } catch (err) {
            alert("Lỗi kết nối: " + err.message);
        }
    });
}

async function checkSession() {
    try {
        const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/check-session", {
            method: "GET",
            credentials: "include"
        });
        const data = await res.json();
        return data.loggedIn ? data : null;
    } catch (err) {
        console.error("Lỗi kiểm tra phiên:", err);
        return null;
    }
}

async function logout() {
    try {
        const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/logout", {
            method: "POST",
            credentials: "include"
        });

        const data = await res.json();

        if (data.success) {
            const userInfoDiv = document.getElementById("userInfo");
            if (userInfoDiv) userInfoDiv.innerHTML = `<a href="UI/login">Đăng nhập</a>`;

            window.location.href = "/login";
        } else {
            console.error("Logout thất bại:", data.error);
        }
    } catch (err) {
        console.error("Lỗi logout:", err);
    }
}

async function initTopup() {
  const form = document.querySelector(".thongtinthe");
  if (!form) return;
  
  form.addEventListener("submit", async e => {
    e.preventDefault();
    
    // Lấy và log giá trị
    const card_type = document.getElementById("loaithe").value.trim();
    const card_value = Number(document.getElementById("giatri").value);
    const card_code = document.getElementById("mathe").value.trim();
    const card_serial = document.getElementById("serial").value.trim();

    console.log('Form values:', {
      card_type,
      card_value,
      card_code,
      card_serial
    });

    // Validation
    if (!card_type || card_type === "dcumaychondi") {
      alert("Vui lòng chọn loại thẻ hợp lệ");
      return;
    }

    if (!card_value || card_value <= 0 || isNaN(card_value)) {
      alert("Vui lòng chọn giá trị thẻ hợp lệ");
      return;
    }

    if (!card_code || card_code.length < 6) {
      alert("Mã thẻ phải có ít nhất 6 ký tự");
      return;
    }

    if (!card_serial || card_serial.length < 6) {
      alert("Serial thẻ phải có ít nhất 6 ký tự");
      return;
    }

    // Tạo payload và log
    const payload = {
      card_type,
      card_value,
      card_code,
      card_serial
    };

    console.log('Sending payload:', payload);

    try {
      const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/topup", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        credentials: "include",
        body: JSON.stringify(payload)
      });
      
      console.log('Response status:', res.status);
      
      const data = await res.json();
      console.log('Response data:', data);
      
      if (res.ok && data.success) {
        alert(`Nạp thành công +${data.added} VND`);
        location.reload();
      } else {
        alert("Lỗi: " + (data.error || "Lỗi nạp thẻ"));
      }
    } catch (err) {
      console.error('Fetch error:', err);
      alert("Lỗi kết nối: " + err.message);
    }
  });
}

async function loadUserInfo() {
    try {
        const res = await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/check-session", {
            method: "GET",
            credentials: "include"
        });
        const data = await res.json();

        const userInfoDiv = document.getElementById("userInfo");
        const formatMoney = (amount) => new Intl.NumberFormat('en-US').format(amount);

        if (data.loggedIn) {
            userInfoDiv.innerHTML = `
                <span id="userButton">Xin chào,<span class="dataformdb">${data.username}</span>|<span class="dataformdb">${formatMoney(data.money)}</span>VND &#9662;</span>
                <div id="userDropdown">
                    <a href="#">Thông tin tài khoản</a>
                    <a href="#">Nạp thẻ</a>
                    <a href="#" id="logoutBtn">Đăng xuất</a>
                </div>
            `;

            const userButton = document.getElementById("userButton");
            const dropdown = document.getElementById("userDropdown");

            userButton.addEventListener("click", () => {
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            });

            document.getElementById("logoutBtn").addEventListener("click", async (e) => {
                e.preventDefault();
                await fetch("https://database-fnsurvival.fcapham201.workers.dev/api/logout", {
                    method: "POST",
                    credentials: "include"
                });
                window.location.reload();
            });

            window.addEventListener("click", (e) => {
                if (!userInfoDiv.contains(e.target)) {
                    dropdown.style.display = "none";
                }
            });

        } else {
            userInfoDiv.innerHTML = `<a href="UI/login">Đăng nhập</a>`;
        }
    } catch (err) {
        console.error("Lỗi load user info:", err);
        document.getElementById("userInfo").innerHTML = `<a href="UI/login">Đăng nhập</a>`;
    }
}

// ===== Auto detect page =====
document.addEventListener("DOMContentLoaded", async () => {
    if (location.pathname.includes("signup")) initSignup();
    if (location.pathname.includes("login")) initLogin();
    if (location.pathname.includes("index")) initTopup();

    await loadUserInfo();

    const loggedIn = await checkSession();
    if (loggedIn && (location.pathname.includes("login") || location.pathname.includes("signup"))) {
        window.location.href = "/index.html";
    }
});