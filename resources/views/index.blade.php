@extends('layout.main')

@section('title', 'Beranda EcoMall')

@section('content')
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mall/css/Home_shop.css') }}">
    <link rel="stylesheet" href="{{ asset('mall/css/style.css') }}">
    @include('includes.header-awal')
</head>
@php
    $main1 = asset('mall/img/main-1.jpeg');
    $main2 = asset('mall/img/main-2.jpg');
    $main3 = asset('mall/img/main-3.jpg');
    $image = [
        asset('mall/img/Green_perks1.png'),
        asset('mall/img/Green_perks2.png'),
        asset('mall/img/Green_perks3.png'),
        asset('mall/img/Green_perks4.png'),
        asset('mall/img/Green_perks5.png'),
        asset('mall/img/Green_perks6.png'),
    ];
    @endphp
<style>
    :root {
  --dark-green: #064E3B;
  --light-green: #65A30D;
  --light-green2: #059669;
  --light-green-bg: #ECFDF5;
  --white: #FFFFFF;
  --light-green-bg2:#DCFCE7;
}


.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--light-green-bg);
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

body {
  background-color: var(--light-green-bg);
}

.landing-page .heading-1 {
  margin-top: 100px;
  margin-bottom: 1rem;
  display: inline-block;
  text-align: center;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 6rem;
  letter-spacing: -0.1rem;
  line-height: 1;
  color: var(--dark-green);
}

.landing-page .subheading-1 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.3;
  color: var(--light-green2);
  text-align: center;
}

.landing-page .heading-text-2 {
  margin-bottom: 2.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: fit-content;
  margin: auto;
}

.landing-page .cta-3 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--white);
  cursor: pointer;
  text-align: center;
  text-decoration: none;
}

.landing-page .cta-button-1 {
  border-radius: 0.5rem;
  background: #65A30D;
  display: flex;
  padding: 1rem 0;
  width: 22.5rem;
  box-sizing: border-box;
  justify-content: center;
}

.landing-page .component-1 {
  margin-top: 4rem;
  margin-bottom: 6.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: fit-content;
  margin: auto;
}

.landing-page .gallery {
  position: relative;
  margin: 0 auto 4.3rem;
  max-width: 78rem; 
  height: 33.8rem;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  padding-left: 1rem;
  box-sizing: border-box;
}

.landing-page .images-container {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}


.main-pic {
  position: absolute;
  top: auto; 
  left: 50%;
  transform: translateX(-50%);
  z-index: 2; 
  border-radius: 1rem;
  background: url('{{ $main1 }}') 50% / cover no-repeat;
  width: 60%; 
  height: 70%;
  box-shadow: 0rem 1rem 3rem 0rem rgba(0, 0, 0, 0.16);
  margin-bottom: 2rem;
}

.beranda-pic1 {
  border-radius: 1rem;
  background: url('{{ $main2 }}') 50% / cover no-repeat;
  margin-right: 16rem;
  height: 24.8rem;
  flex-grow: 1;
  flex-basis: 31rem;
}

.beranda-pic2 {
  border-radius: 1rem;
  background: url('{{ $main3 }}') 50% / cover no-repeat;
  height: 24.8rem;
  flex-grow: 1;
  flex-basis: 31rem;
}


.landing-page .benefit-heading {
  margin-bottom: 0.5rem;
  margin-left: 3rem;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 1.8rem;
  line-height: 1.2;
  color: var(--light-green);
}

.landing-page .heading-2 {
  margin-right: 5.7rem;
  margin-left: 3rem;
  width: 32.8rem;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 3.2rem;
  letter-spacing: -0.1rem;
  line-height: 1.2;
  color: var(--dark-green);
}

.landing-page .desc {
  margin-bottom: 7.8rem;
  display: inline-block;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.3;
  color: var(--light-green2);
}

.landing-page .copy {
  display: flex;
  flex-direction: column; 
  width: 100%;
  box-sizing: border-box;
}

.landing-page .text-content {
  margin: 0 0 1.6rem 0; 
  display: flex;
  flex-direction: column;
  width: 100%;
  box-sizing: border-box;
}

