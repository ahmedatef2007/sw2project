<!DOCTYPE html>
<html lang="en">

@include('user.header')
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
@include('user.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
@include('user.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


          <div class="row">

  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Book</h4>
                    <p class="card-description">
                      Book Details
                    </p>
                    <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{ url('uploadBook') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Book Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="book_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Author Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="author_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Book Cost</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Name" name="cost">
                      </div>
  
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="book" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Book">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">ADD</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>




          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@include('user.footer')
<script src="temp/js/file-upload.js"></script>
</body>

</html>

