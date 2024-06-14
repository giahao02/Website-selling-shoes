function tinhtoan() {
    var ban = document.querySelector('.hide');
    ban.classList.remove('active')
}

function cong() {
    var a = document.getElementById('soa');
    var b = document.getElementById('sob');
    soa = parseInt(a.value);
    sob = parseInt(b.value);
    var k = soa + sob;
    document.querySelector('.kq').value = k;

}

function tru() {
    var a = document.getElementById('soa');
    var b = document.getElementById('sob');
    soa = parseInt(a.value);
    sob = parseInt(b.value);
    var k = soa - sob;
    document.querySelector('.kq').value = k;
}

function check() {
    var check = partent.test(document.getElementById('masv').value);
    if (document.getElementById('masv').value == "") {
        document.getElementById('errormasv').innerText = `chua nhap ma sinh vien kia`;
        return false;
    } else if (document.getElementById('name').value == "") {
        return false;
    } else if (document.getElementById('email').value == "") {
        return false;
    } else if (document.getElementById('dt').value == "") {
        return false;
    }
    if (check == false) {
        alert("Ma sinh vien phai la SV+ 8 ki tu so");
        return false;
    }

    return true;
}

function checkName() {
    if (document.getElementById('masv').value != "") {
        document.getElementById('errormasv').innerText = ``;
    }
}

var partent = /^SV[0-9]{8}$/img;