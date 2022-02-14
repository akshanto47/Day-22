<?php include "pages/include/header.php"; ?>
<section class="py-5">
    <div class="containerf">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $productDetails['image']; ?>" alt="" class="img-fluid" style="height: 300px">
            </div>
            <div class="col-md-6">
                <div class="card card-body" style="min-height: 300px">
                    <h2 class="font-weight-bold">Product Name</h2>
                    <p>Price: BDT<?php echo $productDetails['price']; ?></p>
                    <p>Description BDT<?php echo $productDetails['description']; ?> </p>
                    <a href="" class="btn btn-outline-success float-right">Order Now</a>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include "pages/include/footer.php"; ?>
