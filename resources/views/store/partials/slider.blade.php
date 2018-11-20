<style>
.slider{ 
  color: black;
  font-size: 100px;
  padding: 0;
  margin: 0;
}
.slidertitle{
  color: black;
  font-size: 65px;
}
.slidertitle2{
  color: white;
  font-size: 65px;
}
.slidertext{
  color: black;
  font-size: 50px;
}

    </style>
<div id="slider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item active" style="height: 100vh">
        <img class="d-block w-100" src="images/slider-1.jpg" alt="First slide">
        <div class="carousel-caption slider">
        <p class="slidertitle"> <b> TIENDA </b> </p>
         <p class="slidertext">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p><br><br>
        </div>
      </div>
      <div class="item" style="height: 100vh">
        <img class="d-block w-100" src="images/slider-2.jpg" alt="Second slide">
        <div class="carousel-caption slider">
         <p class="slidertitle2"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></p><br>
        </div>
      </div>
      <div class="item" style="height: 100vh">
        <img class="d-block w-100" src="images/slider-3.jpg" alt="Third slide">
        <div class="carousel-caption slider">
         <p class="slidertitle"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b></p>
    <br><br><br>
        </div>
      </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div><hr>