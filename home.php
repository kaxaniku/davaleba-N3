<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <?php include("components/header.php")?>

    <main class="Fmain">
        <?php for ($i=0; $i < 3; $i++) : ?>
            <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
            </div>
        </div>
        <?php endfor?>
    </main>
</body>
</html>