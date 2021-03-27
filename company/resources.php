<?php include('company.php') ;
$comp = new Company();
$data=$comp->get_company_details($_GET['company_id']);
  $arr=mysqli_fetch_array($data);
?>
<!-- ---------------->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>jobify.com</title>
    <link rel="stylesheet" href="/css/style.css" />
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
              <a class="nav-link" href="#">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Preparation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jobs</a>
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
    <section
      style="
        display: flex;
        justify-content: center;
        align-item: center;
        margin: auto;
      "
    >
      <div class="company-name">
        <div class="card mb-3" style="max-width: 35rem">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="/assets/companies/amazon.svg"
                alt="Amazon"
                style="display: flex; margin: auto"
                id="comp-logo"
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $arr['name'];  ?></h5>
                <p class="card-text">Product Based Company</p>
                <p class="card-text">Founded in 1994</p>
                <p class="card-text">Headquartered in United States</p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Average number of interviews per year</div>
            <div class="card-body">
              <p class="card-text">243</p>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 40%"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Average Hiring Percentage %</div>
            <div class="card-body">
              <p class="card-text">24 %</p>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="24"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 24%"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Average Package</div>
            <div class="card-body">
              <p class="card-text">15 - 20 LPA</p>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="70"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 70%"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Method of Interview</div>
            <div class="card-body">
              <p class="card-text">
                Phone Screen<br />
                Video Interview<br />
                Onsite<br />
                Offer Letter<br />
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Special notes from Company</div>
            <div class="card-body">
              <p class="card-text">
                Our interviews are rooted in behavioral-based questions which
                ask about past situations or challenges you’ve faced and how you
                handled them, using Leadership Principles to guide the
                discussion.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Average Working Hour per week</div>
            <div class="card-body">
              <p class="card-text">50-60 hours</p>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 85%"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section>
      <h4 class="text-center">Employee Experience</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
        $d=$comp->get_experience($_GET['company_id']);
         while($row=mysqli_fetch_array($d)){
         ?>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header"></div>
            <div class="card-body">
              <p class="card-text">
                <?php echo $row['experience']; ?>
              </p>
              <footer class="blockquote-footer">
                <cite title="Source Title"><?php echo $row['position']; ?></cite>
              </footer>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
      <!--
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Great Work Life balance</div>
            <div class="card-body">
              <p class="card-text">
                I have been at Amazon for almost 8 years. On a normal week, I
                come in at 9–9:30AM and leave at 5:30–6:30PM. Every single day.
                I take my kids to school most mornings and have dinner with them
                most nights.
              </p>
              <footer class="blockquote-footer">
                <cite title="Source Title">Chintu Hacker</cite>
              </footer>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 text-center">
            <div class="card-header">Great Work Life balance</div>
            <div class="card-body">
              <p class="card-text">
                I have been at Amazon for almost 8 years. On a normal week, I
                come in at 9–9:30AM and leave at 5:30–6:30PM. Every single day.
                I take my kids to school most mornings and have dinner with them
                most nights.
              </p>
              <footer class="blockquote-footer">
                <cite title="Source Title">Sonu Deliverboy</cite>
              </footer>
            </div>
          </div>
        </div>
      -->
      </div>

    </section>
    <hr />
    <section>
      <h4 class="text-center">Resources to prepare</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Amazon Assessment test</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="card-link">Resouces</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">SDE</h5>
              <p class="card-text">
                Work with designers and content producers. Write, modify, and
                debug software for server applications. Write code to create
                multi-threaded, networked server applications.
              </p>
              <a href="#" class="card-link">Resources</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">AWS</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="card-link">Resources</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section>
      <h4 class="text-center">Vacancies</h4>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Junior SDE</h5>
              <p class="card-text">
                Apply for Junior Software Development Engineer 
              </p>
              <a href="#" class="card-link">Apply now</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Senior Data Analyst</h5>
              <p class="card-text">
                Apply for Junior Software Development Engineer 
              </p>
              <a href="#" class="card-link">Apply now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section>
      <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
          <div class="container">
            <div class="row">
              <div class="col-xs-16 col-sm-8 col-md-4">
                <div class="widget subscribe no-box">
                  <h5 class="widget-title">Jobify<span></span></h5>
                  <p>Best Website for interview preparation.</p>
                </div>
              </div>

              <div class="col-xs-16 col-sm-8 col-md-4">
                <div class="widget no-box">
                  <h5 class="widget-title">Get Started<span></span></h5>
                  <p>
                    Get access to your full Training and Preparation fro
                    interviews.
                  </p>
                  <a class="btn btn-primary" href="#." target="_blank"
                    >Register Now</a
                  >
                </div>
              </div>

              <div class="col-xs-16 col-sm-8 col-md-4">
                <div class="widget no-box">
                  <h5 class="widget-title">Contact Us<span></span></h5>

                  <p>
                    <a href="mailto:info@jobify.com" title="glorythemes"
                      >info@jobify.com</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />

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
    <script src="script.js"></script>
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