/* Penyesuaian untuk tampilan laptop atau layar yang lebih besar dari 768px */
@media (min-width: 768px) {
  .landing-page .copy {
    flex-direction: row; 
    justify-content: space-between; 
    align-items: flex-start; 
  }
  
  .landing-page .text-content {
    margin-right: 2rem; 
    width: auto; 
  }
  
  .landing-page .heading-2 {
    margin-right: 2rem; 
    width: auto; 
  }
  
  .landing-page .desc {
    margin-bottom: 0;
    width: 40%;
  }
}

/* Mulai  dari Belanja Ramah Lingkungan yang Mulus*/
.landing-page .how-it-works {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 2.4rem;
  letter-spacing: 0rem;
  line-height: 1.18;
  color: var(--dark-green);
  order: -1;
}
.landing-page .heading-text-1 {
  margin-bottom: 2.5rem;
  display: flex;
  flex-direction: column;
  align-self: flex-start;
  box-sizing: border-box;
}
.landing-page .step-title {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--light-green-bg);
}
.landing-page .number {
  border-radius: 3rem;
  background: var(--dark-green);
  margin-bottom: 0.5rem;
  display: flex;
  align-self: flex-start;
  padding: 0.2rem 0.7rem;
  box-sizing: border-box;
}
.landing-page .feature-title {
  margin-bottom: 0.5rem;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--dark-green);
}
.landing-page .step-description {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.5;
  color: var(--light-green2);
}
.landing-page .step {
  margin-right: 3.2rem;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}
.landing-page .step-title-1 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color:var(--light-green-bg);
}
.landing-page .number-1 {
  border-radius: 3rem;
  background: var(--dark-green);
  margin-bottom: 0.5rem;
  display: flex;
  align-self: flex-start;
  padding: 0.2rem 0.7rem;
  box-sizing: border-box;
}
.landing-page .feature-title-1 {
  margin-bottom: 0.5rem;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--dark-green);
}
.landing-page .step-description-1 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.5;
  color: var(--light-green2);
}
.landing-page .step-1 {
  margin: 0 2.9rem 1.3rem 0;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}
.landing-page .step-title-2 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--light-green-bg);
}
.landing-page .number-2 {
  border-radius: 3rem;
  background: var(--dark-green);
  margin-bottom: 0.5rem;
  display: flex;
  align-self: flex-start;
  padding: 0.2rem 0.6rem;
  box-sizing: border-box;
}
.landing-page .feature-title-2 {
  margin-bottom: 0.5rem;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.1rem;
  line-height: 1.4;
  color: var(--dark-green);
}
.landing-page .step-description-2 {
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.5;
  color: var(--light-green2);
}
.landing-page .step-2 {
  margin-bottom: 1.3rem;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}
.how-it-works-grid {
  display: flex;
  flex-direction: row;
  align-self: flex-start;
  width: fit-content;
  box-sizing: border-box;
}
.Seamless {
  background: var(--light-green-bg2);
  position: relative;
  display: flex;
  padding: 2.1rem 0 7rem 4.3rem;
  width: fit-content;
  box-sizing: border-box;
}

/* Why Choose Us */
.heading-container-1 {
  text-align: center;
}

.heading-5 {
  margin-bottom: 0.8rem;
  font-family: 'Playfair Display';
  font-weight: 900;
  font-size: 3.5rem;
  line-height: 1.2;
  color: var(--light-green-bg2);
}

.subheading-3 {
  margin-top: 1rem; 
  margin-bottom: 1rem; 
  overflow-wrap: break-word;
  font-family: 'Lato';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.6;
  color: var(--light-green-bg);
}

.feature-grid-1 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 2.5rem;
}

.feature1,
.feature2,
.feature3,
.feature4,
.feature5,
.feature6 {
  display: flex;
  align-items: center;
  box-sizing: border-box;
  flex-direction:row;
}

