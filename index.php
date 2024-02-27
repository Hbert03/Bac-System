<?php include('header.php'); ?>

<nav class="navbar navbar-expand-lg" style="background-color:#1E73BE; margin-top:0.1em;" >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-center">
      <li class="nav-item d-flex">
          <a style="font-size:14px; color:white" class="nav-link " href="https://depedldn.com/">HOME</a>
        </li>
         <li class="nav-item d-flex">
          <a style="font-size:14px; color:white" class="nav-link active" href="#">RESULT OF THE OPENING OF BIDS</a>
        </li>
        <li  class="nav-item d-flex">
          <a style="font-size:14px; color:white" class="nav-link" href="publicbidding.php">PUBLIC BIDDING</a>
        </li>
        <li class="nav-item">
          <a style="font-size:14px; color:white" class="nav-link" href="noticetoproceedpb.php">NOTICE TO PROCEED-PUBLIC BIDDING</a>
        </li>
        <li class="nav-item">
          <a style="font-size:14px; color:white" class="nav-link" href="noticetoproceedam.php">NOTICE TO PROCEED-ALTERNATIVE MODE</a>
        </li>
        <li class="nav-item">
          <a style="font-size:14px; color:white" class="nav-link" href="minutesofbac.php">MINUTES OF THE BAC MEETING</a>
        </li>
        <li class="nav-item">
          <a style="font-size:14px; color:white" class="nav-link" href="alternativemode.php">ALTERNATIVE MODE OF PROCUREMENT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="wrapper">
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card text-center ">
            <div class="card-header">
              <h3 class="card-title">RESULT OF THE OPENING OF BIDS</h3>
            </div>
            <div class="card-body card-body-success ">
              <div class="table-responsive">
                <table id="showTable" class="table table-bordered table-striped" style="border:1px solid gray; overflow-x:hidden">
                  <thead>
                    <tr>
                      <th>File Name</th>
                      <th>Date Upload</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody  style="font-family: 'Oswald', sans-serif; font-optical-sizing: auto; font-weight: <weight>; font-style: normal;">
                    <!-- Table body content goes here -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
<?php include('footer.php'); ?>
