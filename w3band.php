<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="band.css">
    <title>Hinas_band</title>
    <!-- hình ảnh icon ở tên trang -->
    <link rel="icon" href="./image/avatar.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="./fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./messages-css.css">
</head>


<body>
    <div id="toast"></div>
    <title>messages</title>
    <div class="main">
        <div id="header">
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">
                        More
                        <i class="nav-icon ti-angle-down"></i>
                    </a>
                    <ul class="subnav">
                        <li><a href="#">Merrchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </li>
            </ul>
            <div class="search">
                <i class="search-icon ti-search"></i>
            </div>
            <div id="menu-icon-btn">
                <i class="menu-icon ti-align-justify"></i>
            </div>
        </div>

        <div class="slider">
            <div class="text">
                <div class="text-heading">Hinas_band</div>
                <div class="text-bottom">No. 1 boy group in the world</div>
            </div>
        </div>
        <div class="content">
            <div class="content-section" id="band">
                <h2 class="section-heading">THE BAND</h2>
                <p class="section-sub-heading">We love music</p>
                <p class="about-text">Lunar New Year Festival often falls between late January and early February; it is
                    among the most important holidays in Vietnam. Officially, the festival includes the 1st, 2nd, and
                    3rd day in Lunar Calendar; however, Vietnamese people
                    often spend nearly a month celebrating this special event.</p>
                <div class="member-list">
                    <div class="member-item">
                        <p class="member-name">Doraemon</p>
                        <a href="https://vi.wikipedia.org/wiki/Doraemon"><img src="./image/avatar.jpg" alt="Name"
                                class="member-img"></a>
                    </div>
                    <div class="member-item">
                        <p class="member-name">Nobita</p>
                        <a href="https://vi.wikipedia.org/wiki/Nobi_Nobita"> <img src="./image/nobita.jfif" alt="Name"
                                class="member-img"></a>
                    </div>
                    <div class="member-item">
                        <p class="member-name">Shizuka</p>
                        <a href="https://vi.wikipedia.org/wiki/Minamoto_Shizuka"> <img src="./image/shizuka.jfif"
                                alt="Name" class="member-img"></a>
                    </div>
                </div>
            </div>
            <!-- tour dates -->
            <div id="tour" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">TOUR DATES</h2>
                    <p class="section-sub-heading text-white">Remember to book your tickets!</p>
                    <!-- Tickets -->
                    <ul class="tickets-list ">
                        <li>September <span class="sold-out">Sold-out</span></li>
                        <li>October <span class="sold-out">Sold-out</span></li>
                        <li>November <span class="quanlity">3</span></li>
                    </ul>
                    <!-- Places -->
                    <div class="places-list  ">
                        <div class="places-item js-buy-tickets">
                            <img src="./image/tickets-1.jpg" alt="Tokyo" class="places-img">
                            <div class="places-content">
                                <h3 class="places-heading ">Tokyo</h3>
                                <p class="places-time">Sunday 30 June 2023</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="places-buy-btn js-buy-tickets mobile-col-full ">Buy Tickets</button>
                            </div>
                        </div>
                        <div class="places-item js-buy-tickets">
                            <img src="./image/osaka.jfif" alt="Tokyo" class="places-img">
                            <div class="places-content">
                                <h3 class="places-heading">Osaka</h3>
                                <p class="places-time">June 30 Nov 2023</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="places-buy-btn js-buy-tickets mobile-col-full ">Buy Tickets</button>
                            </div>

                        </div>
                        <div class="places-item js-buy-tickets">
                            <img src="./image/kyoto.jfif" alt="Tokyo" class="places-img">
                            <div class="places-content">
                                <h3 class="places-heading">Kyoto</h3>
                                <p class="places-time">June 30 Nov 2023</p>
                                <p class="places-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="places-buy-btn js-buy-tickets mobile-col-full ">Buy Tickets</button>
                            </div>
                        </div>
                        <div class="clean"></div>
                    </div>
                </div>
            </div>
            <!-- contact  section -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT</h2>
                <p class="section-sub-heading">Fan? Drop a note!</p>
                <div class="row contact-content">
                    <div class="col col-half mobile-col-full contact-info">
                        <p><i class="contact-info-icon ti-location-pin"></i>Chicago, US</p>
                        <p><i class="contact-info-icon ti-mobile"></i> Phone:+00 151515</p>
                        <p><i class="contact-info-icon ti-email"></i>Email: mail@mail.com</p>
                    </div>
                    <div class="col col-half mobile-col-full contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half mobile-col-full mobile-mt-8 ">
                                    <input type="text" placeholder="Name" required class="form-coltrol">
                                </div>
                                <div class="col col-half mobile-col-full mobile-mt-8 ">
                                    <input type="email" placeholder="Email" required class="form-coltrol">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-full mt-8">
                                    <input type="text" placeholder="Message" required class="form-coltrol">
                                </div>
                            </div>
                            <input class="form-submit mt-16 mobile-col-full" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img class="map" src="./image/map-btn.jpg" alt="Address">
        </div>
        <div class="footer">
            <div class="socials-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-pinterest-alt"></i></a>
                <a href=""><i class="ti-twitter-alt"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
                <a href=""><i class="ti-youtube"></i></a>
            </div>
            <p class="copyright">Powered by <a href="">w3.css</a></p>
        </div>
    </div>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close-icon js-modal-close ti-close"></div>
            <header class="modal-header">
                <i class="modal-heading-icon ti-bag"></i> Tickets
            </header>

            <div class="modal-body">
                <!-- FOR trong label giúp khi kick vô label 
			giúp khi người dùng nhấn vô label thì trang sẽ dẫn người dùng đến input!-->

                <form action="" method="post">
                    <label for="number" class="modal-label">
                        <i class="modal-icon ti-shopping-cart"></i>
                        Tickets, $15 per person
                    </label>

                    <input name="number" id="number" type="number" class="modal-input" placeholder="How many?">


                    <label for="email" class="modal-label">
                        <i class="modal-icon ti-user"></i>
                        Send To
                    </label>
                    <input name="email" id="email" type="email" class="modal-input" placeholder="Enter email">


                    <botton class="buy-tickets" onclick="hideBuytickets(); showSuccessToast();">
                        Pay
                        <i class="ti-check"></i>
                    </botton>
                </form>
            </div>
            <footer class="modal-footer">
                <p class="modal-help">Need <a href="#" class="modal-help">help?</a></p>
            </footer>
        </div>
    </div>
    <script>
    const buyBtns = document.querySelectorAll('.js-buy-tickets')
    const modal = document.querySelector('.js-modal')
    const modalContainer = document.querySelector('.js-modal-container')
    const modalClose = document.querySelector('.js-modal-close')

    function success() {
        alert('Congratulations, your payment was successful!');
    }
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

    function showWarningToast() {
        toast({
            title: "Cảnh báo!",
            message: "Cảnh báo có sẽ có rủi ro khi bạn vẫn muốn đăng ki tài khoản.",
            type: "warning",
            duration: 5000
        }); //object
    }

    function showSuccessToast() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đăng ký thành công tài khoản tại F8.",
            type: "success",
            duration: 5000
        }); //object
    }

    function showInfoToast() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đăng ký thành công tài khoản tại F8.",
            type: "info",
            duration: 5000
        }); //object
    }

    function showErrorToast() {
        toast({
            title: "Thất bại!",
            message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
            type: "error",
            duration: 5000
        });
    }
    // Toast function
    function toast({
        title = "",
        message = "",
        type = "info",
        duration = 3000
    }) {
        const main = document.getElementById("toast");
        if (main) {
            const toast = document.createElement("div");

            // Auto remove toast
            const autoRemoveId = setTimeout(function() {
                main.removeChild(toast);
            }, duration + 1000);

            // Remove toast when clicked
            toast.onclick = function(e) {
                if (e.target.closest(".toast__close")) {
                    main.removeChild(toast);
                    clearTimeout(autoRemoveId);
                }
            };

            const icons = {
                success: "fas fa-check-circle",
                info: "fas fa-info-circle",
                warning: "fas fa-exclamation-circle",
                error: "fas fa-exclamation-circle"
            };
            const icon = icons[type];
            const delay = (duration / 1000).toFixed(2);

            toast.classList.add("toast", `toast--${type}`);
            toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

            toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
            main.appendChild(toast);
        }
    }
    </script>

</body>

</html>