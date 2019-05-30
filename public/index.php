<!doctype html>
<html lang="en">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
        <main>
            <section class="container text-center">
                <h1>Traverse Mountain Trails Association</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="tmtrails-carousel" class="carousel slide mt-4" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/images/tmtrails-landscape-4.jpg" class="d-block w-100" alt="Traverse Mountain Landscape 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/images/tmtrails-landscape-5.jpg" class="d-block w-100" alt="Traverse Mountain Landscape 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/images/tmtrails-landscape-6.jpg" class="d-block w-100" alt="Traverse Mountain Landscape 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#tmtrails-carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#tmtrails-carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
        </main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
    </body>
</html>
