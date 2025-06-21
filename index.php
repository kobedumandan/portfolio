<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kobe's Portfolio</title>
    <?php
    require 'essentials/bootstrap.html'
    ?>
    <link rel="stylesheet" href="css/css_index.css">
</head>

<body>
    <?php
    // require_once 'essentials/navbar.html'
    ?>
    <div class="white_panel">
        <div class="top_col col">
            <div class="row">
                <div class="win_name col-6 p-1 px-4">
                    <i>portfolio.exe</i>
                </div>
                <div class="win_btns col-6 p-1">
                    <div class="holder py-1 d-flex gap-2">
                        <div><i class="fi fi-bs-window-minimize"></i></div>
                        <div><i class="fi fi-bs-window-maximize"></i></div>
                        <div><i class="fi fi-bs-cross"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content col">
            <?php
            require_once 'essentials/navbar.html';
            ?>

            <div class="container-fluid">
                    <div class="col">
                        <div class="introductory_text">
                            <center>
                                <h1>Hello, I'm <span class="name">Kobe Dumandan</span></h1>
                                <h1>and I am a <span id="autotype_txt" class="orange_txt typewriter"></span></h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</body>

<script>
    var typed = new Typed('.typewriter', {
    strings: ['Programmer', 'Designer', 'Student', 'Developer', 'Game Enthusiast'],
    typeSpeed: 125,
    backSpeed: 80,
    loop: true
    })
</script>

</html>