
function payment() {
    alert("Thanh toán thành công");
}







// banner
var slides = document.querySelectorAll('.changeSlide img');
var length = document.getElementsByClassName("slide")[0].clientWidth;
var changeSlide = document.getElementsByClassName("changeSlide")[0];
var img = changeSlide.getElementsByTagName("img");
var dots = document.querySelectorAll('.dot');
var max = length * img.length;
var currentSlide = 0;
max = max - length;
var change = 0;

function next() {
    // đổi slide 
    if (change < max) change = change + length;
    else
        change = 0;
    changeSlide.style.marginLeft = '-' + change + 'px';

    // đổi nút hiển thị slide
    if (currentSlide == slides.length - 1) {
        currentSlide = 0;
    } else {
        currentSlide++;
    }
    document.querySelector('.dot.current').classList.remove('current');
    dots[currentSlide].classList.add('current');
}

function back() {
    if (change == 0)
        change = max;
    else
        change = change - length;
    changeSlide.style.marginLeft = '-' + change + 'px';

    if (currentSlide == 0) {
        currentSlide = slide.length - 1;
    } else {
        currentSlide--;
    }
    document.querySelector('.dot.current').classList.remove('current');
    dots[currentSlide].classList.add('current');
}
setInterval(function() {
    next();
}, 3000);

//Tìm kiém
// function timkiem() {
//     var input = document.getElementById("search");
//     var filter = input.value.toUpperCase();
//     var goiy = document.getElementById("goiy");
//     var li = goiy.getElementsByTagName("li");
//     document.getElementById("goiy").style.display = "block";
//     for (var i = 0; i < li.length; i++) {
//         var a = li[i].getElementsByTagName("a")[0];
//         var txtValue = a.textContent || a.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             li[i].style.display = "";
//         } else {
//             li[i].style.display = "none";
//         }
//     }
//     if (filter == "") {
//         document.getElementById("goiy").style.display = "none";
//     }
// }


// -----------------lọc theo giá----------------
// function priceSearch() {
//     var x = document.getElementById('price').value;
//     var y = document.getElementById('price1').value;
//     if (x == '' || y == '') {
//         document.getElementById("poster").style.display = 'none';
//         document.getElementById("banner").style.display = 'none';
//         return 0;
//     }
//     console.log(x);
//     if (x < 0 || y < 0) {
//         alert('nhập số tiền từ 0vnđ');
//         return 0;
//     }
//     if (x > y) {
//         alert('Nhập vào giá trị đầu nhỏ hơn giá trị cuối!!!');
//         return 0;
//     }
//     var arrprice = [
//         3999000, 4700000, 3299000, 4700000, 2899000, 2899000, 1700000, 1800000, 3299000, 4800000, 2999000, 3799000, 2499000, 3650000, 700000, 1700000, 1800000, 3299000, 3299000, 3299000
//     ];

//     for (var i = 0; i < arrprice.length; i++) {
//         document.getElementById(i + 1).style.display = 'none';
//     }
//     document.getElementById('phantrang').style.display = 'none';
//     document.getElementById("poster").style.display = 'none';
//     document.getElementById("banner").style.display = 'none';
//     var t = 0;
//     var temp = [];
//     for (var i = 0; i < arrprice.length; i++) {
//         if (arrprice[i] >= x && arrprice[i] <= y) {
//             temp[t++] = (i + 1);
//         } else if (x == '' && arrprice[i] <= y) {
//             temp[t++] = (i + 1);
//         }
//     }
//     for (var i = 0; i < temp.length; i++) {
//         var j = temp[i];
//         document.getElementById(j).style.display = 'block';
//         if (i > 7) {
//             document.getElementById(j).style.display = "none";
//         }

//     }
//     if (t > 7) {
//         document.getElementById('phantrang1').style.display = "block";
//     }
//     document.getElementById("title1").innerHTML = 'Kết quả tìm kiếm';
//     $('.product-title span').css('top', '-122%');
// }


