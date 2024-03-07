

<?php
include "bot.php";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top">
        <a class="navbar-brand" href="#"><span style="color: #645CAA;">Amour Laundry</span><span style="color: #A084CA;">'S</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home" style="color: #645CAA;">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testi" style="color: #645CAA;" >package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Profil" style="color: #645CAA;">service</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- konten -->
      <div class="konten" style="padding-top: 60px;">
      <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-4 text-center" style="padding-top: 120px;">
                    <h2><span style="color: #645CAA;"> Clean Up Here</span></h2>
                    <h6><b><i><span style="color: #645CAA;">make your clothes clean and smell good 24 hours, get a discount for those who have subscribed</span></i></b></h6>
                </div>
                <div class="col-sm-3 col-md-6 col-lg-4">
                    <img src="lau.png" alt="" class="img2">
                    <a class="btn btn-primary" href="login.php" style="background-color: #645CAA; margin-top: 30px; margin-right: 120px;"  role="button">login as officer</a>
                </div>
             <!-- konten 1 -->
                <center><h3 style="padding-top: 80px;"><span style="color: black;">Pelayanan Laundry Terbaik</span></h3></center>
                <section class="testi" id="testi">
    <div class="pricing-section">
        <div class="pricing-container">
            <div class="pricing-ferisp-column">
            <img src="l1.jpg" style="border-radius: 50%;" alt="">
                <div class="pricing-title">Paket A</div>
                <div class="ferisp-price">Harian</div>
                <div class="pricing-tag">Pelayanan Paket A Ada Dibawah</div>
                <div class="service-info">
                <ul>
                  <li>  Cuci Setrika / 1 Hari : Rp. 15.000/Kg</li>
                  <li>Cuci Setrika / 3 Hari : Rp. 10.000/Kg</li>
                  <li>Cuci Setrika / 5 Hari : Rp. 7.000/Kg</li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                </div>
            </div>
            <div class="pricing-ferisp-column">
                <img src="l2.jpg" style="border-radius: 50%;" alt="">
                <div class="pricing-title">Paket B</div>
                <div class="ferisp-price">Express</div>
                <div class="pricing-tag">Pelayanan Paket B Ada Dibawah</div>
                <div class="service-info">
                <ul>
                  <li>Cuci Setrika / 4 Jam : Rp. 30.000/Kg</li>
                  <li>Cuci Setrika / 6 Jam : Rp. 25.000/Kg</li>
                  <li> Cuci Setrika / 12 Jam : Rp. 20.000/Kg</li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                </div>
            </div>
            <div class="pricing-ferisp-column">
            <img src="l3.jpg" style="border-radius: 50%;" alt="">
                <div class="pricing-title">Paket C</div>
                <div class="ferisp-price">Express Malam</div>
                <div class="pricing-tag">Pelayanan Paket C Ada Dibawah</div>
                <div class="service-info">
                <ul>
                  <li>Express Malam Selesai Pagi : Rp. 35.000/Kg</li>
                  <li>Express Malam 4 - 6 Jam : Rp. 40.000/Kg</li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
      <!-- konten 2 -->
       <section class="Profil" id="Profil">
<center> <h3 style="padding-top:30px"><span style="color: black;">Service kami</span></h3></center>
 <div class="container">
      <div class="box">
      <div class="image">
       <img src="">
        </div>
        <p>One Stop Laundry Service Kalau bisa di satu tempat,kenapa harus susah susah ke tempat lain? Busana, Sepatu, Koper, Tas dan item laundry lainnya, mampu kami kerjakan dengan baik</p>
        <div class="btns">
        </div>
      </div>
      <div class="box">
        <div class="image">
       <img src="image/a.jpeg">
        </div>
        <p>GRATIS Antar & JemputKami sadar kalo Anda punya kesibukan setiap harinya. Tak perlu risau. Cukup hubungi kami dan petugas delivery kami akan menjemput dan mengantar cucian Anda. </p>
        <div class="btns">
        </div>
      </div>
      <div class="box">
        <div class="image">
       <img src="aaa.jpg">
        </div>
        <p>bagaimana rasanya ketika cucian anda dicampurkan bersama dengan cucian orang lain? serahkan masalah ini pada kami, karena disini setiap orang akan menggunakan 1 mesin cuci secara terpisah</p>
        <div class="btns">
        </div>
      </div>
    </div>
  <div>
 </div>
</section>

    
<style>
  .footer {
    grid-area: footer;
   
    height: 300px;
}
.faqs-container {
    font-family: "Roboto", sans-serif;
    max-width: 700px;
    margin: 0 auto;
}

