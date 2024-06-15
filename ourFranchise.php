<?php 
$current_page = "franchise";
include_once __DIR__."/template/header.php"; ?>

<!-- ***** Franchise Area Starts ***** -->
<style>
    /* Customize the color of the previous and next icons */
    .carousel-control-prev-icon,
.carousel-control-next-icon {
    background-image: none;
    border: none;
}

.carousel-control-prev-icon::after,
.carousel-control-next-icon::after {
    content: '';
    display: inline-block;
    width: 30px;
    height: 30px;
    border-top: 2px solid black;
    border-right: 2px solid black;
}

.carousel-control-prev-icon::after {
    transform: rotate(-135deg);
    margin-left: 5px;
}

.carousel-control-next-icon::after {
    transform: rotate(45deg);
    margin-right: 5px;
}

.carousel-control-prev,
.carousel-control-next {
    background: none;
    border: none;
}


    .carousel-inner {
        height: 100%;
    }

    .carousel-item {
        height: 100%;
    }

    .carousel-item img {
        height: 100%;
        object-fit: contain;
        /* or cover depending on your preference */
    }
</style>


<section class="section" id="menu" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h6>Our Franchise</h6>
                <h2>Kunjungi Lokasi Kami!</h2>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 25px;">
        <div class="col-6 col-md-4">
            <!-- ACCORDION BOOTSTRAP -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <strong>Laoban Kopitiam Suhat, Malang (Pusat)</strong>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126449.96895010203!2d112.54751546940913!3d-7.940776492494127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd6298ddfd73cf5%3A0xbeb5ae954f915c2c!2sJl.%20Soekarno%20Hatta%20Indah%20No.17%2C%20Mojolangu%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065142!3m2!1d-7.9407812!2d112.6299076!5e0!3m2!1sen!2sid!4v1715249968798!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            <strong>Laoban Kopitiam Binus, Malang</strong>
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5510083565127!2d112.6838782!3d-7.941870099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62943bed1ea39%3A0x4481cf517a9ea1c9!2sLaoban%20Kopitiam%20Binus!5e0!3m2!1sid!2sid!4v1718477028539!5m2!1sid!2sid" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong>Laoban Kopitiam Wiyung, Surabaya</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3897877391646!2d112.67776939999999!3d-7.3100325999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd565360e6d9%3A0x1bd8698e8ca3be00!2sLaoban%20Kopitiam%20Wiyung!5e0!3m2!1sid!2sid!4v1718477308162!5m2!1sid!2sid" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Laoban Kopitiam Mulyosari, Surabaya</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126649.16218611828!2d112.71325126214603!3d-7.265141866747921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd7fb0008f1c997%3A0x93bab84f775d7292!2sJl.%20Raya%20Mulyosari%20No.166%2C%20Kalisari%2C%20Kec.%20Mulyorejo%2C%20Surabaya%2C%20Jawa%20Timur!3m2!1d-7.2651493!2d112.79565319999999!5e0!3m2!1sen!2sid!4v1715234013287!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <strong>Laoban Kopitiam Baratajaya, Surabaya</strong>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63318.75355803201!2d112.67742438081147!3d-7.306385131453962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdab3777fc9%3A0x6a5a755769688dbb!2sLaoban%20BarataJaya!5e0!3m2!1sid!2sid!4v1715251413440!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Laoban Kopitiam Denpasar</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126210.40275075895!2d115.14846477814376!3d-8.684409855608326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd241004252ee53%3A0x8091a327d4ce5cd7!2sJl.%20Tukad%20Barito%20Timur%20No.35%2C%20Panjer%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080225!3m2!1d-8.6844187!2d115.23086669999999!5e0!3m2!1sen!2sid!4v1715249073122!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <strong>Laoban Kopitiam Makassar</strong>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.796060437951!2d119.40242207430354!3d-5.136513094840663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbef9ed25af80b3%3A0x5c8593f958b12a25!2sLaoban%20Kopitiam%20Makassar!5e0!3m2!1sid!2sid!4v1715250684171!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <strong>Laoban Kopitiam Tulungagung</strong>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.449416871812!2d111.91348857433319!3d-8.055555391971941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e346f2542d6d%3A0xaacbffb4b29c9a0b!2sLaoban%20Tulungagung!5e0!3m2!1sid!2sid!4v1715251077725!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <strong>Laoban Kopitiam Mojokerto</strong>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506015.55117786763!2d111.84551617518312!3d-7.763663348724788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d128f10cdc3%3A0x378a7ed7b3ae7005!2sLaoban%20Mojokerto!5e0!3m2!1sid!2sid!4v1715251346395!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <strong>Laoban Kopitiam Probolinggo</strong>
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3470045633085!2d113.21211397447304!3d-7.752971172324123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad27bdaf4931%3A0x2e1951e8958401fa!2sLaoban%20Kopitiam%20Probolinggo!5e0!3m2!1sid!2sid!4v1715251644975!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <strong>Laoban Kopitiam Jember</strong>
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505765.19808796817!2d113.11238892118087!3d-7.968888878763804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd691f5fb4671bb%3A0x12a6775d7b0caf73!2sLaoban%20Jember!5e0!3m2!1sid!2sid!4v1715251717665!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <strong>Laoban Kopitiam Bandung</strong>
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4055782.43437704!2d102.72141021249998!3d-6.9234366000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7002fefc4cd%3A0x11fec2012f28e0ea!2sLaoban%20by%20Uncle%20Osh%20Bandung!5e0!3m2!1sid!2sid!4v1715251964321!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            <strong>Laoban Kopitiam Benhill, Jakarta</strong>
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4330315089715!2d106.80642207431285!3d-6.206471893781319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7007bb009bd%3A0xab5fe035c7bae1da!2sLAOBAN%20BENHIL%20by%20Uncle%20Osh!5e0!3m2!1sid!2sid!4v1717483719378!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            <strong>Laoban Kopitiam Tebet, Jakarta Selatan</strong>
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.138548917801!2d106.84896456563716!3d-6.234382728971014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30ad900c765%3A0x3fda54d808fc5622!2sLAOBAN%20TEBET%20by%20Uncle%20Osh!5e0!3m2!1sid!2sid!4v1718476370839!5m2!1sid!2sid" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ACCORDION BOOTSTRAP -->
        </div>

        <div class="col-md-8 rounded-4">
            <div id="carouselExampleAutoplaying" class="carousel slide h-100" data-bs-ride="carousel"
                style="height: 100%;">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <img src="assets/images/outlet/suhat_1.jpg" class="rounded-4 mx-auto d-block w-50 h-100"
                            alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="assets/images/outlet/suhat_2.jpg" class="rounded-4 mx-auto d-block w-50 h-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="rounded carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="rounded carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

    <!-- </div> -->

