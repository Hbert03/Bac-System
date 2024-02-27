<?php
include('class.php');
include('../includes/header.php');



?>
<nav class="navbar navbar-expand-lg" style="background-color:#1E73BE; margin-top:0.1em;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white"><b>ADMIN</b></a>
    <button type="button" class="btn btn-danger btn-sm float-end" onclick="Logout()"><i class="fas fa-arrow-right"></i> </button>
  </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">ADD FILES</h2>
      </div>
      <div class="modal-body">
<form action="function.php" method="POST" enctype="multipart/form-data">
  <label for="examDropdown"></label>
  <select style="font-weight:bold" class="form-select" aria-label="Default select example" name="file" required >
    <option style="font-weight:bold" value="" disabled selected>Select Category</option> 
    <?php
    $data = new FilesData();
    $getfiles = $data->getFiles();
    foreach ($getfiles as $files):
      if ($files["bac_list"] !== null):
    ?>
    <option style="font-weight:bold" value="<?php echo $files["id"]; ?>">
      <?php echo $files["bac_list"]; ?>
    </option>
    <?php 
      endif;
    endforeach; ?>
  </select>
  <div class="input-group mt-2 mb-2 ">
  <input style="font-weight:bold" type="file" class="form-control" name="fileUpload[]" id="inputGroupFile01" multiple>
  </div>
  <div class="text-center">
<button type="submit" name="submit" class="btn btn-primary " >Save</button>
  </div>
</form> 
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<div class="wrapper">
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card text-center ">
            <div class="card-header">
              <h3 class="card-title">
                <span>
                  <button type="button" class="btn btn-primary btn-sm float-start " data-toggle="modal" data-target="#exampleModal">
                    ADD FILES <i class="fa fa-plus"></i>
                  </button>
                </span>
              </h3>
            </div>
            <div class="card-body card-body-success ">
              <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped" style="border:1px solid gray;">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>File Name</th>
                      <th>Date Upload</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody style="font-family:'Oswald', sans-serif; font-optical-sizing: auto; font-weight: <weight>; font-style: normal; ">
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

<?php 
include('../includes/footer.php');
?>
