
const buyBtns = document.querySelectorAll('.js-buy-tickets')
const modal = document.querySelector('.js-modal')
const modalContainer = document.querySelector('.js-modal-container')
const modalClose = document.querySelector('.js-modal-close')
//Hàm hiển thị form modal mua vé (nguyên lí là thêm class open modal)
function showBuytickets() {
    modal.classList.add('open')
}
//Hàm ẩn form modal mua vé(ẩn class open modal)
function hideBuytickets() {
    modal.classList.remove('open')
}
//nghe hành vi click 
modalClose.addEventListener('click', hideBuytickets)
for (const buyBtn of buyBtns) {
    buyBtn.addEventListener('click', showBuytickets)
}
modal.addEventListener('click', hideBuytickets)
modalContainer.addEventListener('click', function(event) {
    event.stopPropagation()
})
//Đóng/mở tab menu
var mobileMenu = document.getElementById('menu-icon-btn');
var header = document.getElementById('header');
mobileMenu.onclick = function() {
    var isClosed = header.clientHeight === 46;
    if (isClosed) {
        header.style.height = 'auto';
    } else {
        header.style.height = '46px';
    }
}
// Tự động ẩn tab menu khi lựa chọn
var menuItems = document.querySelectorAll('.nav li a[href*="#"]');
for (var i = 0; i < menuItems.length; i++) {
    var menuItem = menuItems[i];

    menuItem.onclick = function(event) {
        var MoreMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
        if (!MoreMenu) {
            header.style.height = '46px';
        } else {
            event.preventDefault();
        }
    }
}
