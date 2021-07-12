<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Donordashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/Donordashboard.js"></script>
    <title>Document</title>
</head>
<body>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <a class="navbar-brand" href="index.html">AI HackDot</a>
              <a class="navbar-brand" href="" ></a>
              <a class="navbar-brand" href="" ></a>
              <a class="navbar-brand" href="" ></a>
              <a class="navbar-brand"></a>
              <li class="nav-item active">
                <a class="nav-link" href="Index.php" style="padding-left: 50%; padding-right: 1%;">Logout <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" href="index.html">
            <a class="navbar-brand" ></a>
            <span class="navbar-brand" > Logout</span>
            </a>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <img src="img/Default image.png" class="img-thumbnail"  alt="Responsive image"alt="150x150" style="width: 150px; height: 150px; margin-left: 4vh;">
                <div><h6 style="color: aliceblue; "> <i class="fa fa-align-center" aria-hidden="true" style="margin-left: 6vh; margin-top: 1vh;">Ramesh Chavla</i></h6>
                </div>

                <a class="nav-link" href="index.html">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="BIStats1.html">
                  <i class="fa fa-fw fa-area-chart"></i>
                  <span class="nav-link-text">Charts</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content-wrapper">
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
              <div class="col-xl-3 col-sm-4 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">26 New Messages!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">11 New rewards!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3">

                  </a>
                </div>
              </div>
              <hr class="mt-2">
              <!--Form-->
              <div>
                <h4>Create donation post:</h4>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                  </div>
                  <!--Image-->
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Add Image</label>
                  </div>
                  <!--Description-->
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                  <!--Min max-->
                  <h6>Add minimum and maximum amount:</h6>
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Minimum">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Maximum">
                    </div>
                  </div>
                </form>

            </div>
            </div>
                <!-- Card Columns Example Social Feed-->
            <div class="col-lg-12">
                <div class="mb-0 mt-4">
                    <i class="fa fa-newspaper-o"></i> Posts </div>
                    <hr class="mt-2">
                    <div class="card-columns">
                    <!-- Example Social Card-->
                    <div class="card mb-3">
                    <a href="#">
                        <img class="card-img-top img-fluid w-100" src="img/Autorickshaw.jpg" alt="">
                    </a>
                <div class="card-body">
                    <h6 class="card-title mb-1"><a href="#">Ramesh Chavla</a></h6>
                    <p class="card-text small">A generuos request to all the donors i have been working hard to earn for my family and i have am collecting money for the same. Please do help me.
                    </p>
                </div>
                <hr class="my-0">
                <div class="card-body py-2 small">
                    <a class="mr-3 d-inline-block" href="#">
                    <i class="fa fa-fw fa-comment"></i>Message</a>
                </div>
                <hr class="my-0">
                <div class="card-body small bg-faded">
                    <div class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Please do keep us update about your progess, All the best!
                        <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">1 Like</a>
                        </li>
                        <li class="list-inline-item">·</li>
                        <li class="list-inline-item">
                            <a href="#">Reply</a>
                        </li>
                        </ul>
                        <div class="media mt-3">
                        <a class="d-flex pr-3" href="#">
                            <img src="http://placehold.it/45x45" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="mt-0 mb-1"><a href="#">Ramesh Chavla</a></h6>Sure!
                            <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">·</li>
                            <li class="list-inline-item">
                                <a href="#">Reply</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer small text-muted">Posted 32 mins ago</div>
                </div>
            </div>

                <!-- /Card Columns-->
              </div>
              <div class="col-lg-4">
                <!-- Example Notifications Card-->
              </div>
            </div>
              <div class="card-footer small text-muted" aria-hidden="true">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <!-- /.container-fluid-->
          <!-- /.content-wrapper-->
          <footer class="sticky-footer">
            <div class="container">
              <div class="text-center">
                <small>Copyright ©Accenturwebsite AI-Hack</small>
              </div>
            </div>
          </footer>
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
          </a>
          <!-- Logout Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
</body>
</html>