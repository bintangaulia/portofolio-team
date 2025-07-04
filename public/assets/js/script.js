/*==================== toggle icon navbar ====================*/
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

/*==================== scroll sections active link ====================*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });

    /*==================== sticky navbar ====================*/
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    /*==================== remove toggle icon and navbar when click navbar link (scroll) ====================*/
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};


/*==================== scroll reveal ====================*/

ScrollReveal().reveal( '.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal( '.home-img, .services-container, .portofolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal( '.home-content h1, .about-img ', { origin: 'left' });
ScrollReveal().reveal( '.home-content p, .about-content ', { origin: 'right' });

/*==================== typed js ====================*/
const typed = new Typed('.multiple-text', {
    strings: ['<br/>Mahasiswa Informatika', ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    // loop: true
});
const typedd = new Typed('.multiple-textdua', {
    strings: ['<br/>Mas Tehyong KW', ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    // loop: true
});
const typeddd = new Typed('.multiple-texttiga', {
    strings: ['<br/>Mas Paskibra Terbucin', ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    // loop: true
});
const typedddd = new Typed('.multiple-textempat', {
    strings: ['<br/>Penjual Nasgor ', ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    // loop: true
});
const typeddddd = new Typed('.multiple-textlima', {
    strings: ['<br/>Termungil Di Kelompok', ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    // loop: true
});