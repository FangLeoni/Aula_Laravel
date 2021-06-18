<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão do Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src=""></script>
</head>
<body>
    <header>
        <h1>Site da Etec</h1>
    </header>
    <section class="menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Programação</a></li>
        </ul>
    </section>

    <section class="content">
        @yield('leitura')
        @yield('registro')
        @yield('create')
        @yield('edit')
    </section>

    <script src="/js/delete.js"></script>
</body>
</html>

