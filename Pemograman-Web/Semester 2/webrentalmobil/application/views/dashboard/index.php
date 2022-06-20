<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Frontpage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico') ?>" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free-6.1.1-web/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Sewa Mobil Mudah dengan hanya menggunakan website.</h1>
                        <p class="lead text-white-50 mb-4">Berbagai Macam Tipe dan Merk Mobil Tersedia.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Booking Now!</a>
                            <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Pricing section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container ">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">DISINI TABLE MOBIL YANG BISA DISEWA</h2>
                <p class="lead mb-0">With our no hassle pricing plans</p>
            </div>
            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NOPOL</th>
                            <th>Warna</th>
                            <th>Biaya Sewa</th>
                            <th>Deskipsi</th>
                            <th>CC</th>
                            <th>Tahun</th>
                            <th>Merk ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mobil as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->nopol ?></td>
                                <td><?= $obj->warna ?></td>
                                <td><?= $obj->biaya_sewa ?></td>
                                <td style="width:30%"><?= $obj->deskripsi ?>
                                <td><?= $obj->cc ?></td>
                                <td><?= $obj->tahun ?></td>
                                <td><?= $obj->merk_id ?></td>
                                <td>
                                    <a class="btn btn-info" href="<?= (base_url() . 'index.php/mobil/booking?id='); ?><?= $obj->nopol ?>">Booking</a>
                                    <!-- <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?> -->
                                    <a class="btn btn-success" href="<?= (base_url() . 'index.php/mobil/edit?id='); ?><?= $obj->nopol ?>">Edit</a>
                                    <a class="btn btn-danger" href="<?= (base_url() . 'index.php/mobil/delete?id='); ?><?= $obj->nopol ?>" onclick="if(!confirm('Anda Yakin Hapus Mobil dengan NOPOL <?= $obj->nopol ?>?')) {return false}">Delete</a>
                                    <!-- <?php } ?> -->
                                </td>
                            </tr>
                        <?php
                            $nomor++;
                        } ?>
                    </tbody>
                </table>
                <!-- Pricing card free-->


            </div>
        </div>
    </section>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Customer testimonials</h2>
                <p class="lead mb-0">Our customers love working with us</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
