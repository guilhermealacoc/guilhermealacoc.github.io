<h3>From the blog</h3>

<?php foreach($blogPosts as $blogPost): ?>
    <a href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim($blogPost->path, '/').'/');  ?>"><?php echo e($blogPost->title); ?></a><br>
<?php endforeach; ?>

<br>
Want to read more?
<br>
<a href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('blog', '/').'/');  ?>">Check all posts</a>