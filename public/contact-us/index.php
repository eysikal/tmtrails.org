<?php
try {
    mail('eysikal@gmail.com', 'My Subject', 'This is a test');
} catch (Exception $e) {
    echo $e->getMessage();
}
exit();
?>

<!doctype html>
<html lang="en">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
        <main>
            <div class="container text-center my-5 py-5">
                <p>[ Contact Us Page Coming Soon ]</p>
            </div>
        </main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
    </body>
</html>