.icon1,
.icon2,
.icon3,
.icon4,
.icon5,
.icon6 {
  width: 1.8rem;
  height: 1.8rem;
  margin-right: 1rem;
  margin: 0.2rem 1.2rem 3.1rem 0;
  display: flex;
  box-sizing: border-box;
}

.feature-info1,
.feature-info2,
.feature-info3,
.feature-info4,
.feature-info5,
.feature-info6 {
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}

.feature-title1,
.feature-title2,
.feature-title3,
.feature-title4,
.feature-title5,
.feature-title6 {
  margin-bottom: 0.5rem;
  font-family: 'Lato';
  font-weight: 400;
  font-size: 1.3rem;
  line-height: 1.5;
  color: var(--light-green-bg2);
}

.feature-description1,
.feature-description2,
.feature-description3,
.feature-description4,
.feature-description5,
.feature-description6 {
  overflow-wrap: break-word;
  font-family: 'Lato';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.6;
  color: var(--light-green-bg);
}

.Why-Choose-Us {
  background: var(--dark-green);
  margin-bottom: 1.8rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 3.2rem 2.6rem 3.9rem 2.7rem;
  width: fit-content;
  box-sizing: border-box;
  position: relative;
}

/* easy eco shpping */
.Easy-eco-shopping {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2.1rem;
  padding-left: 3.7rem;
}

.container-1 {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-right: 2.9rem;
}

.image-Easy-eco-shopping {
  border-radius: 50%;
  background: url('{{ asset("mall/img/home-1.jpg") }}') 50% / cover no-repeat;
  width: 8.8rem;
  height: 8.8rem;
  margin-bottom: 0.8rem;
}

.copy-component {
  text-align: center;
}

.heading {
  margin-bottom: 1rem;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 2.4rem;
  color: var(--dark-green);
}

.subheading {
  font-family: 'Inter';
  font-weight: 400;
  font-size: 1.1rem;
  color: var(--light-green2);
}

.container-5 {
  background: var(--light-green-bg2);
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  justify-content: center;
  padding: 0 2.9rem 0 3.9rem;
  width: 42.3rem;
  box-sizing: border-box;
  
}

.container-6,
.container-4 {
  display: flex;
  justify-content: space-between;
  margin-bottom: 2rem;
}

.container-5 .step {
  border-radius: 1rem;
}

.step-eco-shopping {
  margin-bottom: 0.3rem;
  display: inline-block;
  align-self: flex-start;
  overflow-wrap: break-word;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.4rem;
  line-height: 1.3;
  color: var(--dark-green);
}

.step-eco-description {
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  color: var(--light-green2);
  overflow-wrap: break-word;
  line-height: 1.5;
}

/* green perks */
.green-perks {
  background: var(--light-green-bg);
  margin: 0 0.8rem 2.4rem 0;
  padding: 0 3.8rem 1.4rem 3.8rem;
  width: 80rem;
}

.green-perks .heading-container {
  margin-bottom: 2.5rem;
  text-align: center;
}

.green-perks .heading {
  margin-bottom: 0.8rem;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 3.2rem;
  line-height: 1.2;
  color: var(--dark-green);
}

.green-perks .subtitle {
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.5;
  color: var(--light-green2);
}

.green-perks .feature-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2.5rem;
}

.green-perks .feature {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
  width: 22.5rem;
}

.green-perks .copy{
  margin-right: 1.1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: fit-content;
  box-sizing: border-box;
}

.green-perks .image {
  border-radius: 2rem;
  margin-bottom: 1rem;
  width: 22.5rem;
  height: 14rem;
}

.green-perks .title {
  margin-bottom: 0.5rem;
  font-family: 'Inter';
  font-weight: 600;
  font-size: 1.2rem;
  line-height: 1.4;
  text-align: center;
  margin-top: 0.5rem; 
  color: var(--dark-green);
}

.green-perks .description {
  font-family: 'Inter';
  font-weight: 400;
  font-size: 0.9rem;
  line-height: 1.5;
  color: var(--light-green2);
  overflow-wrap: break-word;
}

