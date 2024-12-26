<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php 
    //categories 
    $categories = $conn->query("SELECT * FROM categories");
    $categories->execute();
    $allCategories = $categories->fetchAll(PDO::FETCH_OBJ);  

    //most wanted product
    $mostProducts = $conn->query("SELECT * FROM products WHERE status = 1");
    $mostProducts->execute();
    $allmostProducts = $mostProducts->fetchAll(PDO::FETCH_OBJ);   

    //vigies
    $vigies = $conn->query("SELECT * FROM products WHERE status = 1 AND category_id =6");
    $vigies->execute();
    $allvigies = $vigies->fetchAll(PDO::FETCH_OBJ);

    //meat
    $meats = $conn->query("SELECT * FROM products WHERE status = 1 AND category_id =7");
    $meats->execute();
    $allmeats = $meats->fetchAll(PDO::FETCH_OBJ);

    //fish
    $fishs = $conn->query("SELECT * FROM products WHERE status = 1 AND category_id =8");
    $fishs->execute();
    $allfishs = $fishs->fetchAll(PDO::FETCH_OBJ);

    //fruits
    $fruits = $conn->query("SELECT * FROM products WHERE status = 1 AND category_id =9");
    $fruits->execute();
    $allfruits = $fruits->fetchAll(PDO::FETCH_OBJ);
?>

    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Start Your Shopping 
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>
<!-- 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-categories owl-carousel mt-5">
                    <?php foreach($allCategories as $category) : ?>
                        <div class="item">
                            <a href="shop.php">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-<?php echo $category-> icon;?>"></i></span>
                                    <div class="media-body">
                                        <h5><?php echo $category->name;?></h5>
                                        <p><?php echo substr($category-> description,1,20);?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach ;?>
                    </div>
                </div>
            </div>
        </div> -->

        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Most Wanted</h2>
                        <div class="product-carousel owl-carousel">
                            <?php foreach ($allmostProducts  as $allmostProduct ) :?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?php echo $allmostProduct -> exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allmostProduct -> image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"> <?php echo $allmostProduct -> title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler"> <?php echo $allmostProduct -> price;?>RS</span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>/products/detail-product.php?id=<?php echo $allmostProduct->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                          
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="vegetables" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Leafy Green</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach ($allvigies  as $allvigi ) :?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until<?php echo $allvigi -> exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allvigi -> image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"> <?php echo $allvigi -> title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">RS<?php echo $allvigi -> price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL;?>/products/detail-product.php?id=<?php echo $allvigi -> id;?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>  
                            <?php endforeach;?>                         
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="meats">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Curiferous</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allmeats as $meat) : ?> 
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?php echo $meat-> exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $meat-> image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"><?php echo $meat-> title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">Rp.<?php echo $meat->price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL;?>/products/detail-product.php?id=<?php echo $meat -> id;?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fishes" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Marrow</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allfishs as $fish) : ?> 
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until<?php echo $fish->exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $fish->image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"> <?php echo $fish->title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">Rs.<?php echo $meat->price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL;?>/products/detail-product.php?id=<?php echo $fish -> id;?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fruits">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Root vegetables</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach(  $allfruits as $fruit) : ?> 
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until<?php echo $fruit->exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $fruit->image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.html"> <?php echo $fruit->title;?>e</a>
                                        </h4>
                                        <div class="card-price">
                                            <!-- <span class="discount">Rs. 300.000</span> -->
                                            <span class="reguler">Rs.<?php echo $fruit->price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL;?>/products/detail-product.php?id=<?php echo $fruit -> id;?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require "includes/footer.php"; ?>
