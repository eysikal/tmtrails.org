<!doctype html>
<html lang="en">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
        <main>
            <section class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1>Donate</h1>
                        <h3 class="mt-5">Please help us create new trails for all of us to enjoy by making a donation.</h2>
                        <form class="mt-5" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="ZEE4PCRCHFFS8">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">
                            <img alt="PayPal pixel" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
    </body>
</html>
