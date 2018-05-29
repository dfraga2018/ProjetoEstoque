<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Controle de Estoque</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($produtos as $p): ?>
                <tr>
                  <td><?= $p->nome ?></td>
                  <td><?= $p->valor ?></td>
                  <td><?= $p->descricao ?></td>
                  <td><?= $p->quantidade ?></td>
                  <td>
                    <a href="/produtos/mostra?id=<?= $p->id ?>">
                      Visualizar
                    </a>
                  </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
