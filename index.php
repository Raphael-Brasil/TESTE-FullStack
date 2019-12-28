<!doctype html>
<html ng-app lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Angularjs -->
    <script src="angularjs/angular.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="/fontawesome/css/all.css" rel="stylesheet">
    <title>TESTE – VAGA DE DESENVOLVEDOR FULL-STACK</title>
  </head>
  <body>
  <div>
    <label>Teste: </label>
    <input type="text" ng-model="yourName" placegolder="Enter a name here">
    <hr>
    <h1>Hello {{yourName}}!</h1>
  </div>
  <div class="container">
  <div class="row row-cols-3">
    <div class="col">Column</div>
    <div class="col">{{yourName}}</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
<i class="fas fa-user"></i> <!-- uses solid style -->
  <i class="far fa-user"></i> <!-- uses regular style -->
  <i class="fal fa-user"></i> <!-- uses light style -->
  <!--brand icon-->
  <i class="fab fa-github-square"></i> <!-- uses brands style -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>