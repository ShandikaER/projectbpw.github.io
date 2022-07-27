
        <!-- Header-->
        <header class="py-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="<?= base_url('assets/homepage')?>/img/Jumbotron/1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="<?= base_url('assets/homepage')?>/img/Jumbotron/2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="<?= base_url('assets/homepage')?>/img/Jumbotron/3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
        <!-- Section Title Start -->
        <div class="section-title text-center py-4">
            <h2 style="color:#f99494">Our Product</h2>
            <p style="color:#f99494">What's Our Produt Now ?</p>
        </div>
        <!-- Section Title End -->
        <!-- Section Product Start-->
        <section>
            <div class="container px-4 px-lg-5 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach ($product as $pro) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?= base_url('assets/homepage').'/img/'.$pro->gambar ?>" alt="..." style="height: 250px" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $pro->nama_product ?></h5>
                                    <!-- Product price-->
                                    <?php echo $pro->harga ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-danger mt-auto" href=" <?= base_url('dashboard/detail/'.$pro->id_product) ?>">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Section Product End-->
        <!-- Section Title Start -->

        <!-- Section Title End -->
        <div class="section-title text-center py-4 px-lg-5">
            <h2 style="color:#f99494">Sukses Bersama Join Seller Resmi MS Glow</h2>
        </div>
        <div class="text-center">
            <img src="<?= base_url('assets/homepage')?>/img/benefitreseller.png" alt="" style="height: 600px;">
        </div>
        <div class="section-title text-center py-4">
            <h2 style="color:#f99494">Our Seller</h2>
        </div>
        <div class="text-center">
            <img src="<?= base_url('assets/homepage')?>/img/reseller.png" alt="" style="height: 600px;">
            <div class="d-flex justify-content-center py-3">
                <a href="https://wa.me/6285265408505?text=Saya%20tertarik%20dengan%20barang%20Anda%20yang%20dijual" class="btn btn-success btn-lg active" role="button" aria-pressed="true">
                    <i class="bi bi-whatsapp me-1"></i>
                        Join Sekarang
                </a>
            </div>
        </div>