</section>

<script>
    // Define images for each accordion item
    const images = {
        //Laoban Kopitiam Suhat, Malang (Pusat)
        collapseFour: [
            'assets/images/outlet/suhat_1.jpg',
            'assets/images/outlet/suhat_2.jpg',
        ],
        //Laoban Kopitiam Binus, Malang
        collapseTwelve: [
            'assets/images/outlet/binus_1.jpg',
            'assets/images/outlet/binus_2.jpg',
            'assets/images/outlet/binus_3.jpg',
            'assets/images/outlet/binus_4.jpg',
            'assets/images/outlet/binus_5.jpg',
            'assets/images/outlet/binus_6.jpg',
        ],
        //Laoban Kopitiam Wiyung, Surabaya
        collapseOne: [
            'assets/images/outlet/wiyung_1.png',
            'assets/images/outlet/wiyung_2.png',
            'assets/images/outlet/wiyung_3.png',
            'assets/images/outlet/wiyung_4.png',
        ],
        //Laoban Kopitiam Mulyosari, Surabaya
        collapseTwo: [
            'assets/images/outlet/mulyosari_1.png',
            'assets/images/outlet/mulyosari_2.png',
            'assets/images/outlet/mulyosari_3.png',
            'assets/images/outlet/mulyosari_4.png',
        ],
        //Laoban Kopitiam Baratajaya, Surabaya
        collapseEight: [
            'assets/images/outlet/baratajaya_1.jpg',
            'assets/images/outlet/baratajaya_2.jpg',
            'assets/images/outlet/baratajaya_3.jpg',
        ],
        //Laoban Kopitiam Denpasar
        collapseThree: [
            'assets/images/outlet/Denpasar_1.jpg',
            'assets/images/outlet/Denpasar_2.jpg',
            'assets/images/outlet/Denpasar_3.jpg',
            'assets/images/outlet/Denpasar_4.jpg',
            'assets/images/outlet/Denpasar_5.jpg',
        ],
        //Laoban Kopitiam Makassar
        collapseFive: [
            'assets/images/outlet/makassar_1.jpg',
            'assets/images/outlet/makassar_2.jpg',
            'assets/images/outlet/makassar_3.jpg',
            'assets/images/outlet/makassar_4.jpg',
        ],
        //Laoban Kopitiam Tulungagung
        collapseSix: [
            // 'assets/images/outlet/Tulungagung_1.jpg',    
            'assets/images/outlet/Tulungagung_2.jpg',
            'assets/images/outlet/Tulungagung_3.jpg',
            'assets/images/outlet/Tulungagung_4.jpg',
            'assets/images/outlet/Tulungagung_5.jpg',
            'assets/images/outlet/Tulungagung_6.jpg',
            'assets/images/outlet/Tulungagung_7.jpg',
        ],
        //Laoban Kopitiam Mojokerto
        collapseSeven: [
            'assets/images/outlet/mojokerto_1.jpg',
            'assets/images/outlet/mojokerto_2.jpg',
            'assets/images/outlet/mojokerto_3.jpg',
            // 'assets/images/outlet/mojokerto_4.jpg',
            'assets/images/outlet/mojokerto_5.jpg',
            'assets/images/outlet/mojokerto_6.jpg',
        ],
        //Laoban Kopitiam Probolinggo
        collapseNine: [
            'assets/images/outlet/probolinggo_1.jpg',
            'assets/images/outlet/probolinggo_2.jpg',
            'assets/images/outlet/probolinggo_3.jpg',
            'assets/images/outlet/probolinggo_4.jpg',
        ],
        //Laoban Kopitiam Jember
        collapseTen: [
            'assets/images/outlet/jember_1.jpg',
            'assets/images/outlet/jember_2.jpg',
        ],
        //Laoban Kopitiam Bandung
        collapseEleven: [
            'assets/images/outlet/bandung_1.jpg',
            'assets/images/outlet/bandung_2.jpg',
        ],
        //Laoban Kopitiam Benhill, jakarta
        collapseThirteen: [
            'assets/images/outlet/benhill_1.jpg',
            'assets/images/outlet/benhill_2.jpg',
            'assets/images/outlet/benhill_3.jpg',
            'assets/images/outlet/benhill_4.jpg',
            'assets/images/outlet/benhill_5.jpg',
        ],

        //Laoban Kopitiam Bandung
        collapseFourteen: [
            'assets/images/outlet/tebet_1.jpg',
            'assets/images/outlet/tebet_2.jpg',
            'assets/images/outlet/tebet_3.jpg',
            'assets/images/outlet/tebet_4.jpg',
            'assets/images/outlet/tebet_5.jpg',
            'assets/images/outlet/tebet_6.jpg',
            'assets/images/outlet/tebet_7.jpg',
            'assets/images/outlet/tebet_8.jpg',
        ]
        // Add other image sets for other accordion items
    };

    // Event listener for accordion buttons
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', function () {
            const targetId = this.getAttribute('data-bs-target').substring(1);
            if (images[targetId]) {
                updateCarousel(images[targetId]);
            }
        });
    });

    // Function to update carousel items
    function updateCarousel(imageArray) {
        const carouselInner = document.querySelector('.carousel-inner');
        carouselInner.innerHTML = '';

        imageArray.forEach((src, index) => {
            const div = document.createElement('div');
            div.className = `carousel-item ${index === 0 ? 'active' : ''}`;
            const img = document.createElement('img');
            img.src = src;
            img.className = 'rounded-4 mx-auto d-block w-50';
            img.alt = '...';
            div.appendChild(img);
            carouselInner.appendChild(div);
        });
    }
</script>
<!-- ***** Franchise Area Ends ***** -->
<?php include_once __DIR__."/template/footer.php"; ?>