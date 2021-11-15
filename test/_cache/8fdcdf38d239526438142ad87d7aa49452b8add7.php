<?php $__env->startSection('post::title', 'Today Is The Best Day Of Your Life'); ?>
<?php $__env->startSection('post::date', 'March 01, 2016'); ?>
<?php $__env->startSection('post::brief', 'When you watch reality TV singing shows, the hopefuls tend to be starry eyed dreamers, who’ll look into the camera and say “I’ve always dreamed about being a singer.” They never say they’ve always dreamed of singing.'); ?>
<?php $__env->startSection('pageTitle'); ?>- <?php echo $__env->yieldContent('post::title'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('post_body'); ?>

    <?php echo \Katana\Markdown::parse(<<<'EOT'
    The easiest way to accomplish visual balance is to align elements and structure designs with a clear grid. It guides us in the right direction when placing elements and determine dimensions, and it makes it easier for the user to process the interface.

    > Design for change

    No design is ever finished or done. Don’t be afraid of throwing away work, features or designs, good design is always evolving and grows with the business. Design with change in mind will allow us to quickly adapt to new learnings and insights. Every feature or functionality that is introduced needs time to improve. Once something is launched, evaluating performance and iteration should be the focus.

    [Read the complete article on Medium](https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c)
    
EOT
); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_includes.blog_post_base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>