@extends('layouts.app')
@section('content')
<div class="page-header section-dark" style="background-image: url('./img/moon.jpg')">
  <div class="filter"></div>
  <div class="content-center">
    <div class="container">
      <div class="title-brand">
        <h3 class="presentation-title">Basura Espacial</h3>
        <div class="fog-low">
          <img src="./assets/img/fog-low.png" alt="">
        </div>
        <div class="fog-low right">
          <img src="./assets/img/fog-low.png" alt="">
        </div>
      </div>
      <h2 class="presentation-subtitle text-center">¿Sabemos cuánta basura rodea nuestro planeta?</h2>
    </div>
  </div>
  <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
  <h6 class="category category-absolute">Designed and coded by
    <a href="https://www.creative-tim.com" target="_blank">
      <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo">
    </a>
  </h6>
</div>

<!--
<div class="py-4" >
  <div class="col-10 mx-auto">
    <div class=" mt-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-7 px-0">
          <div id="regForm">
            <div class="all-steps" id="all-steps"> 
              <span class="step">
                <i class="fas fa-satellite-dish"></i>
              </span> 
              <span class="step">
                <i class="fas fa-satellite"></i>
              </span> 
              <span class="step">
                <i class="fas fa-globe-europe"></i>
              </span>
              <span class="step">
                <i class="fas fa-atlas"></i> 
              </span> 
              <span class="step">
                <i class="fas fa-broadcast-tower"></i>
              </span> 
              <span class="step">
                <i class="fas fa-globe" aria-hidden="true"></i>
              </span> 
            </div>
            <div class="tab">
              <h5>INTRODUCCIÓN</h5>
              <p> La basura espacial son desechos de naves espaciales abandonadas, 
                soportes para múltiples cargas, desechos liberados intencionalmente durante
                las misiones espaciales<a class="h6" href="{{route('introduction')}}"> …Saber más</a>
              </p>
            </div>
            <div class="tab">
              <h5>SITUACIÓN ACTUAL</h5>
              <p>Desde el comienzo de la era espacial en 1957, se han lanzado toneladas de cohetes, naves e instrumentos al espacio <a class="h6" href="{{route('actual.situation')}}"> …Saber más</a></p>
            </div>
            <div class="tab">
              <h5>PROBLEMÁTICAS</h5>
              <p>La continua generación de basura espacial acabará provocando que la densidad de los objetos en la órbita baja terrestre sea lo bastante elevada como para que
                <a class="h6" href="{{route('problem')}}"> …Saber más</a></p>
              </p>
            </div>
            <div class="tab">
              <h5>POSIBLES SOLUCIONES</h5>
              <p>Aunque el problema sigue creciendo, al menos ya somos conscientes de que existe y podemos empezar a buscar soluciones para resolverlo. La UNOOSA
                (Oficina de las naciones unidas para asuntos del espacio exterior) tiene una serie de directrices
                 y normas que especifican cómo obtener un uso sostenible del espacio <a class="h6" href="{{route('solutions')}}"> …Saber más</a></p>
            </div>
            <div class="tab">
              <h5>CONCLUSIÓN</h5>
              <p>Todos usamos internet, hacemos llamadas telefónicas, usamos el gps y 
                consultamos el tiempo que va a hacer mañana, todos somos partícipes puesto que usamos estos servicios a diario…</p>
            </div>
            <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
              <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
            </div>
            <div style="overflow:auto;" id="nextprevious">
              <div style="float:right;"> 
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">
                  <i class="fa fa-angle-double-left"></i>
                </button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">
                  <i class="fa fa-angle-double-right"></i>
                </button> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<div class="container  my-3" id="info_slider">
    <h2 class="font-weight-light text-center pb-2">catchi title here</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                          <h5>INTRODUCCIÓN</h5>
                          <p> La basura espacial son desechos de naves espaciales abandonadas, 
                            soportes para múltiples cargas, desechos liberados intencionalmente durante
                            las misiones espaciales...<br>
                            <a class="h6" href="{{route('introduction')}}">Saber más >></a>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                          <h5>SITUACIÓN ACTUAL</h5>
                          <p>Desde el comienzo de la era espacial en 1957, se han lanzado toneladas de cohetes, naves e instrumentos al espacio <br>
                           <a class="h6" href="{{route('actual.situation')}}"> Saber más >></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                          <h5>PROBLEMÁTICAS</h5>
                          <p>La continua generación de basura espacial acabará provocando que la densidad de los objetos en la órbita baja terrestre sea lo bastante elevada como para que las colisiones...<br>
                            <a class="h6" href="{{route('problem')}}">Saber más >></a></p>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                          <h5>POSIBLES SOLUCIONES</h5>
                          <p>Aunque el problema sigue creciendo, al menos ya somos conscientes de que existe y podemos empezar a buscar soluciones para resolverlo. La UNOOSA
                            (Oficina de las naciones unidas para asuntos del espacio exterior) tiene una serie de directrices
                            y normas que especifican cómo obtener un uso sostenible del espacio..<br> <a class="h6" href="{{route('solutions')}}"> Saber más >></a>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                          <h5>CONCLUSIÓN</h5>
                          <p>Todos usamos internet, hacemos llamadas telefónicas, usamos el gps y 
                            consultamos el tiempo que va a hacer mañana, todos somos partícipes puesto que usamos estos servicios a diario...<br>
                            <a class="h6" href="{{route('conclusion')}}">Saber más >></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

@endsection

@section('script')

<!---SCRIPT -->
<script>
  var currentTab = 0;
  document.addEventListener("DOMContentLoaded", function(event) {
    showTab(currentTab);
  });

  function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    } else {
      document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
    }
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {

      document.getElementById("nextprevious").style.display = "none";
      document.getElementById("all-steps").style.display = "none";
      document.getElementById("register").style.display = "none";
      document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
  }

  function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
      if (y[i].value == "") {
        y[i].className += " invalid";
        valid = false;
      }
    }
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
  }

  function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
  }
</script>

<script>
  $('#recipeCarousel').carousel({
    interval: 10000
  })

  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 3;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });
</script>

@endsection
