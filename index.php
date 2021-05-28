<!DOCTYPE html>

<html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Home</title>
    </head>

    <body>
      <!--nav section-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
        <a href="../index.html" class="navbar-brand" style="color: #DA6419">My Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav">
                    <li class="navbar-item active"><a href="../about.html" class="nav-link" style="color: #28A3B6">About</a></li>
                    <li class="navbar-item"><a href="../portfolio.html" class="nav-link" style="color: #28A3B6">Portfolio</a></li>
                    <li class="navbar-item"><a href="../contact.html" class="nav-link" style="color: #28A3B6">Contact</a></li>
                </ul>
            </div>
        </nav>

    <!--Header Section-->
    <header class="mainHeader">
      <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center text-center text-white" style="background-color: rgba(0, 0, 0, 0.2);">
          <div class="col-lg-8">
            <h1 class="display-1 font-weight-bold">John <span class="font-weight-light">Finnegan</span></h1>
            <hr class="bg-white my-5" />
            <p class="font-weight-light display-4" id="headerPara">
            Web Developer & Designer
            </p>
            <a href="../about.html" class="btn btn-lg mt-3" id="headBtn">Find Out More</a><br>
          </div>
        </div>
      </div>
    </header>
    
      
    <!--About Section-->
    
    <section id="about">
      <div class="container">
        <div class="row align-items-left justify-content-left text-left py-5">
          <!--Headshot Image-->
          <div class="col-6 col-md-4">
            <img src="https://images.equipboard.com/uploads/user/image/19660/big_john-finnegan.jpg?v=1610464096" alt="My Headshot" class="img-fluid" />
          </div>
          <!--ABOUT PARAGRAPH-->
            <div class="col-lg-8 my-3">
              <h2 class="font-weight-bold">About<span class="font-weight-light">Me</span></h2>
              <hr class="my-5" />
              <p class="font-weight-light">
                Hi! My name is John and I want to work for you! I have a passion for problem solving and bringing beautiful design and functionality to your websites. 
                I approach everyday as an oppurtunity to extend my knowledge, and I look forward to bringing my hunger and creativity to your team...
              </p>
              <a href="../contact.html" class="btn btn-lg mt-3" id="contactBtn">Contact Me</a>
            </div>
        </div>
      </div>
    </section>

    <!--Portfolio Section-->
    <section id="portfolio">
      <div class="container-fluid py-5">
          <div class="row text-white text-center">
              <div class="col">
                  <h2 class="display-4 font-weight-bold">Portfolio</h2>
                  <hr class="bg-white mb-5">
              </div>
          </div>

          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
          <!--Portfolio Item-->
              <div class="col mb-4">
                  <div class="card bg-light text-center border-light shadow h-100">
                      <!--Card Image-->
                      <img src="resources/poster-mizra-copy-04.png" alt="graphic design 3-D image" class="card-img-top" style="object-fit: cover; height: 15em;">
                      <div class="card-body">
                          <h3 class="card-title">3-D Extrude & Bevel/Shading</h3>
                          <hr class="bg-primary">
                          <p class="card-text">Adobe Illustrator & Photoshop.</p>
                          <div class="card-footer">
                              <a href="../portfolio.html" class="btn btn-lg btn-primary">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Portfolio Item End-->
              <div class="col mb-4">
                  <div class="card bg-light text-center border-light shadow h-100">
                      <!--Card Image-->
                      <img src="resources/pancake-balls.jpg" alt="graphic design 3-D image" class="card-img-top" style="object-fit: cover; height: 15em;">
                      <div class="card-body">
                          <h3 class="card-title">3-D Extrude & Bevel/Shading</h3>
                          <hr class="bg-primary">
                          <p class="card-text">Adobe Illustrator & Photoshop.</p>
                          <div class="card-footer">
                            <a href="../portfolio.html" class="btn btn-lg btn-primary">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Portfolio Item End-->
              <div class="col mb-4">
                  <div class="card bg-light text-center border-light shadow h-100">
                      <!--Card Image-->
                      <img src="resources/Salt-Lake-Brain.jpg" alt="a city within a face" class="card-img-top" style="object-fit: cover; height: 15em;">
                      <div class="card-body">
                          <h3 class="card-title">A City Within A Face</h3>
                          <hr class="bg-primary">
                          <p class="card-text">Adobe Photoshop</p>
                          <div class="card-footer">
                            <a href="../portfolio.html" class="btn btn-lg btn-primary">Learn More</a>
                          </div>
                      </div>
                  </div>
                  <a href="../portfolio.html" class="btn btn-lg mt-3" id="portBtn">See More of my Portfolio</a>
              </div>
              
              <!--Portfolio Item End-->
          </div> 
      </div>
    </section>
    
    
    <!--footer section-->

    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-right text-white footer">Copyright &copy; John's Website 2021</p>
      </div>
    </footer>

    <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="JS/JavaScript.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