.green-perks .image-1,
.green-perks .image-2,
.green-perks .image-3,
.green-perks .image-4,
.green-perks .image-5,
.green-perks .image-6 {
  border-radius: 2rem;
  margin-bottom: 1rem;
  width: 22.5rem;
  height: 14rem;
}

.green-perks .image-1 { background: url('{{ $image[0] }}') 50% / cover no-repeat; }
.green-perks .image-2 { background: url('{{ $image[1] }}') 50% / cover no-repeat; }
.green-perks .image-3 { background: url('{{ $image[2] }}') 50% / cover no-repeat; }
.green-perks .image-4 { background: url('{{ $image[3] }}') 50% / cover no-repeat; }
.green-perks .image-5 { background: url('{{ $image[4] }}') 50% / cover no-repeat; }
.green-perks .image-6 { background: url('{{ $image[5] }}') 50% / cover no-repeat; }


@media only screen and (max-width: 768px) {
  .green-perks {
    width: 100%; 
    padding: 0 2rem; 
  }
}

.eco-container {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  margin: 0 0.8rem 2.4rem auto; /* Mengatur jarak kiri menjadi auto */
  padding: 0 3.8rem 1.4rem 3.8rem;
  width: 80rem;
  box-sizing: border-box;
}

.eco-container .eco-heading {
  margin-bottom: 1rem;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 3.2rem;
  letter-spacing: -0.1rem;
  line-height: 1.2;
  color: var(--dark-green);
}

.eco-container .eco-subheading {
  margin-bottom: 2.5rem;
  font-family: 'Inter';
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.3;
  color: var(--light-green2);
}

.eco-container .eco-heading-text {
  margin-right: 2rem;
  display: flex;
  flex-direction: column;
  width: fit-content;
  box-sizing: border-box;
}

.eco-container .shop-now,
.eco-container .learn-more {
  font-family: 'Inter';
  font-weight: 600;
  font-size: 0.9rem;
  line-height: 1.5;
  cursor: pointer;
  text-decoration: none;
  border: none;
  background: none;
  color: var(--dark-green);
}

.eco-container .shop-now:hover,
.eco-container .learn-more:hover {
  text-decoration: underline;
}

.eco-container .button-group {
  display: flex;
  flex-direction: row;
  align-items: center;
  box-sizing: border-box;
}

.eco-container .primary-button,
.eco-container .secondary-button {
  border-radius: 0.5rem;
  width: 18rem;
  box-sizing: border-box;
  margin-top: 1rem;
  text-align: center;
}

.eco-container .primary-button {
  background: var(--light-green);
  padding: 1rem 0;
  margin-right: 1rem;
}
.eco-container .primary-button a{
  text-decoration: none;
  color: var(--white);
}
.eco-container .secondary-button {
  border: 0.2rem solid var(--light-green2);
  border-radius: 0.8rem;
  padding: 0.9rem 0;
  width: 18rem;
  box-sizing: border-box;
  margin-right: 1rem;
}

.eco-container .secondary-button a {
  text-decoration: none;
  color: var(--light-green2);
}

.eco-container .eco-copy {
  margin: 6.7rem 1.2rem 6.7rem 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-sizing: border-box;
}

.eco-container .eco-image {
  border-radius: 3rem;
  background: url('../assets/images/Easy_eco_shopping.png') 50% / cover no-repeat;
  width: 36.9rem;
  height: 25.8rem;
}

@media only screen and (max-width: 768px) {
  .eco-container {
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 0 1.5rem;
  }

  .eco-container .eco-heading-text {
    margin-right: 0;
    margin-bottom: 1.5rem;
    align-items: center;
  }

  .eco-container .eco-image {
    width: 100%;
    height: auto;
    margin-bottom: 2rem;
  }

  .eco-container .button-group {
    flex-direction: column;
    align-items: center;
  }

  .eco-container .primary-button,
  .eco-container .secondary-button {
    width: 100%;
    margin-right: 0;
    margin-top: 1rem;
  }
}

/* Styling for component-1 */
.component-1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px;
    font-size:'Inter';
}

.component-1 .heading-text-2 {
    margin-bottom: 20px;
}