.faqs-container .questions-container {
    box-shadow: 0 4px 8px -3px rgba(0, 0, 0, 0.3);
  }
  
  .faqs-container h2 {
    padding: 4px 32px;
    font-size: 28px;
  }
  
  .faqs-container .faq-header {
    display: flex;
    background: #BCCEF8;
    color: black;
    align-items: center;
    position: relative;
    cursor: pointer;
  }
  
  .faqs-container .faq-header .open,
  .faqs-container .faq-header .close {
    position: absolute;
    right: 0;
    padding: 0 32px;
    font-size: 22px;
    font-weight: bold;
    transform: translateY(-8px);
    opacity: 0;
    transition: all 500ms;
  }
  
  .faqs-container .faq-header .open.active,
  .faqs-container .faq-header .close.active {
    opacity: 1;
    transform: translateY(0);
  }
  
  .faqs-container .faq-header h3 {
    font-size: 20px;
    padding: 0 32px;
  }
  
  .faqs-container .content {
    padding: 0 32px;
    background: #fdfffc;
    line-height: 2;
    max-height: 0;
    overflow: hidden;
    transition: all 500ms;
  }
  
  .faqs-container .content.active {
    max-height: 600px;
  }
.pricing-section {font-family:'Google Sans', Arial, sans-serif;position:relative;overflow:hidden;display:block;margin:15px 0;line-height:1.7}
.pricing-section .pricing-title {font-size:1.1rem;margin:1rem 0 0;font-weight:700}
.pricing-container {display:flex;max-width:1000px;margin:0 auto}
.pricing-tag {margin:.5rem 0 1rem;font-size:13px;display:inline-block;background:#333;color:#fff;padding:3px 15px;border-radius:20px}
a.ferisp-order-btn {font-size:14px;text-transform:uppercase;text-decoration:none;background:#333;color:#fff;display:inline-block;padding:7px 20px;border-radius:20px;transition:all .3s ease-in-out}
a.ferisp-order-btn:hover {transform:scale(1.1)}
.pricing-ferisp-column {background:#fff;padding:30px 15px;box-sizing:border-box;border-radius:10px;text-align:center;width:33%;margin:10px;box-shadow:0 7px 7px rgba(0,0,0,0.06);border:2px solid #fff;transition:all .3s ease-in-out}
.pricing-ferisp-column ul {list-style:none;padding:10px 0;margin:0;font-size:14px;line-height:2.2}
.pricing-ferisp-column img {width:50px}
.pricing-section i {font-size:3rem}
.ferisp-price {font-weight:700;font-size:22px}
.service-info {opacity:.7}
.ferisp-2-column .pricing-ferisp-column {width:50%}
.pricing-ferisp-column:nth-child(1) .ferisp-price,.pricing-ferisp-column:nth-child(1) i {color:#f87200}
.pricing-ferisp-column:nth-child(2) .ferisp-price,.pricing-ferisp-column:nth-child(2) i {color:#ff5483}
.pricing-ferisp-column:nth-child(3) .ferisp-price,.pricing-ferisp-column:nth-child(3) i {color:#2b73f6}
.pricing-ferisp-column:nth-child(1):hover {border-color:#f87200}
.pricing-ferisp-column:nth-child(2):hover {border-color:#ff5483}
.pricing-ferisp-column:nth-child(3):hover {border-color:#2b73f6}
.pricing-ferisp-column:nth-child(1) .pricing-tag,.pricing-ferisp-column:nth-child(1) a.ferisp-order-btn {background:#f87200}
.pricing-ferisp-column:nth-child(2) .pricing-tag,.pricing-ferisp-column:nth-child(2) a.ferisp-order-btn {background:#ff5483}
.pricing-ferisp-column:nth-child(3) .pricing-tag,.pricing-ferisp-column:nth-child(3) a.ferisp-order-btn {background:#2b73f6}
@media screen and (max-width:580px) {
  .pricing-ferisp-column, .ferisp-2-column, .pricing-ferisp-column {width:auto}
  .pricing-container {display:block}
}
  

.container{
  max-width: 1100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 20px;
}
.container .box{
  width: calc(33% - 10px);
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px 30px;
  border-radius: 5px;
}
.box .quote i{
margin-top: 10px;
font-size: 45px;
color: #17c0eb;
}
.container .box .image{
  margin: 10px 0;
  height: 150px;
  width: 150px;
  background: #D58BDD;
  padding: 3px;
  border-radius: 50%;
}
.box .image img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #fff;
}
.box p{
  text-align: justify;
  margin-top: 8px;
  font-size: 16px;
  font-weight: 400;
}
.box .name_job{
  margin: 10px 0 3px 0;
  color: #8e44ad;
  font-size: 18px;
  font-weight: 600;
}

@media (max-width:1045px){
  .container .box{
    width: calc(50% - 10px);
    margin-bottom: 20px;
  }
}
@media (max-width:710px){
  .container .box{
    width: 100%;
  }
}
</style>