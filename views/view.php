<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="mybook.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>
<body>
    <header>
        <h1>MyBooks</h1>
    </header>
    <?php foreach ($books as $book): ?>
    <article>
        <h2><?php echo $book['book_title'] ?></h2>
        <p><?php echo $book['book_summary'] ?></p>
    </article>
    <?php endforeach ?>
    <footer class="footer">
        <p>MyBooks est construit avec PHP, Silex, Twig et Bootstrap</p>
    </footer>
</body>
</html>