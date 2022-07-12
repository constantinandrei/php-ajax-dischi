<main>
    <div class="container">
        <div class="px-5 py-3">
            <div class="px-5">
                <div class="row row-cols-5 g-3">
                    <?php foreach ($db as $album) {?>
                        <div class="col">
                            <div class="p-2 text-center my-card h-100">
                                <div><img
                                        src="<?php echo $album["poster"] ?>"
                                        alt=""></div>
                                <h5 class="pt-4 text-white text-uppercase"><?php echo $album["title"] ?></h5>
                                <div class="text-muted mt-4"><?php echo $album["author"] ?></div>
                                <div class="text-muted"><?php echo $album["genre"] ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>