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
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location3',
                name: 'Laoban Kopitiam Wiyung, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location4',
                name: 'Laoban Kopitiam Mulyosari, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location5',
                name: 'Laoban Kopitiam Baratajaya, Surabaya',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location6',
                name: 'Laoban Kopitiam Denpasar',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location7',
                name: 'Laoban Kopitiam Makassar',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location8',
                name: 'Laoban Kopitiam Tulungagung',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location9',
                name: 'Laoban Kopitiam Mojokerto',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location10',
                name: 'Laoban Kopitiam Probolinggo',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location11',
                name: 'Laoban Kopitiam Jember',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location12',
                name: 'Laoban Kopitiam Bandung',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location13',
                name: 'Laoban Kopitiam Benhill, Jakarta',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location14',
                name: 'Laoban Kopitiam Tebet',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location15',
                name: 'Laoban Kopitiam Kediri',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location16',
                name: 'Laoban Kopitiam Cimahi',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
                ]
            },
            {
                id: 'location17',
                name: 'Laoban Kopitiam Katamso',
                mapSrc: 'https://www.google.com/maps/embed?...', // replace with actual map URL
                images: [
                    'assets/images/outlet/location2_1.jpg', // replace with actual image paths
                    'assets/images/outlet/location2_2.jpg'
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