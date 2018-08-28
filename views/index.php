<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Heat players contest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Heats Free Shots Contest</h1>
                <p>The game #<?= Game::$match ?> of the <?= Game::$season ?> season has started</p>
                <table class="table table-striped">
                    <?php foreach(Game::$team as $player) { ?>
                        <tr>
                            <td><?= $player->name ?></td>
                            <td><?= $player->score ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
