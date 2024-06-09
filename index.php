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
                                for ($i=1; $i < 9; $i++) {  
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

    <!-- <section class="section" id="about">
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
    </section> -->

    <!-- ***** Founder Area Ends ***** -->
    <section class="section" id="chefs">
        
        <div class="container">
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
    </section>


    <?php include_once __DIR__."/template/footer.php"; ?>
