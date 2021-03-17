<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
            <link rel="stylesheet" href="dist/css/bootstrap.min.css">

            <title>All About Burger</title>
    </head>
    <style type="text/css">
        html{
            scroll-behavior: smooth;
        }
        section{
            padding: 60px 0px;
        }

        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
        }
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: grey;
            opacity: 0.7;
            color: black;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            transpa
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
    <body style="background-color: #7f1422">
    <button onclick="topFunction()" id="myBtn" title="Go to top">HOME</button>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: #7f1422">
            <a class="navbar-brand" href="#">ALL ABOUT BURGER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Bahan-Bahan">Bahan-Bahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#etimologi">Etimologi</a>
                    </li>
                </ul>                
            </div>
        </nav>
        <div class="container-fluid">   

            <section id="home">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/b1.jpg" class="d-block w-100" alt="..." style="height: 670px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Beef Burger</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/b7.jpg" class="d-block w-100" alt="..." style="height: 670px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Beef Burger Deluxe</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/b6.jpg" class="d-block w-100" alt="..." style="height: 670px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Beff Burger Deluxe Full With Tomato with opens</h1>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            </section>

             <section id="gallery" style="height: 100vh">
                <div class="col-md-12 mx-auto text-center">
                            <h1 style="color: white">Gallery</h1>
                        </div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/b8.jpg" class="d-block w-100" alt="..." style="height: 670px">
                    </div>
                    <div class="carousel-item">
                        <img src="img/b9.jpg" class="d-block w-100" alt="..." style="height: 670px">
                    </div>
                    <div class="carousel-item">
                         <img src="img/b10.jpg" class="d-block w-100" alt="..." style="height: 670px">
                    </div>
                </div>
                      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </section>  

            <div style="background-color: white height:100px">
            <div style="background-image: bg3.jpg">
            <section id="Bahan-Bahan" style="padding: 0 height:100vh">

                <div class="container">

      
                        <div class="col-md-8 mx-auto my-5 text-center">
                            <h1 style="color: white">Bahan Utama Pembuatan Burger</h1>
                        </div>
 
                </div>

                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                <thead>
                <tr>
                    <th>
                    <div class="card">
                        <div style="">
                            <img src="img/daging.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Daging Sapi</h5>
                            <p class="card-text">Daging yang diolah dengan cara dicincang dan lalu dibentuk menjadi lingkaran dan lalu didiamkan di lemari pendingin agar awet </p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <div style="">
                            <img src="img/selada-keriting.png" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Selada</h5>
                            <p class="card-text">Selada atau daun sla (Lactuca sativa) adalah tumbuhan sayur yang biasa ditanam di daerah beriklim sedang maupun daerah tropika.</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="img/keju.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Keju</h5>
                            <p class="card-text">Keju adalah sebuah makanan yang dihasilkan dengan memisahkan zat-zat padat dalam susu melalui proses pengentalan atau koagulasi</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="img/mayo.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Mayones</h5>
                            <p class="card-text">Mayones (bahasa Inggris: mayonnaise) adalah salah satu jenis saus yang dibuat dari bahan utama minyak nabati, telur ayam dan cuka.</p>
                            
                        </div>
                    </div>
                    </th>
                    <th>
                    <div class="card">
                        <img src="img/roti.jpg" class="d-block w-100" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Roti Burger</h5>
                            <p class="card-text">Roti burger mempunyai tampilan bentuk yang unik dan bulat serta terdapat taburan biji wijen di bagian permukaan roti tersebut.</p>
                            
                        </div>
                    </div>
                    </th>
                </tr>
              </table>
              </div>
            </section>
            

           <section id="sejarah" style="background-image: url('img/b2.jpg'); height: 100vh; background-attachment: fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto text-center">
                            <div style="text-align: center; color: white">
                            <h1>Sejarah Burger</h1>
                            <h5>Hamburger (atau sering kali disebut dengan burger) adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombay. Sebagai sausnya, burger diberi berbagai jenis saus seperti mayones, saus tomat dan sambal serta mustard. Beberapa varian burger juga dilengkapi dengan keju, asinan, serta bahan pelengkap lain seperti sosis dan ham.</h5>
                            <h5>Banyak orang keliru dan mengira bahwa nama Hamburger berasal dari kata "Ham", namun sebenarnya namanya berasal dari kota Hamburg di Jerman, tempat makanan ini berasal. Dari kota kedua terbesar di Jerman ini banyak penduduknya yang beremigrasi ke Amerika dan menyebarkan pembuatan burger ke sana. Hanyalah sebuah kebetulan bahwa kata "ham" yang dalam bahasa Inggris berarti daging asap memiliki bunyi yang hampir serupa dengan Hamburger, faktanya hamburger tidak mengandung Ham (meskipun ada juga restoran yang menambahkan irisan Ham pada burger mereka untuk menambah cita rasa)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="etimologi" style="background-image: url('img/b4.jpg'); height: 100vh; background-size: cover; background-attachment: fixed;">

                        <div calss="container">
                            <div class="row">
                                <div class="col-md-9 mx-auto text-center">
                                    <div style="text-align: center; color: white;">
                                     <h1>Etimologi Burger</h1>
                                    <h5>Banyak orang keliru dan mengira bahwa nama Hamburger berasal dari kata "Ham", namun sebenarnya namanya berasal dari kota Hamburg di Jerman, tempat makanan ini berasal. Dari kota kedua terbesar di Jerman ini banyak penduduknya yang beremigrasi ke Amerika dan menyebarkan pembuatan burger ke sana. Hanyalah sebuah kebetulan bahwa kata "ham" yang dalam bahasa Inggris berarti daging asap memiliki bunyi yang hampir serupa dengan Hamburger, faktanya hamburger tidak mengandung Ham (meskipun ada juga restoran yang menambahkan irisan Ham pada burger mereka untuk menambah cita rasa).</h5>
                                    <h5>Jadi secara harafiah dapat disimpulkan bahwa arti kata Hamburger berarti "makanan yang berasal dari Hamburg" dan bukan berarti "makanan yang mengandung Ham". Namun pada praktiknya burger atau hamburger lebih sering diartikan sebagai sandwich atau jenis roti isi lainnya yang berbentuk bulat. Dalam masyarakat kata burger sudah lebih melekat sebagai jenis makanannya daripada asal muasal dan pencipta dari burger.</h5>
                                </div>
                                </div>                       
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </section>


    <footer class="bg-light text-center text-lg-start ">
  
      <div class="container p-4">

        <div class="row">

          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Burger</h5>

            <p>
              Website ini dibuat untuk memberikan informasi tetang burger. Yang dimulai dari sejarah hingga seluk beluknya kenapa burger itu diciptakan. Dan bagaimana makanan itu bisa disebut menjadi burger pada saat itu. Dan dimana burger itu diciptakan hingga bisa ada sampai saat ini.
            </p>
          </div>
          

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Nama</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Muhammad Farhan</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Indra Pathurohman</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Sandi Maulana</a>
              </li>
            </ul>
          </div>
 
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">NPM</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-dark">5520119084</a>
              </li>
              <li>
                <a href="#!" class="text-dark">5520119090</a>
              </li>
              <li>
                <a href="#!" class="text-dark">5520119086</a>
              </li>
            </ul>
          </div>
       
        </div>
   
      </div>
    
      <div class="text-center p-3 text-light" style="background-color: #7f1422;">
        © 2021 Copyright:
        <a class="text-light" href="https://mdbootstrap.com/">Allaboutburger.com</a>
      </div>

    </footer>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
 </div>
    </body>
</html>
