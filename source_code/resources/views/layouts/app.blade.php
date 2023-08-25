<html>
    <head>
        <title>@yield('pageTitle') | Ikumochu</title>
        <!-- Jquery Min JS -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        {{-- App CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- APP JS --}}
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    </head>


    <nav class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;              Ikumochu</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="/dashboard">Dashboard</a>
              </li>
              <li><a href="/datasets">Datasets</a></li>
              <li><a href="/dataset/contexts">Dataset Contexts</a></li>
              <li><a href="/process/dataset">Process Dataset</a></li>
             
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Login</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
      </nav>


    <body>
        @yield("content")
    </body>
</html>