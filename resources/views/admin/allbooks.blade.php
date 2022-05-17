<!DOCTYPE html>
<html lang="en">

@include('admin.header')
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
@include('admin.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">


            <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">All Books</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                              <th>Book Name</th>
                              <th>Author</th>
                              <th>Cost</th>
                              <th>Uploaded at</th>
                              <th>Seller</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book )
                                
   
                          <tr>
                              <td>{{ $book->name }}</td>
                              <td>{{ $book->author }}</td>
                              <td>$ {{ $book->cost }}</td>
                              <td>{{ $book->created_at }}</td>
                              <td><a href="/AdminUserDetails/{{ $current_user->id }}"><img src="temp/images/faces/face3.jpg"  alt="image"></a></td>

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
@include('admin.footer')
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
