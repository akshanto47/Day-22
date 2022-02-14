<?php include 'pages/include/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>


            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $product['image'] ?>" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h3 class="card-title">Product Name</h3>
                        <p class=""> Product price: BDT 100</p>
                        <p class="text-justify">Product description</p>
                        <a href="action.php?pages=product-details&&product_id=<?php echo $product['id']; ?>" class="btn btn-outline-warning float-right">Details</a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>
<?php include 'pages/include/footer.php';?>
