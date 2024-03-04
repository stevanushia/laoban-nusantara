<?php 
require_once 'vendor/autoload.php';
$current_page = "menu"; // This variable represents the current page (e.g., menu.php)
include_once __DIR__."/template/header.php";
$arrMainDish = Menu::getMainDish();
$arrSnack = Menu::getSnack();
$arrDimsum = Menu::getDimsum();
$arrHotDrink = Menu::getHotDrink();
$arrColdDrink = Menu::getColdDrink();
$arrSiBikinSeger = Menu::getSiBikinSeger();



// function dd($data)
// {
//     echo "<pre>";
//     var_dump($data);
//     echo "</pre>";
// }
// dd($arrMainDish);

?>

<style>
    .iconMenu{
        margin-bottom: 15px;
        height: 50px;
        align-items: center;
        display: flex;
        justify-content: center;
        margin-top: 0px;
        padding: 0px;
        background-color: #FFFAFA;
    }
</style>
<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Menu Perguruan Laoban</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <ul>
                                        <li><a href='#tabs-1'><h6 class='iconMenu'><i class="fa-solid fa-bowl-food" style="color: #a60100;"></i></h6>Main Dish</a></li>
                                        <li><a href='#tabs-2'><h6 class='iconMenu' style="width: 60px;"><i class="fa-solid fa-bread-slice" style="color: #a60100;"></i></h6>Snack</a></a></li>
                                        <li><a href='#tabs-3'><img src="assets/images/logo-dimsum.png" alt="" class="iconMenu"></h6>Dimsum</a></li>
                                        <li><a href='#tabs-4'><h6 class='iconMenu'><i class="fa-solid fa-mug-hot" style="color: #a60100;"></i></h6>Hot Drink</a></a></li>
                                        <li><a href='#tabs-5'><h6 class='iconMenu'><i class="fa-solid fa-martini-glass" style="color: #a60100;"></i></h6>Cold Drink</a></a></li>
                                        <li><a href='#tabs-6'><h6 class='iconMenu' style="width: 68px; margin-left: 15px;"><i class="fa-solid fa-martini-glass-citrus" style="color: #a60100;"></i></h6>Si Bikin Seger</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <!-- Main Dish -->
                            <?php
                                $total_rows = count($arrMainDish);
    
                                // Calculate the number of items for left and right sections
                                $left_items = $right_items = ceil($total_rows / 2);
                            
                                echo "<article id='tabs-1'>
                                        <div class='row'>
                                            <div class='col-lg-6'>
                                                <div class='row'>
                                                    <div class='left-list'>";
                                    // Generate HTML for left section
                                    for ($i = 0; $i < $left_items; $i++) {
                                        echo "<div class='col-lg-12' style='height: 200px'>
                                                <div class='tab-item'>
                                                    <img src='assets/images/main-dish/{$arrMainDish[$i]['photo']}' alt=''>
                                                    <h4>{$arrMainDish[$i]['name']}</h4>
                                                    <p>{$arrMainDish[$i]['description']}</p>";

                                                    if ($arrMainDish[$i]['favorit']) {
                                                        echo "<div class='price'>
                                                            <h6><i class='fa fa-star'></i></h6>
                                                        </div>";
                                                    }
                                                echo"</div>
                                            </div>";
                                    }
                                    echo "</div>
                                        </div>
                                    </div>
                                        <div class='col-lg-6'>
                                            <div class='row'>
                                                <div class='right-list'>";
                                    // Generate HTML for right section
                                    for ($i = $left_items; $i < $total_rows; $i++) {
                                        echo "<div class='col-lg-12' style='height: 200px'>
                                                <div class='tab-item'>
                                                    <img src='assets/images/main-dish/{$arrMainDish[$i]['photo']}' alt=''>
                                                    <h4>{$arrMainDish[$i]['name']}</h4>
                                                    <p>{$arrMainDish[$i]['description']}</p>";

                                                    if ($arrMainDish[$i]['favorit']) {
                                                        echo "<div class='price'>
                                                            <h6><i class='fa fa-star'></i></h6>
                                                        </div>";
                                                    }
                                                echo"</div>
                                            </div>";
                                    }
                                    echo "</div>
                                        </div>
                                    </div>
                                </article>";
                            ?>

                            <!-- Main Dish -->

                            <!-- Snack -->
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$18</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$22</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$20</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$30</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Snack -->

                            <!-- Dimsum -->
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$18</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$9</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$11</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Dimsum -->

                            <!-- Hot Drink -->
                            <article id='tabs-6'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$18</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Fruit Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$9</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                                            elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$11</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Hot Drink -->

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<?php include_once __DIR__."/template/footer.php"; ?>







<!-- <article id='tabs-1'>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="left-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/main-dish/NasiHainanPotrait.jpg" alt="">
                            <h4>Fresh Chicken Salad</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$10.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-02.png" alt="">
                            <h4>Orange Juice</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$8.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-03.png" alt="">
                            <h4>Fruit Salad</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$9.90</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="right-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-04.png" alt="">
                            <h4>Eggs Omelette</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$6.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-05.png" alt="">
                            <h4>Dollma Pire</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$5.00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-06.png" alt="">
                            <h4>Omelette & Cheese</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$4.10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article> -->