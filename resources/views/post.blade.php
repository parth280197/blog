<!doctype html>

<link rel="stylesheet" href="/app.css">
<title>My Blog</title>
<body>
<article>
    <h1><?= $post->title;?></h1>
    <div><?= $post->body;  ?></div>
</article>
<p><a href="/posts">back to home</a></p>
</body>
