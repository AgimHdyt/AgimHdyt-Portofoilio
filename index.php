<?php

require 'kirim.php';

if ( isset($_POST["submit"])) {
    # code...

        //cek apakah data berhasil di input atau tidak
        tambah($_POST);
        
        // if( tambah($_POST) > 0){
        //     echo "<script>
        //             alert('yyy');
        //             document.location.href = 'index.php';
        //         </script>
        //         ";
        // }else{
        //     $erorr = true;
        // }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Aset/fortofolio.css">
    <link rel="stylesheet" href="Aset/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <!--========cursor======-->
    <div class="cursor"></div>
    <div class="cursor1"></div>

    <div id="loading" class="loading">
        <div class="ring">
            NGODING
            <span></span>
        </div>
       
    </div>

    <div class="boxAler">
        <div id="alert" class="alert">
            <span id="p" class="p"></span>
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        </div>
    </div>

    <nav>
        <div class="navbar">
            <div class="logo" onclick="klik()"><i class="fab fa-autoprefixer"></i></div>
            <div class="links">
                <div class="link">
                    <a onclick="currentSlide(1)" class="user-tie"><i class="fas fa-user-tie"></i></a>
                </div>
                <div class="link">
                    <a onclick="currentSlide(2)" class="glasses"><i class="fas fa-glasses"></i></a>
                </div>
                <div class="link">
                    <a onclick="currentSlide(3)" class="phone"><i class="fas fa-phone"></i></a>
                </div>
                <div class="link">
                    <a onclick="currentSlide(4)" class="tas"><i class="fas fa-briefcase"></i></a>
                </div>
            </div>
            <div class="downloadcv">
                <a onclick="myFunction()" class="down"><i class="fas fa-cloud-download-alt"></i></a>
            </div>
        </div>
    </nav>

    <div class="foto">
        <img src="Aset/foto/img.jpg" alt="" srcset="">
        <div class="pro">
            <div class="nama">
                Agim Hdyt
                <span></span>
            </div>
            <div class="nama-satu">
                Developer
            </div>
            <div class="sos">
                <div class="sosmeds">
                    <div class="sosmed">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="sosmed">
                        <a href="facebook.com" target="blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="sosmed">
                        <a href=""><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="sosmed">
                        <a class="instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="sections" class="sections">
        <div id="section" class="section kesatu">
            <h1 class="header">about me</h1>
            <div class="agm-list">
                <div class="agm-sc">
                    15 Yeras 
                </div>
                <div class="agm-sc">
                    Karawang 
                </div>
                <div class="agm-sc">
                    Student
                </div>
            </div>
            <div class="agm-sc-description">
                Agim Hidayat's full name is usually called Agim.
                Living in West Java to be precise in Karawang. 
                Third child of five children. Engaged in programming. 
                Get to know programming since the 10th grade of SMK.
            </div>

            
            <h1 class="service">my service</h1>
            <div class="row">
                <div class="col col-satu">
                    <h2><i class="fas fa-code"></i>
                        <br>
                        Webkit Marker
                    </h2>
                    <p>Able to create a web using html, css, javascript
                        and php also using bootstrap, jquery and codeigniter 4</p>
                </div>
                <div class="col col-dua">
                    <h2><i class="fab fa-android"></i>
                        <br>
                        Android Maker
                    </h2>
                    <p>Just learned android programming
                         and able to make basic level android applications</p>
                </div>
                <div class="col col-tiga">
                    <h2><i class="fas fa-database"></i>
                        <br>
                        Database
                    </h2>
                    <p>Database management uses mysql and can use basic queries
                         such as select, insert, delete, update, join, and others</p>
                </div>
            </div>
        </div>

        <div class="section kedua">
            <div class="ked">
                Web Developer with 10 years of
                experience in designing and developing user interfaces,
                testing, debugging, and training staff
                within eCommerce technologies. Proven 
                ability in optimizing web functionality 
                that improve data retrieval and workflow efficiencies.
            </div>
            <h1 class="headerdua"><i class="fa fa-tachometer-alt"></i> Skills</h1>

            <div class="skil">
                <div class="nm">HTML</div>
                <div class="persen">90%</div>
                <div class="container1">
                <div class="skills html"></div>
                </div>
    
                <div class="nm">CSS</div>
                <div class="persen">80%</div>
                <div class="container1">
                <div class="skills css"></div>
                </div>
    
                <div class="nm">JavaScript</div>
                <div class="persen">65%</div>
                <div class="container1">
                <div class="skills js"></div>
                </div>
    
                <div class="nm">PHP</div>
                <div class="persen">60%</div>
                <div class="container1">
                <div class="skills php"></div>
                </div>
    
                <div class="nm">Java</div>
                <div class="persen">50%</div>
                <div class="container1">
                <div class="skills java"></div>
                </div>
    
                <div class="nm">Android</div>
                <div class="persen">10%</div>
                <div class="container1">
                <div class="skills android"></div>
                </div>
            </div>

            <div class="boxs">
                <div class="box-satu">
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <h4>Education</h4>
                    </div>
                    <p>DARUSSA'ADAH Vocational High School</p>
                    <p class="small">2020 - Now</p>
                    <p>AL-IFADAH Islamic Junior High School</p>
                    <p class="small">2015 - 2018</p>
                    <p>CIKALONG III Elementary School</p>
                    <p class="small">2015 - 2018</p>
                </div>
                <div class="box-dua">
                    <div class="box">
                        <i class="fas fa-briefcase"></i>
                        <h4>Experience</h4>
                    </div>
                    <p>INTERNSHIP at PT. Max Samsta Grup</p>
                    <p class="small">January 2020 - March 2020</p>
                    <p>FINALIS WEB DESIGN COMPETITION at Universitas Kanjuruhan Malang</p>
                    <p class="small">December 2020</p>
                </div>
            </div>
        </div>

        <div class="section ketiga">
            <h1 class="header">contact me</h1>
            <p class="ket">If you have any questions regarding this privacy
                 statement, the practices of this site or your 
                 dealings with me, please do not hesitate to 
                 contact at the above-mentioned address, e-mail
                address or phone number.
            </p>
            <div class="lokasi">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.977808817426!2d107.5467325143107!3d-6.26664866309269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69658ce5326c75%3A0xd13a11a2b252b939!2sJl.%20Syekh%20Masmad%20Cikalong%20Girang%2C%20Cikalong%2C%20Cilamaya%20Wetan%2C%20Kabupaten%20Karawang%2C%20Jawa%20Barat%2041384!5e0!3m2!1sen!2sid!4v1611623106973!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="row">
                <div class="col">
                    <p><i class="far fa-envelope"></i>agymhdyt15@gmail.com</p>
                </div>
                <div class="col">
                   <p><i class="fab fa-whatsapp"></i>+62 857-1776-6367</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><i class="fab fa-facebook"></i>Agim Hdyt</p>
                </div>
                <div class="col">
                   <p><i class="fab fa-instagram"></i>A_gim_Hdyt</p>
                </div>
            </div>

            <h1 class="service">send message</h1>
            <?php $alert; ?>
            
            <form class="form" action="" method="post">
                <!-- <div class="boxAler">
                    <div id="alert" class="alert">
                        <span id="p" class="p"></span>
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    </div>
                </div> -->
                <input id="name" type="text" placeholder="Name" name="nama_pengirim" required autocomplete="off">
                <input id="email" type="text" placeholder="E-mail" name="email" title="Type your e-mail" required autocomplete="off">
                <input id="subject" type="text" placeholder="Subject" name="subject" required autocomplete="off">
                <textarea id="message" placeholder="Masage" name="message" required></textarea>
                <button onclick="myFunction()" class="btnSubmit" type="submit" name="submit">Send Message</button>
                
            </form>
        </div>

        <div class="section keempat">
            <div class="kontainer">
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/1.jpg" alt="">
                        </div>
                        <div class="word">
                        <div class="text">
                            <span class="h3">Green Wall</span>
                            <span class="small">development</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/2.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Grey Orchidey</span>
                                <span class="small">web</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/3.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Green End</span>
                                <span class="small">mobile app</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/4.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Broken Head</span>
                                <span class="small">development</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/5.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Oxyde</span>
                                <span class="small">mobile app</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/6.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Green Yupi</span>
                                <span class="small">web</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kontainer-kecil">
                    <div class="galeru-items">
                        <div class="image">
                            <img src="Aset/foto/7.jpg" alt="">
                        </div>
                        <div class="word">
                            <div class="text">
                                <span class="h3">Emerland</span>
                                <span class="small">web</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="footer">
        Agim Hidayat © 2021 | All Rights Reserved
    </div>
    <!-- <script>
        var info = document.getElementById('p');
        var alertt = document.getElementById('alert');
        function respon() {
            alertt.style.display = 'block';
            info.innerHTML = 'Message sent! Thank you for contacting us..';
            // document.location.href = 'index.php';

            setTimeout(() => {
                alertt.style.display = 'none';
            }, 2000);
        }
    
    </script> -->
    <script>
        var bleep = new Audio();
        let aAudio = document.querySelectorAll("a");
        aAudio.forEach(audio => {
            audio.addEventListener("mousedown", () => {
                bleep.src = "Aset/button.mp3";
                bleep.play();
            });
        });
    </script>
    
  
    <script src="Aset/fortofolio.js"></script>
</body>
</html>