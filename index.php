<?php 
$current_page = "index";
include_once __DIR__."/template/header.php"; 

?>


    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>LaobanNusantara</h4>
                            <h6>BY UNCLE OSH</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="contact.php">Grow Together With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <?php
                                for ($i=1; $i < 4; $i++) {  
                                    ?>
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="img-fill">
                                                <img src="assets/images/slide-0<?= $i ?>.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- // Item -->
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Founder Area Starts ***** -->
    <section class="section" id="about">
        <div id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Founder Laoban Nusantara</h6>
                            <h2 style="margin-bottom: -45px;">ALVIN OSH</h2>
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus maxime, repudiandae facere ad exercitationem ea laborum nostrum libero praesentium autem expedita minima iusto atque in commodi! Incidunt nisi inventore praesentium?
                        Sequi, architecto in excepturi et, doloremque iste, consectetur vitae tempora sit hic dicta illum qui. Ratione enim nisi delectus atque modi reprehenderit aspernatur ducimus, ut vero, quod omnis excepturi! Tempora!
                        At vitae rem minus aut quasi placeat praesentium. Quasi fugiat recusandae aliquid ipsam, fugit molestiae provident vel soluta unde ratione incidunt dolores esse repellendus sapiente optio, nemo eum eaque vitae.
                        </p> 
                            
                        <!-- <p>SUDAH SIAP MENCICIP MENU BARU by Uncle Osh, LAOBAN??</p> -->
                        <!-- <div class="row">
                            <div class="col-4">
                                <img src="assets/images/chefs-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/FotoCEO.jpg" alt="Founder" style="width: 325px;" >
                        </div>
                        <div class="down-content">
                            <h4>Alvin Osh</h4>
                            <span>CEO</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

</section>
    <section class="section" id="chefs">
        
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>FOUNDER</h6>
                        <h2>LAOBAN NUSANTARA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/FotoCEO.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>Alvin Osh</h4>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>LAOBAN NUSANTARA</h2>
                    </div>
                    <p>Berawal dari kegelisahan sang owner dan istri yang mencari rasa otentik kopitiam untuk warga lokal, LAO BAN terlahir untuk mengungkap bakat masak terpendam sang owner. 
                        Melalui survei dari Singapura hingga Malaysia, kami menyempurnakan resep makanan, mengolah bumbu non-asli Indonesia tanpa campuran non-halal tentu menjadi tantangan untuk owner LAO BAN dalam perjalanan mencari jati diri.
                        mengolah kelapa hingga menjadi selai kaya, hingga kini masih menjadi andalan para laoban menjadi titik klimaks dalam pencarian jati diri LAO BAN.
                    </p> 
                        
                    <p>hingga pada akhirnya penentuan tgl diputuskan, waktu yg tidak terasa habis untuk merekrut para crew dan tepat pada tgl 20 training pertama bersama 6 crew "babat alas" pun dimulai 3 hari berlalu di hari ke 4 kita memutuskan untuk membuka LAO BAN untuk pertama kali nya. 
                        hari demi hari tidak terasa adrenalin para crew dan owner semakin terguncang bertubi tubi karena derasnya antusias para predator makanan asia.</p> 
                        
                    <p>hujatan, pujian, review buruk, cust langganan sampai hatters bayaran semua menjadikan cambuk untuk LAO BAN terpacu jadi semakin besar dan dikenal banyak orang.
                        sebagai pemanfaat situasi dan pembidik jitu tidak afdol jika LAO BAN mecampakkan platform ig dan tiktok.</p> 
                        
                    <p>perjalanan kisah jatuh bangun warga tiktok yg fyp menjadi kiblat LAO BAN untuk membuat cuplikan cerita singkat proses pendakian kedai ini. semakin fyp semakin banyak orang kepo dan fomo terhadap LAO BAN dan yg akhirnya bisa membuat LAO BAN buka cabang di kota kota besar lainnya.</p>
                        
                    <!-- <p>SUDAH SIAP MENCICIP MENU BARU by Uncle Osh, LAOBAN??</p> -->
                    <!-- <div class="row">
                        <div class="col-4">
                            <img src="assets/images/chefs-01.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-02.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-03.jpg" alt="">
                        </div>
                    </div> -->
                <!-- </div>
        </div> --> -->
    </section>
    <!-- ***** Founder Area Ends ***** -->


    <?php include_once __DIR__."/template/footer.php"; ?>
