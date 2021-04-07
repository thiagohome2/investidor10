<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Investidor 10</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

      <style>
      .push-top {
         margin-top: 50px;
      }

      .col{
         margin-bottom: 28px;
      }
      .navbar-brand {
         margin-right: 31rem !important;
      }
      .im-curve{
         
         
         border-top-left-radius: 30px;
         border-bottom-left-radius: 30px;
         border-right: none;
      }
      .bt-curve{
         border-top-right-radius: 30px;
         border-bottom-right-radius: 30px;
         background-color: #fff;
         border-color: #ced4da !important;
         border-left: none;
      }
      html {
      position: relative;
      min-height: 100%;
      }
      body {
      margin-bottom: 60px;
      background-color: #f5f5f5;
      }
      .bg-light {
         background-color: #d4d4d4 !important;
      }
      .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      right: 0;
      height: 60px;
      line-height: 60px; 
      background-color: #d4d4d4;
      }

      code {
      font-size: 80%;
      }

      </style>
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Nono exemplo de barra de navegação">
         <div class="container-xl align-items-md-center">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Alternar de navegação">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-text-left" id="navbarsExample07XL">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link" href="{{url('news/create')}}">CADASTRAR NOTÍCIAS</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page"  href="{{url('news')}}">EXIBIR NOTÍCIAS</a>
               </li>
            </ul>
            <form class="bd-search position-relative me-auto" method="get" action="{{url('news')}}">
               <div class="input-group">
                  <input class="form-control im-curve" name="search" type="text" placeholder="Procurar" aria-label="Procurar">
                  <button class="btn btn-outline-secondary bt-curve" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
               </div>
            </form>
            </div>
         </div>
      </nav>
      </header>
      <div class="container">
         @yield('content')
      </div>
      <footer class="footer bg-light text-center">      
            <span class="text-muted">DESENVOLVIDO POR THIAGO DE OLIVEIRA</span>
      </footer>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

   </body>
</html>