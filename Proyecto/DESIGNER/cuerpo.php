<!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body>

      <!----------------carrusel-------------->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <img src="IMG/car1.jpg" alt="">
                  <div class="carousel-caption">
                      <h3>First Slide</h3>
                      <p>This is the first image slide</p>
                  </div>
              </div>

              <div class="item">
                  <img src="IMG/car2.jpg" alt="">
                  <div class="carousel-caption">
                      <h3>Second Slide</h3>
                      <p>This is the second image slide</p>
                  </div>
              </div>

              <div class="item">
                  <img src="IMG/car3.jpg" alt="">
                  <div class="carousel-caption">
                      <h3>Third Slide</h3>
                      <p>This is the third image slide</p>
                  </div>
              </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
      <!--fin carrusel-->
      
                <form role="form">
                    <div class="form-group input-group" style="height:50%; padding-left: 50px; padding-right: 50px;">
                        <input type="text" class="form-control btn-light" id="inputBuscar" placeholder="Buscar" style="background-color: #f5f5f5; color: #000000;">
                        <samp style="padding-left: 50px;"></samp>
                        <div class="form-group">
                            <select id="formInput25" class="form-control btn-light" style="background-color: #f5f5f5; color: #000000;">
                                <option>Todos</option>
                                <option>Pollerias</option>
                                <option>Restaurantes</option>
                            </select>
                        </div>
                        <samp style="padding-left: 50px;"></samp>
                        <button type="submit" class="btn btn-light" style="height: 100%; background-color: #f5f5f5; color: #000000;">Buscar</button>
                    </div>
                </form>
            </div>
            <!-- Jumbotron -->
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor 						mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 						mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-primary" href="#" role="button" style="background-color: #1abc9c;">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor 						mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 						 mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-primary" href="#" role="button" style="background-color: #1abc9c;">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id 						ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris 								condimentum nibh, ut fermentum massa.</p>
                    <p><a class="btn btn-primary" href="#" role="button" style="background-color: #1abc9c;">View details »</a></p>
                </div>
            </div>
            <!-- Site footer -->
            <footer class="footer">
                <p>© Foched 2018</p>
            </footer>
        </div>
