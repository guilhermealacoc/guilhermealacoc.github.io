<?php $__env->startSection('pageTitle', '- Blog'); ?>

<?php $__env->startSection('body'); ?>

    <div class="left-side">
        <?php foreach($paginatedBlogPosts as $post): ?>

            <article>
                <p>
                    <a href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim($post->path, '/').'/');  ?>"><?php echo e($post->title); ?></a>
                    <br>
                    <small><?php echo e($post->date); ?></small>
                    <br>
                    <?php echo e(str_limit($post->brief, 130)); ?>

                </p>
            </article>

        <?php endforeach; ?>

        <?php echo $__env->make('_includes.blog_paginator', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <div class="right-side">
        <?php echo $__env->make('_includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_includes.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>