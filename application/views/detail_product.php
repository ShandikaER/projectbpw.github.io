 <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <?php foreach($product as $pro): ?>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top " src="<?= base_url('assets/homepage').'/img/'.$pro->gambar ?>" alt="..." style="height: 50%;"/></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?= $pro->nama_product ?></h1>
                        <div class="fs-5 mb-5">
                            <span ><?= $pro->harga ?></span>
                            <!-- <span>$40.00</span> --> <!-- buat harga diskon -->
                        </div>
                        <p class="lead"><?= $pro->keterangan ?></p>
                        <div class="d-flex">
                            <a href="https://wa.me/6285265408505?text=Saya%20tertarik%20dengan%20barang%20Anda%20yang%20dijual" class="btn btn-success btn-lg active" role="button" aria-pressed="true">
                                <i class="bi bi-whatsapp me-1"></i>
                                Pesan via Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
