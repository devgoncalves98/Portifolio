<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{url('/css/style.css')}}">
  <title>@yield('title')</title>
</head>

<body class="bg-dark">
  <!-- PARTE DA NAVBAR-->
  <div class="bg-purple header-style">
    <div class="row align-items-center text-lg-center">
      <div class="col">
        <h5 class=" text-light">MEU PORTIFÓLIO WEB</h5>
      </div>
    </div>
  </div>
  @yield('content')
  <!-- PARTE DO RODAPÉ-->
  <div class="bg-purple mt-5">
    <footer class="footer">
      <div class="row">
        <div class="col">
          <h5 class="card-text text-light text-center">BOM DIA</h5>
        </div>
        <div class="col">
          <h5 class="card-text text-light text-center">BOM DIA</h5>
        </div>
        <div class="col">
          <h5 class="card-text text-light text-center">BOM DIA</h5>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>