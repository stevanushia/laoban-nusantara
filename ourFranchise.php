<?php 
$current_page = "franchise";
include_once __DIR__."/template/header.php"; ?>
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
    }

    .location-list {
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 20px;
    }

    .location-item {
        align-items: center;
        text-align: center;
        justify-content: space-between;
        cursor: pointer;
        padding: 15px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .location-item:hover {
        background-color: #f8f9fa;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .location-icon {
        font-size: 24px;
        margin-right: 10px;
    }

    .location-details {
        display: none;
    }

    #filterInput {
        max-width: 400px;
        margin: 0 auto 20px auto;
    }
</style>
</head>
<body>

<section class="section" id="menu" style="margin-top: 25px;">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h6 style="padding-left: 0px;">Our Partner</h6>
                <h2>Kunjungi Lokasi Kami!</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <input type="text" id="filterInput" class="form-control" placeholder="Filter locations...">
        </div>
    </div>

    <div class="row location-section">
        <div class="col-12 location-list" id="locationList">
            <!-- Location items will be dynamically added here -->
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="locationModalLabel">Location Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Modal content will be dynamically added here -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        const locations = [
            {
                id: 'location1',
                name: 'Laoban Kopitiam Suhat, Malang (Pusat)',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d126449.96895010203!2d112.54751546940913!3d-7.940776492494127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dd6298ddfd73cf5%3A0xbeb5ae954f915c2c!2sJl.%20Soekarno%20Hatta%20Indah%20No.17%2C%20Mojolangu%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065142!3m2!1d-7.9407812!2d112.6299076!5e0!3m2!1sen!2sid!4v1715249968798!5m2!1sen!2sid',
                images: [
                    'assets/images/outlet/suhat_1.jpg',
                    'assets/images/outlet/suhat_2.jpg'
                ]
            },
            {
                id: 'location2',
                name: 'Laoban Kopitiam Binus, Malang',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5510083565127!2d112.6838782!3d-7.941870099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62943bed1ea39%3A0x4481cf517a9ea1c9!2sLaoban%20Kopitiam%20Binus!5e0!3m2!1sid!2sid!4v1720380612771!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/binus_1.jpg', // replace with actual image paths
                    'assets/images/outlet/binus_2.jpg',
                    'assets/images/outlet/binus_3.jpg',
                    'assets/images/outlet/binus_4.jpg',
                    'assets/images/outlet/binus_5.jpg',
                    'assets/images/outlet/binus_6.jpg'
                ]
            },
            {
                id: 'location3',
                name: 'Laoban Kopitiam Wiyung, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506545.89283061353!2d112.39761803281246!3d-7.310032600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd565360e6d9%3A0x1bd8698e8ca3be00!2sLaoban%20Kopitiam%20Wiyung!5e0!3m2!1sid!2sid!4v1720380862144!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/wiyung_1.png', // replace with actual image paths
                    'assets/images/outlet/wiyung_2.png',
                    'assets/images/outlet/wiyung_3.png',
                    'assets/images/outlet/wiyung_4.png'
                ]
            },
            {
                id: 'location4',
                name: 'Laoban Kopitiam Mulyosari, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7862997826714!2d112.79307290991282!3d-7.265143971351004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb0008f1c997%3A0x93bab84f775d7292!2sLAOBAN%20MULYOSARI%20by%20Uncle%20Osh!5e0!3m2!1sid!2sid!4v1720381037677!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/mulyosari_1.png', // replace with actual image paths
                    'assets/images/outlet/mulyosari_2.png',
                    'assets/images/outlet/mulyosari_3.jpg',
                    'assets/images/outlet/mulyosari_4.jpg'
                ]
            },
            {
                id: 'location5',
                name: 'Laoban Kopitiam Baratajaya, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.454405060884!2d112.75689910989746!3d-7.302736071760308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdab3777fc9%3A0x6a5a755769688dbb!2sLaoban%20BarataJaya!5e0!3m2!1sid!2sid!4v1720381366897!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/baratajaya_1.jpg', // replace with actual image paths
                    'assets/images/outlet/baratajaya_2.jpg',
                    'assets/images/outlet/baratajaya_3.jpg'
                ]
            },
            {
                id: 'location6',
                name: 'Laoban Kopitiam Denpasar',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2023055.4771701742!2d112.61935686061575!3d-7.969964141264735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241004252ee53%3A0x8091a327d4ce5cd7!2sLaoban%20Kopitiam%20Denpasar!5e0!3m2!1sid!2sid!4v1720381486477!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/Denpasar_1.jpg', // replace with actual image paths
                    'assets/images/outlet/Denpasar_2.jpg',
                    'assets/images/outlet/Denpasar_3.jpg',
                    'assets/images/outlet/Denpasar_4.jpg',
                    'assets/images/outlet/Denpasar_5.jpg'
                ]
            },
            {
                id: 'location7',
                name: 'Laoban Kopitiam Makassar',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7960938304514!2d119.40013143881458!3d-5.136507738665203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbef9ed25af80b3%3A0x5c8593f958b12a25!2sLaoban%20Kopitiam%20Makassar!5e0!3m2!1sid!2sid!4v1720381567713!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/makassar_1.jpg', // replace with actual image paths
                    'assets/images/outlet/makassar_2.jpg',
                    'assets/images/outlet/makassar_3.jpg',
                    'assets/images/outlet/makassar_4.jpg'
                ]
            },
            {
                id: 'location8',
                name: 'Laoban Kopitiam Tulungagung',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4494687029865!2d111.91348320990956!3d-8.055550080442556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e346f2542d6d%3A0xaacbffb4b29c9a0b!2sLaoban%20Tulungagung!5e0!3m2!1sid!2sid!4v1720381655710!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/Tulungagung_2.jpg',
                    'assets/images/outlet/Tulungagung_3.jpg',
                    'assets/images/outlet/tulungagung_4.jpg',
                    'assets/images/outlet/tulungagung_5.jpg',
                    'assets/images/outlet/tulungagung_6.jpg',
                    'assets/images/outlet/tulungagung_7.jpg'
                ]
            },
            {
                id: 'location9',
                name: 'Laoban Kopitiam Mojokerto',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.938718257659!2d112.43173610990004!3d-7.472019873632209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d128f10cdc3%3A0x378a7ed7b3ae7005!2sLaoban%20Mojokerto!5e0!3m2!1sid!2sid!4v1720381823635!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/mojokerto_1.jpg', // replace with actual image paths
                    'assets/images/outlet/mojokerto_2.jpg',
                    'assets/images/outlet/mojokerto_3.jpg',
                    'assets/images/outlet/mojokerto_4.jpg',
                    'assets/images/outlet/mojokerto_5.jpg',
                    'assets/images/outlet/mojokerto_6.jpg'
                ]
            },
            {
                id: 'location10',
                name: 'Laoban Kopitiam Probolinggo',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3470543089747!2d113.2144046099046!3d-7.752965876841896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad27bdaf4931%3A0x2e1951e8958401fa!2sLaoban%20Kopitiam%20Probolinggo!5e0!3m2!1sid!2sid!4v1720381929362!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/probolinggo_1.jpg', // replace with actual image paths
                    'assets/images/outlet/probolinggo_2.jpg',
                    'assets/images/outlet/probolinggo_3.jpg',
                    'assets/images/outlet/probolinggo_4.jpg'
                ]
            },
            {
                id: 'location11',
                name: 'Laoban Kopitiam Jember',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1755727506593!2d113.66456010991173!3d-8.185061682029275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd691f5fb4671bb%3A0x12a6775d7b0caf73!2sLaoban%20Jember!5e0!3m2!1sid!2sid!4v1720381958345!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/jember_1.jpg', // replace with actual image paths
                    'assets/images/outlet/jember_2.jpg'
                ]
            },
            {
                id: 'location12',
                name: 'Laoban Kopitiam Bandung',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7250783306677!2d107.59675960989169!3d-6.923431267735644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7002fefc4cd%3A0x11fec2012f28e0ea!2sLaoban%20by%20Uncle%20Osh%20Bandung!5e0!3m2!1sid!2sid!4v1720381985835!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/bandung_1.jpg', // replace with actual image paths
                    'assets/images/outlet/bandung_2.jpg'
                ]
            },
            {
                id: 'location13',
                name: 'Laoban Kopitiam Benhill, Jakarta',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507703.4280271558!2d106.19925578906248!3d-6.206471899999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7007bb009bd%3A0xab5fe035c7bae1da!2sLAOBAN%20BENHIL%20by%20Uncle%20Osh!5e0!3m2!1sid!2sid!4v1720382020888!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/benhill_1.jpg', // replace with actual image paths
                    'assets/images/outlet/benhill_2.jpg',
                    'assets/images/outlet/benhill_3.jpg',
                    'assets/images/outlet/benhill_4.jpg',
                    'assets/images/outlet/benhill_5.jpg'
                ]
            },
            {
                id: 'location14',
                name: 'Laoban Kopitiam Tebet',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2209195917853!2d106.84609810988181!3d-6.234583361026453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30ad900c765%3A0x3fda54d808fc5622!2sLAOBAN%20TEBET%20by%20Uncle%20Osh!5e0!3m2!1sid!2sid!4v1720382052664!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/tebet_1.jpg', // replace with actual image paths
                    'assets/images/outlet/tebet_2.jpg',
                    'assets/images/outlet/tebet_3.jpg',
                    'assets/images/outlet/tebet_4.jpg',
                    'assets/images/outlet/tebet_5.jpg',
                    'assets/images/outlet/tebet_6.jpg', 
                    'assets/images/outlet/tebet_7.jpg',
                    'assets/images/outlet/tebet_8.jpg'
   
                ]
            },
            {
                id: 'location15',
                name: 'Laoban Kopitiam Kediri',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.701256116332!2d112.0248024099057!3d-7.821411577643332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785700564efc11%3A0x61d576780053702a!2sLaoban%20kediri!5e0!3m2!1sid!2sid!4v1720382078395!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/kediri_1.jpg', // replace with actual image paths
                    'assets/images/outlet/kediri_2.jpg',
                    'assets/images/outlet/kediri_3.jpg',
                    'assets/images/outlet/kediri_4.jpg',
                    'assets/images/outlet/kediri_5.jpg'
                ]
            },
            {
                id: 'location16',
                name: 'Laoban Kopitiam Cimahi',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.078929793163!2d107.54890430989094!3d-6.881147767301459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e50056588c5b%3A0x61657fd8534a83e4!2sLaoban%20by%20Uncle%20Osh%20cibabat%20cimahi!5e0!3m2!1sid!2sid!4v1720382103623!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/cimahi_1.jpg', // replace with actual image paths
                    'assets/images/outlet/cimahi_2.jpg',
                    'assets/images/outlet/cimahi_3.jpg',
                    'assets/images/outlet/cimahi_4.jpg',
                    'assets/images/outlet/cimahi_5.jpg',
                    'assets/images/outlet/cimahi_6.jpg'
                ]
            },
            {
                id: 'location17',
                name: 'Laoban Kopitiam Katamso',
                mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63374.13986022071!2d107.5551221486328!3d-6.904503699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e70075877ec7%3A0x2991f5f710e588bb!2sLAOBAN%20by%20UNCLE%20OSH%20KATAMSO!5e0!3m2!1sid!2sid!4v1720382148728!5m2!1sid!2sid', // replace with actual map URL
                images: [
                    'assets/images/outlet/katamso_1.jpg', // replace with actual image paths
                    'assets/images/outlet/katamso_2.jpg',
                    'assets/images/outlet/katamso_3.jpg',
                    'assets/images/outlet/katamso_4.jpg',
                    'assets/images/outlet/katamso_5.jpg',
                    'assets/images/outlet/katamso_6.jpg',
                    'assets/images/outlet/katamso_7.jpg',
                    'assets/images/outlet/katamso_8.jpg',
                    'assets/images/outlet/katamso_9.jpg',
                    'assets/images/outlet/katamso_10.jpg'
                ]
            },
            // Add more locations as needed
        ];

        const locationList = $('#locationList');

        locations.forEach(location => {
            const locationItem = $(`
                <div class="location-item" data-location="${location.id}">
                    <i class="bi bi-geo-alt location-icon"></i>
                    ${location.name}
                </div>
            `);

            locationList.append(locationItem);

            locationItem.on('click', function () {
                $('#locationModalLabel').text(location.name);
                const modalBody = $('#modalBody');
                modalBody.empty();

                const mapIframe = $(`
                    <iframe src="${location.mapSrc}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                `);
                modalBody.append(mapIframe);

                const carouselId = `carousel-${location.id}`;
                const carousel = $(`
                    <div id="${carouselId}" class="carousel slide mt-3" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            ${location.images.map((img, index) => `
                                <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                    <img src="${img}" class="d-block w-100" alt="Location Image ${index + 1}">
                                </div>
                            `).join('')}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                `);
                modalBody.append(carousel);

                $('#locationModal').modal('show');
            });
        });

        $('#filterInput').on('keyup', function () {
            const value = $(this).val().toLowerCase();
            $('.location-item').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

    <?php include_once __DIR__."/template/footer.php"; ?>