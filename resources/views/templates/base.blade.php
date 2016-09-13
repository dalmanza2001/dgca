<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/jquery-ui.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('css/business-casual.css') !!}

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery-ui.js') !!}
    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('js/bootstrap.min.js') !!}

    @yield('script')

</head>

<body>
    <div class="brand">Dirección de Gestión y Control Ambiental</div>

    @yield('body')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Alejandra Mujica Villa 2015</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
