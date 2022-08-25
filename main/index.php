<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img src="https://play-lh.googleusercontent.com/UrY7BAZ-XfXGpfkeWg0zCCeo-7ras4DCoRalC_WXXWTK9q5b0Iw7B0YQMsVxZaNB7DM" alt="spotify-logo" />
    </header>

    <div id="root">
        <main>
            <div class="container py-5">
                <div class="row text-white justify-content-between g-4">
                    <?php
                    for ($i = 0; $i < count($albums); $i++) {
                        echo '<div class="d-flex flex-column justify-content-start align-items-center text-center">
                        <img src="' . $albums[$i]['poster'] . '" alt="' . $albums[$i]['poster'] . '">
                        <h3 class="text-uppercase">' . $albums[$i]['title'] . '</h3>
                        <span>' . $albums[$i]['artist'] . '</span>
                        <span>' . $albums[$i]['year'] . '</span>
                    </div>';
                    }
                    ?>
                </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./main.js"></script>
</body>

</html>