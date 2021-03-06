<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner fondo_carrusel" role="listbox">
    <div class="item active">
      <img src="{{ URL::asset('images/carrusel/1.jpg') }}" alt="Soutache" class="center-block">
      <div class="carousel-caption hidden-xs">
        <h3><i>Soutache</i></h3>
        <p><i>Nombre del accesorio</i></p>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::asset('images/carrusel/2.jpg') }}" alt="Soutache" class="center-block">
      <div class="carousel-caption hidden-xs">
        <h3><i>Soutache</i></h3>
        <p><i>Nombre del accesorio</i></p>
      </div>
    </div>
    <div class="item">
      <img src="{{ URL::asset('images/carrusel/3.jpg') }}" alt="Soutache" class="center-block">
      <div class="carousel-caption hidden-xs">
        <h3><i>Soutache</i></h3>
        <p><i>Nombre del accesorio</i></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>