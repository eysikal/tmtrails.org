<!doctype html>
<html lang="en">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/head.php'; ?>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/header.php'; ?>
        <main>
            <div class="container text-center">
                <h1>Proposed Trail Map</h1>
                <div class="embed-responsive embed-responsive-16by9 mt-4">
                    <iframe class="embed-responsive-item"
                            src="http://docs.google.com/gview?url=https://www.traversemountaintrails.org/assets/files/tmtrails-proposed-map.pdf&embedded=true"
                            allowfullscreen></iframe>
                </div>
                <p class="mt-4"><a href="/assets/files/tmtrails-map.pdf">Download Proposed Trail Map</a></p>
            </div>
            <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/footer.php'; ?>
        </main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/partials/close-page.php'; ?>
    </body>
</html>
