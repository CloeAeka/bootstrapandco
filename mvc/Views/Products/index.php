
<div class="container">
        <div class="row justify-content-center align-content-center h-100 ">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 bg-image d-flex align-items-center">
                <div class="row justify-content-center text-center">
                    <div class="col-12 text-center">
                        <p class="para1 imagereduc"> <b> Winter Collection </b></p>
                    </div>
                
                    <div class="row justify-content-evenly">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                            <div class="row text-end">
                                <div class="col-12">
                                    <p class="para1 discount"><b>70</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 ">
                            <div class="row text-start">
                                <div class="col-12">
                                    <p class="para1 percent"><b>%</b></p>
                                </div>
                                <div class="col-12">
                                    <p class="para1 offdiscount"> <b>OFF</b> </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-6">
                        <p class="para1">Lorem ipsum dolor sit amet, tellus enim, varius nec magna lobortis neque, aenean tempor, arcu magnam </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="shopcolor">Shop Now </p>
                    </div>
                </div> 
            </div>  
            
            
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-image2">
                        <div class="row">
                            <div class="col-12">
                                <p class="para2"> <b> Winter Party <br> Collection </b></p>
                            </div>
                            <div class="col-12">
                                <p class="para3">Lorem ipsum dolor sit amet, tellus enim.lobortis <br> neque, aenean tempor, arcu magnam</p>
                            </div>
                            <div class="col-12 text-end">
                                <p class="shopbutton">Shop Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-6 bg-image3">
                        <div class="row height2">
                            <div class="col-12">
                                <p class="para4">Men Winter Collection <br> <br> <br> </p>
                            </div>
                            <div class="col-12">
                                <p class="shopbutton"> Shop Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-6  bg-image4">
                        <div class="row">
                            <div class="col-12">
                                <p class="para2">Kids Winter Starting Pack <br> Collection </p>
                            </div>
                            <div class="col-12 align-items-end">
                                <p class="shopbutton"> Shop Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-content-center align-middle">
                <p class="subscribe "><i>Subscribe our newsletter and  keep update for new product & Promotion</i></p>
            </div>
            <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <input type="email" class="form-control" id="floatingInput" placeholder="Your email address">
            </div>
            <div class="col-4 col-xs-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                <button type="button" class="btn btn-warning">SUBSCRIBE</button>
            </div>
        </div>
    </div><!-- Carrousel femme debut -->
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>Women Best Selling Product</h1>
            </div>
            <div class="col-8 text-center">
                <p>Lorem ipsum dolor sit amet tellus</p>
            </div>
        </div>
    </div>
   
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($data2); $i++): ?>
                            <?php if (($i) % 4 == 0): ?>
                                <div class="carousel-item <?= ($i==0)? 'active': ''; ?>">
                                <div class="row justify-content-evenly">
                            <?php endif; ?>

                                    <div class="col-sm-6 col-md-6 col-lg-2 col-xl-2">
                                        <div class="card" style="width: 18rem;">
                                            <a href="https://williamg.promo-57.codeur.online/FashionUinity/Productpage.php" >
                                                <img src="<?php echo $data2[$i]["photo1"]; ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">$<?php echo $data2[$i]["prix"]; ?></h5>
                                                    <p class="card-text"><?php echo $data2[$i]["nom"]; ?></p>
                                                </div>
                                            </a>      
                                        </div>
                                    </div>
                                    
                                
                            <?php if (($i+1) % 4 == 0 || ($i+1) == count($data2) ): ?>
                                </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carrousel homme debut-->
    <div class="trait_dessus"><hr></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h1>Men Best Selling Product</h1>
            </div> 
            <div class="col-8 text-center">
                <p>Lorem ipsum dolor sit amet tellus</p>
            </div>
        </div>
    </div>
            
                
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($data1); $i++): ?>
                            <?php if (($i) % 4 == 0): ?>
                                <div class="carousel-item <?= ($i==0)? 'active': ''; ?>">
                                <div class="row justify-content-evenly">
                            <?php endif; ?>

                                    <div class="col-sm-6 col-md-6 col-lg-2 col-xl-2">
                                        <div class="card" style="width: 18rem;">
                                            <a href="https://williamg.promo-57.codeur.online/FashionUinity/Productpage.php" >
                                                <img src="<?php echo $data1[$i]["photo1"]; ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">$<?php echo $data1[$i]["prix"]; ?></h5>
                                                    <p class="card-text"><?php echo $data1[$i]["nom"]; ?></p>
                                                </div>
                                            </a>      
                                        </div>
                                    </div>
                                    
                                
                            <?php if (($i+1) % 4 == 0 || ($i+1) == count($data1) ): ?>
                                </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
        <div class="trait_dessus"><hr></div>
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-8 text-center">
                    <h1>Featured Brand</h1>
                </div>
                <div class="col-8 text-center">
                    <p>Lorem ipsum dolor sit amet tellus</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-evenly">
                <img class="col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1" src="<?= WEBROOT?>assets/images/image/mango.png"  alt="Logo marque mango">
                <img class="col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1" src="<?= WEBROOT?>assets/images/image/nike.png"  alt="Logo marque nike">
                <img class="col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1" src="<?= WEBROOT?>assets/images/image/H&M.png"  alt="Logo marque H&M">
                <img class="col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1" src="<?= WEBROOT?>assets/images/image/Zara.png"  alt="Logo marque Zara">
                <img class="col-4 col-sm-4 col-md-4 col-lg-1 col-xl-1" src="<?= WEBROOT?>assets/images/image/Forever21.png"  alt="Logo marque Forever 21">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <img class="col-12" src="<?= WEBROOT?>assets/images/image/dailyaccessories.png"  alt="bandeau noir avec sac a dos">
        </div>
    </div>