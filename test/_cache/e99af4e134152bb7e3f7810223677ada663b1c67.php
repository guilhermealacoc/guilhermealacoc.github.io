            <?php $__env->startSection('view::extends', '_includes.blog_post_base'); ?>
<?php $__env->startSection('view::yields', 'post_body'); ?>
<?php $__env->startSection('pageTitle', 'Give Your Ideas Away'); ?>
<?php $__env->startSection('post::title', 'Give Your Ideas Away'); ?>
<?php $__env->startSection('post::date', 'March 17, 2016'); ?>
<?php $__env->startSection('post::brief', 'There is nothing of tangible value there yet. Could one of my contacts steal the idea? Absolutely. Could they execute it? Who knows.'); ?>

            <?php $__env->startSection('post_body'); ?>
            <p>I consult for a lot of entrepreneurs and founders. I help them out with marketing, strategy and a little coaching here and there. For the most part,
this is a great experience, and I get to help some awesome visionaries who are excited about what they’re doing.</p>
<p>But I get at least 2–3 emails a week from a founder who has something akin to <strong>“The Next Facebook”</strong> and wants me to sign an
NDA before she or he can tell me about it. You know, in case I steal it.</p>
<p><a href="https://medium.com/life-learning/give-your-ideas-away-f21d8dbf9c1">Read the complete article on Medium</a></p>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('_includes.blog_post_base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>