<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>jobify.com</title>
    <link href="https://localhost/jobPrep/css/styles.css" rel="stylesheet" type="text/css" />
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
            <li class="nav-item">
              <a class="nav-link" href="#">Preparation</a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/jobPrep/search/" class="nav-link">Search
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
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
                  <button type="button" class="btn btn-primary">
                    Save changes
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!--Quote-->
    <div style="padding: 5px;">
      <b>
      This website has been developed by Encoders for TSEC-Hacks 2021
      <br>
      All code has been developed by the team members of Encoders and uses open source frameworks. You are not allowed to copy/use any part of this website without prior permission. 
      <br>
      team members:
      <br>
      Nimit Jhunjhunwala
      <br>
      Keyul Jain
      <br>
      Atmaj Koppikar
      <br>
      Jaden Furtado
      </b>
    </div>
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