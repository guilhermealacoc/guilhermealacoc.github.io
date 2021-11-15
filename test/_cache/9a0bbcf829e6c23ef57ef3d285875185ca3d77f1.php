<div class="pagination">
    <?php if($previousPage): ?>
        <a class="button is-primary" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim($previousPage, '/').'/');  ?>">Newer posts</a>
    <?php endif; ?>

    <?php if($nextPage): ?>
        <a class="button is-primary" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim($nextPage, '/').'/');  ?>">Previous posts</a>
    <?php endif; ?>
</div>