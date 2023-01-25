$(function() {
    var path = window.location.href; // Mengambil data URL pada Address bar
    $('nav a').each(function() {
        // Jika URL pada menu ini sama persis dengan path...
        if (this.href === path) {
            // Tambahkan kelas "active" pada menu ini
            $(this).addClass('active');
        }else{
            $(this).removeClass('active')
        }
    });
});

let swiper = new Swiper(".mySwiper", {
    autoplay: true,
});

let swiper1 = new Swiper(".footer-slide", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

