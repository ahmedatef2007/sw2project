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


            <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Uploaded Books</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                              <th>Book Name</th>
                              <th>Author</th>
                              <th>Cost</th>
                              <th>uploaded at</th>
                              
                              <th>view</th>
                              <th>Download</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($uploaded_books as $book )
                                
   
                          <tr>
                              <td>{{ $book->name }}</td>
                              <td>{{ $book->author  }}</td>
                              <td>$ {{ $book->cost  }}</td>
                              <td>{{ $book->created_at }}</td>

                              <td><a target="_blank" href="{{ url('viewbook',$book->id) }}" type="button" class="btn btn-dark btn-icon-text">
                                View
                                <i class="mdi mdi-file-check btn-icon-append"></i>                          
                              </a></td>

                              <td><a  href="{{ url('downloadbook',$book->file_path) }}" type="button" class="btn btn-info btn-icon-text">
                                Download
                                <i class="mdi mdi-printer btn-icon-append"></i>                                                                              
                              </a></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
@include('user.footer')
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
