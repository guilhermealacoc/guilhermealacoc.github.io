            <?php $__env->startSection('view::extends', '_includes.base'); ?>
<?php $__env->startSection('view::yields', 'body'); ?>
<?php $__env->startSection('pageTitle', '- Some Markdown'); ?>

            <?php $__env->startSection('body'); ?>
            <h1><?php echo e($siteName); ?></h1>
<p>While this is a pure <code>.md</code> <strong>file</strong>, you can still call variables the Blade way.</p>
<h4>The following is a product of a Blade foreach loop working with a pure markdown syntax.</h4>
<p><?php foreach(['Mon','Tues','Wednes'] as $word): ?>
<?php echo e($word); ?><strong>day</strong>
<?php endforeach; ?></p>
<div style="color:blue;">
This markdown won't **work**.
<div>

<div style="color:blue;">
<?php echo \Katana\Markdown::parse(<<<'EOT'
But this will **work**.

EOT
); ?>
<div>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('_includes.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>