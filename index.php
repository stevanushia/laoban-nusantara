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

<!-- ***** Founder Area Ends ***** -->
<section class="section" id="chefs">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Follow Us on Instagram!</h6>
                    <h2><a href="https://www.instagram.com/laoban.nusantara/" target="_blank" style="color: black; text-decoration: underline !important;">@LAOBAN.NUSANTARA</a></h2> 
                </div>
            </div>
        </div>

        <div class="posterContainer">
            <?php
        // Array of social media links for each poster
        $social_links = [
            1 => [
                'instagram' => 'https://www.instagram.com/p/C8EyHMFpHDT/?igsh=b2QyZDNsd3U4bnhs',
            ],
            2 => [
                'instagram' => 'https://www.instagram.com/p/C0lNzlop6O-/?igsh=cmc4ZnB5OXZrNDlk',

            ],
            3 => [
                'instagram' => 'https://www.instagram.com/p/C2FE8yHJrkx/?igsh=aDBkdmY3ZjYweWcx',

            ],
            4 => [
                'instagram' => 'https://www.instagram.com/p/C3keZJ9pYwq/?igsh=c2w4cHEwY2Exc2Vp',

            ],
            5 => [
                'instagram' => 'https://www.instagram.com/p/CnvayzZpwgv/?igsh=aDN3bWlmOXJwdXk=',

            ],
            6 => [
                'instagram' => 'https://www.instagram.com/p/ColaFufPJof/?igsh=MXZpeGp3amE3bjB6Yw==',

            ],
            7 => [
                'instagram' => 'https://www.instagram.com/p/Cq2nprIJSOO/?igsh=NGhjOW1vYzFtMzFj',

            ],
            8 => [
                'instagram' => 'https://www.instagram.com/p/C8A_x4psdiW/?igsh=MTV3dWxuZ2xxcTB4OA==',

            ],
            9 => [
                'instagram' => 'https://www.instagram.com/p/CpMmWA7JV2M/?igsh=bnMyb2N6bmE1N25l',

            ],
        ];

        for ($i = 1; $i <= 9; $i++) {
            if ($i % 3 == 1) {
                echo '<div class="row" style="margin-bottom: 25px;">';
            }
            ?>
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="<?php echo $social_links[$i]['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <img src="./assets/images/Poster/fotoposter_<?php echo $i; ?>.jpg" alt="Poster <?php echo $i; ?>" loading="lazy">
                    </div>
                </div>
            </div>
            <?php
            if ($i % 3 == 0) {
                echo '</div>';
            }
        }
        ?>
        </div>
    </div>



</section>


<?php include_once __DIR__."/template/footer.php"; ?>