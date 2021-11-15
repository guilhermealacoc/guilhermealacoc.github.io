<?php $__env->startSection('pageTitle', '- About'); ?>

<?php $__env->startSection('body'); ?>


    <div class="left-side">
        <?php echo \Katana\Markdown::parse(<<<'EOT'

        # About

        These are some quotes that I’ve picked up along the way. They have a lot of meaning to me, personally. And I think you can learn something from them. Something fucking good, lasting and true.

        > “There are no passengers on spaceship earth. We are all crew.”
        > ― Marshall Mcluhan

        There’s no free rides. When you’re living on this planet, you can’t just sit down and coast, expecting the rest of humanity to keep its eye on the ball for you. A life spent as a passenger, rather than someone contributing to making the world function, is a life wasted.

        > “There are three things we cry for in life: things that are lost, things that are found, and things that are magnificent.”
        > ― Douglas Coupland

        This is what it means to be human. To feel overcome with emotion when we have to say goodbye, and when we experience discovery, and when we look out at the world and are suddenly struck by how incredible it is. When we cry for these things, we are truly fucking alive.

        ---

        Complete post: https://medium.com/life-learning/10-incredible-quotes-to-guide-your-life-355aab49fcf4

        
EOT
); ?>
    </div>

    <div class="right-side">
        <?php echo $__env->make('_includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('_includes.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>