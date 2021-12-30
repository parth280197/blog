<!doctype html>

<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>

<title>My Blog</title>
<body>
<?php foreach ($posts as $post): ?>
<article>
    <?= $post;?>
</article>
<?php endforeach;?>
</body>
