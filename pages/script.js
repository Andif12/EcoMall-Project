// menambahkan box shadow ketika di scroll
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        navbar.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
    } else {
        navbar.style.boxShadow = 'none';
    }
});

// membuat gambar-gambar tersebut bertukar posisi secara otomatis setiap beberapa detik
// const images = [
//     '../assets/images/main_pic.png',
//     '../assets/images/beranda_pic1.png',
//     '../assets/images/beranda_pic2.png'
// ];
// let index = 0;

// function changeImage() {
//     const mainPic = document.querySelector('.main-pic');
//     const berandaPic1 = document.querySelector('.beranda-pic1');
//     const berandaPic2 = document.querySelector('.beranda-pic2');

//     mainPic.style.backgroundImage = `url(${images[index]})`;
//     berandaPic1.src = images[(index + 1) % images.length];
//     berandaPic2.src = images[(index + 2) % images.length];

//     index = (index + 1) % images.length; // Melakukan perputaran gambar
// }

// setInterval(changeImage, 3000);

  
