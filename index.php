<?php session_start(); ?>

<!-- ---------------- -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>jobify.com</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Jobify</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://localhost/jobPrep/resources/">Resources</a>
            </li>
            <?php
            if(isset($_SESSION['user_id'])){
            ?> 
            <li class="nav-item">
              <a class="nav-link" href="https://localhost/jobPrep/preperation/?user_id=<?php echo $_SESSION['user_id']; ?>">Preparation</a>
            </li>
            <?php
          }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="search/">Search</a>
            </li>
            <?php if(!isset($_SESSION['user_id'])){
              ?>
            <li class="nav-item">
              <a class="nav-link" href="login/">Login</a>
            </li>
            <?php 
          }
          ?>
            <li class="nav-item">
              <a class="nav-link" href="about/">About</a>
            </li>
          </ul>
          <!--
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-sm btn-outline-primary" type="submit">
              Search
            </button>
          </form>
        -->
          <?php if(isset($_SESSION['user_id'])){  ?>
          <button
            type="button"
            class="btn"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            <i
              class="bi bi-person-circle"
              style="font-size: 2rem; padding: 0 1rem; color: #333a52"
            ></i>
          </button>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="progressing">Your profile is 30% complete</div>
                  <div class="progress" style="height: 1px">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                  <div class="progress" style="height: 20px">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Close
                  </button>
                  <button type="button" class="btn btn-primary v">
                    view profile
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php  } ?>
        </div>
      </div>
    </nav>
<script type="text/javascript">
  $(".v").click(function(){
    location.href="https://localhost/jobPrep/profile/?user_id=<?php echo $_SESSION['user_id']; ?>";
  });
</script>
    <!--Quote-->
    <div class="container">
      <div class="row">
        <div class='col-md-offset-2 col-md-8 text-center'>
        <h2>QTR: Quotes To Remember</h2>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-offset-2 col-md-8'>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>
            
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
            
              <!-- Quote 1 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="images/Confucius.jpg" style="width: 100px;height:100px;">
                      <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                    </div>
                    <div class="col-sm-9">
                      <p>Choose a job you love, and you will never have to work a day in your life</p>
                      <small>Confucius</small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="images/Arthur Ashe.jpg" style="width: 100px;height:100px;">
                    </div>
                    <div class="col-sm-9">
                      <p>One important key to success is self-confidence. An important key to self-confidence is preparation.</p>
                      <small>Arthur Ashe</small>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
                      <img class="img-circle" src="images/Katherine Whitehorn.jpg" style="width: 100px;height:100px;">
                    </div>
                    <div class="col-sm-9">
                      <p>Find out what you like doing best and get someone to pay you for doing it.</p>
                      <small>Katherine Whitehorn</small>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            
            <!-- Carousel Buttons Next/Prev 
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>-->
          </div>                          
        </div>
      </div>
    </div>

    <section style="padding: 2rem">
      <h2>Prepare for Interviews the smart way</h2>
    </section>
    <section>
      <div class="img-slider">
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel"
        >

        <!--Image Corousel Slides label indicator-->

          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="3"
              aria-label="Slide 4"
            ></button>
          </div>

          <!--Image Corousel Slides-->

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="images/getstarted.jpg"
                class="d-block w-60"
                alt="..."
                style="width: 70%; margin: auto"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Get Started!</h5>
                <p>
                  Some representative placeholder content for the first slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="images/resources.jpg"
                class="d-block w-60"
                alt="..."
                style="width: 70%; margin: auto"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Resources</h5>
                <p>
                  Some representative placeholder content for the second slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="images/preparation.jpg"
                class="d-block w-60"
                alt="..."
                style="width: 70%; margin: auto"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Preparations</h5>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="images/Jobs.jpg"
                class="d-block w-60"
                alt="..."
                style="width: 70%; margin: auto"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Jobs</h5>
                <p>
                  Some representative placeholder content for the fourth slide.
                </p>
              </div>
            </div>
          </div>

          <!--Image Corousel Buttons-->

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section style="padding: 2rem">
      <h2>Make your interview preparation rock solid</h2>
      <p>Let’s face it, interviews can be downright terrifying. A million questions race through your mind… <br><i>Do I look professional? Do I know what to say? Am I qualified enough? Will they like me? Will I accidentally put my foot in my mouth yet again?!
      </i><br>It’s all a bit overwhelming. But there’s good news: <br>Your interview woes are over. Kiss your sweaty palms, butterflies and shaky knees goodbye. It’s time to <b>ROCK YOUR INTERVIEW!</b>
      </p>
    </section>
    <section> 
      <h2>Hot Questions</h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="images/defaultquestion.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Questions asked by Microsoft</h5>
              <p class="card-text">
                A list of sample interview questions asked by Microsoft. Try them out to see how well you are prepared 
              </p>
              <a href="https://www.interviewbit.com/microsoft-interview-questions/" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/defaultquestion.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Java Questions</h5>
              <p class="card-text">
                Java is a timeless language. See the most common questions asked in interviews on Java. Try them out now. 
              </p>
              <a href="https://www.edureka.co/blog/interview-questions/java-interview-questions/" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/defaultquestion.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Data structures</h5>
              <p class="card-text">
                Data structures are integral to securing a job in the tech industry.See the top 40 interview questions of Data Structures.
              </p>
              <a href="https://www.interviewbit.com/data-structure-interview-questions/" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/defaultquestion.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Algorithm</h5>
              <p class="card-text">
                Brush up on the common questions asked in interviews on Algorithms and improve your chances of landing a job!
              </p>
              <a href="https://www.javatpoint.com/algorithm-interview-questions" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <hr>
      <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget subscribe no-box">
                  <h5 class="widget-title">Jobify<span></span></h5>
                  <p>Best Website for interview preparation.</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget no-box">
                  <h5 class="widget-title">Get Started<span></span></h5>
                  <p>
                    Get access to your full Training and Preparation fro
                    interviews.
                  </p>
                  <a class="btn btn-primary" href="https://localhost/jobPrep/login/" target="_blank">Register Now</a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget no-box">
                  <h5 class="widget-title">Contact Us<span></span></h5>

                  <p>
                    <a href="mailto:info@jobify.com" title="glorythemes">info@jobify.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class = "wrapper">
          <nav>
            <ul>
              <li>Home</li>
              <li>Resources</li>
              <li>Preparations</li>
              <li>Jobs</li>
              <li>About</li>
            </ul>
          </nav>
        </div>
        <br>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Copyright Jobify © 2021. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script src="js/trial.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
  </body>
</html>