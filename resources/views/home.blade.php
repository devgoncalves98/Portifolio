@extends('layouts.main')
@section('title','home')
@section('content')
  <!-- PARTE DOS CARDS-->
  <div class="container-lg bg-dark">
    <h3 class=" text-lg-center text-light">MEUS CONHECIMENTOS:</h3>
    <div class="row align-content-md-center">
      <div class="col-lg d-md-flex justify-content-around bg-dark">
        <div class="card text-center border-danger" style="width: 18rem;">
          <img src="/img/laravel.jpg" class="card-img-top" alt="Laravel">
          <div class="card-body bg-dark">
            <h5 class="card-title text-light">Laravel Developer</h5>
            <p class="card-text text-light">Comecei a usar o laravel em 2022 para auxiliar nos projetos do Conselho Federal de Farmacia</p>
            <p class="card-text text-light">Progresso</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"></div>
            </div>
            <p></p>
            <a href="#" class="btn btn-primary">Ver Projetos</a>
          </div>
        </div>
        <div class="card text-center border-danger" style="width: 18rem;">
          <img src="/img/laravel.jpg" class="card-img-top" alt="Laravel">
          <div class="card-body bg-dark">
            <h5 class="card-title text-light">Make excelent forms</h5>
            <p class="card-text text-light">Sei como produzir e melhroar formularios e registro para empresas que necessitam</p>
            <p class="card-text text-light">Progresso</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"></div>
            </div>
            <p></p>
            <a href="./form" class="btn btn-primary">Ver Projetos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PARTE DO SOBRE-->
  <div class="container-md mt-4 bg-dark">
    <div class="card border-dark mb-3 bg-dark">
      <img src="img/Aboutme.jpg" class="img-fluid mx-auto d-block" alt="aboutme">
      <div class="card-body">
        <h3 class="card-title text-center text-light">Sobre Mim</h3>
        <h5 class="card-text text-light text-center">Sou um aspirante a Desenvolvedor, busco sempre expandir meus conhecimentos em diversas linguagens de programação e como mesclar elas para criar funcionalidades cada vez melhores.
          Sou universitario da Universidade do Distrito Federal e estou na reta final para terminar minha graduação em Ciencias da Computação</h5>
      </div>
    </div>
  </div>
  <!-- PARTE DAS LINGUAGENS-->
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-auto bg-dark ">
        <img class="bg-dark img-fluid" src="img/html_icon.png" width="75rem" alt="html">
      </div>
      <div class="col-md-auto bg-dark">
        <img class="bg-dark img-fluid" src="img/html_icon.png" width="75rem" alt="html">
      </div>
      <div class="col-md-auto bg-dark">
        <img class="bg-dark img-fluid" src="img/html_icon.png" width="75rem" alt="html">
      </div>
      <div class="col-md-auto bg-dark">
        <img class="bg-dark img-fluid" src="img/html_icon.png" width="75rem" alt="html">
      </div>
      <div class="col-md-auto bg-dark">
        <img class="bg-dark img-fluid" src="img/html_icon.png" width="75rem" alt="html">
      </div>
    </div>
  </div>

@endsection