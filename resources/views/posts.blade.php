<!doctype html>

<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>

<title>My Blog</title>
<body>
<?php foreach ($posts as $post): ?>
<article>
    <h1>
        <a href="/posts/<?=$post->slug ?>">
            <?=$post->title;?>
        </a>
    </h1>
    <?= $post->body;?>
</article>
<?php endforeach;?>
</body>