.component-1 .heading-1 {
    font-size: 50px;
    font-weight: bold;
    color: var(--dark-green); /* Ganti dengan warna teks yang sesuai */
}

.component-1 .subheading-1 {
    display: block;
    font-size: 30px;
    color: var(--light-green); /* Ganti dengan warna teks yang sesuai */
}

.component-1 .cta-button-1 {
    margin-top: 20px;
}

.component-1 .cta-3 {
    display: inline-block;
    padding: 10px 20px;
    background-color: var(--light-green2); /* Ganti dengan warna tombol yang sesuai */
    color: #fff; /* Ganti dengan warna teks tombol yang sesuai */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.component-1 .cta-3:hover {
    background-color: var(--dark-green); /* Ganti dengan warna hover tombol yang sesuai */
}

/* Styling for gallery */
.gallery {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.gallery .images-container {
    display: flex;
    justify-content: space-between;
    margin-right: 20px; /* Jarak antara gambar di sebelah kanan */
}

.gallery .beranda-pic1,
.gallery .beranda-pic2 {
    width: 150px; /* Sesuaikan ukuran gambar dengan kebutuhan */
    height: 150px; /* Sesuaikan ukuran gambar dengan kebutuhan */
    background-color: #ccc; /* Ganti dengan warna latar belakang yang sesuai */
    margin-bottom: 20px; /* Jarak antara gambar dengan main pic */
}

.gallery .main-pic {
    width: 300px; /* Sesuaikan ukuran gambar dengan kebutuhan */
    height: 300px; /* Sesuaikan ukuran gambar dengan kebutuhan */
    background-color: #ddd; /* Ganti dengan warna latar belakang yang sesuai */
}

</style>
<div class="component-1">
    <div class="heading-text-2">
        <div class="heading-1">Welcome to EcoMall</div>
        <span class="subheading-1">Green Choices Made Simple</span>
    </div>
    <!-- <div class="cta-button-1">
    <a class="cta-3" href="{{ route('homeShop') }}">Shop</a>
</div> -->

</div>
<!-- 
<div class="gallery">
    <div class="images-container">
        <div class="beranda-pic1"></div>
        <div class="beranda-pic2"></div>
    </div>
    <div class="main-pic"></div>
</div>

<div class="text-content">
    <div class="benefit-heading">Our Green Promise</div>
    <div class="copy">
        <span class="heading-2">Empowering Environmentally Conscious Lives.</span>
        <div class="desc">Join our journey towards sustainability.</div>
    </div>
</div>

<div class="Seamless">
    <div class="heading-text-1">
        <span class="how-it-works">Seamless Eco-Friendly Shopping</span>
    </div>
    <div class="how-it-works-grid">
        <div class="step">
            <div class="number"><span class="step-title">1</span></div>
            <div class="feature-title">Eco Catalog</div>
            <span class="step-description">Browse products that love the planet as much as you do.</span>
        </div>
        <div class="step-1">
            <div class="number-1"><span class="step-title-1">2</span></div>
            <div class="feature-title-1">Eco-Friendly Gifts</div>
            <span class="step-description-1">See the environmental impact of your purchases.</span>
        </div>
        <div class="step-2">
            <div class="number-2"><span class="step-title-2">3</span></div>
            <div class="feature-title-2">Zero Waste Goals</div>
            <span class="step-description-2">Supporting a future of zero waste products.</span>
        </div>
    </div>
</div>
 -->
<div class="Why-Choose-Us">
    <div class="heading-container-1">
        <h2 class="heading-5">Why Choose Us</h2>
        <span class="subheading-3">Our commitment to the planet.</span>
    </div>
    <div class="feature-grid-1">
        <div class="feature1">
            <img class="icon1" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Biodegradable Materials Icon" />
            <div class="feature-info1">
                <h3 class="feature-title1">Biodegradable Materials</h3>
                <p class="feature-description1">Products that leave no trace, crafted for guilt-free utility.</p>
            </div>
        </div>
        <div class="feature2">
            <img class="icon2" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Innovative Designs Icon" />
            <div class="feature-info2">
                <h3 class="feature-title2">Innovative Designs</h3>
                <p class="feature-description2">Stylish yet sustainable options tailored for modern living.</p>
            </div>
        </div>
        <div class="feature3">
            <img class="icon3" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Community Impact Icon" />
            <div class="feature-info3">
                <h3 class="feature-title3">Community Impact</h3>
                <p class="feature-description3">Each purchase supports environmental non-profits worldwide.</p>
            </div>
        </div>
        <div class="feature4">
            <img class="icon4" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Recycled Packaging Icon" />
            <div class="feature-info4">
                <h3 class="feature-title4">Recycled Packaging</h3>
                <p class="feature-description4">We ship with zero waste through recyclable materials.</p>
            </div>
        </div>
        <div class="feature5">
            <img class="icon5" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Glass Straw Sets Icon" />
            <div class="feature-info5">
                <h3 class="feature-title5">Glass Straw Sets</h3>
                <p class="feature-description5">Durable and reusable, for a plastic-free drinking experience.</p>
            </div>
        </div>
        <div class="feature6">
            <img class="icon6" src="{{ asset('mall/vectors/vector_4_x2.svg') }}" alt="Cassava Bags Icon" />
            <div class="feature-info6">
                <h3 class="feature-title6">Cassava Bags</h3>
                <p class="feature-description6">Replace plastic with our compostable cassava-based bags.</p>
            </div>
        </div>
    </div>
</div>

<div class="Easy-eco-shopping">
    <div class="container-1">
        <div class="image-Easy-eco-shopping"></div>
        <div class="copy-component">
            <h2 class="heading">Easy Eco Shopping</h2>
            <p class="subheading">Discover how EcoMall makes sustainability the easy choice.</p>
        </div>
    </div>
    <div class="container-5">
        <div class="container-6">
            <div class="step">
                <h3 class="step-eco-shopping">Select Products</h3>
                <p class="step-eco-description">Choose from a wide range of eco-conscious items.</p>
            </div>
            <div class="step">
                <h3 class="step-eco-shopping">Eco-Friendly Sellers</h3>
                <p class="step-eco-description">We partner with committed eco-friendly brands.</p>
            </div>
        </div>
        <div class="container-4">
            <div class="step">
                <h3 class="step-eco-shopping">Secure Checkout</h3>
                <p class="step-eco-description">Your purchase is safe and planet-positive.</p>
            </div>
            <div class="step">
                <h3 class="step-eco-shopping">Fast Shipping</h3>
                <p class="step-eco-description">Quick delivery with a lower carbon footprint.</p>
            </div>
        </div>
    </div>
</div>

<div class="green-perks">
    <div class="heading-container">
        <h2 class="heading">Green Perks</h2>
        <span class="subtitle">Why Go Green</span>
    </div>
    <div class="feature-grid">
        <div class="feature">
            <div class="image-1"></div>
            <div class="copy">
                <h3 class="title">Natural Materials</h3>
                <p class="description">Made from nature-friendly, renewable substances for least environmental damage.</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-2"></div>
            <div class="copy">
                <h3 class="title">Zero Garbage Aims</h3>
                <p class="description">Working towards a recycle-based economy, cutting down waste and reutilizing materials.</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-3"></div>
            <div class="copy">
                <h3 class="title">Climate Neutral</h3>
                <p class="description">Balancing out emissions to secure a purer, greener earth for future generations.</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-4"></div>
            <div class="copy">
                <h3 class="title">Eco-Friendly Packaging</h3>
                <p class="description">Revolutionary packaging ideas that are completely compostable and degrade naturally.</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-5"></div>
            <div class="copy">
                <h3 class="title">Supporting Communities</h3>
                <p class="description">Putting resources back into local societies to foster environmental awareness and initiatives.</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-6"></div>
            <div class="copy">
                <h3 class="title">Green Technology</h3>
                <p class="description">Using modern tech to boost sustainability and lessen ecological impacts.</p>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('mall/js/script.js') }}"></script>
@endsection
