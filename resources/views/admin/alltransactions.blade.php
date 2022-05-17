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
                    <p class="card-title">All transactions</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                            <th>
                                ID
                                </th>
                                <th>
                                  Book name
                                </th>
                                <th>
                                  Cost
                                </th>
                                <th>
                                  Date
                               </th>
                                <th>
                                  Buyer
                                </th>
                                <th>
                                  Seller
                                </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($trans as $tran )
                                
   
                          <tr>
                              <td>{{ $tran->id }}</td>
                              <td>{{ App\Models\Book::getBookNameById($tran->book_id) }}</td>
                              <td>$ {{ App\Models\Book::getBookCostById($tran->book_id) }}</td>
                              <td>{{ $tran->created_at }}</td>
                              <td><a href="/userDetails/{{ $tran->buyer_id }}"><img src="temp/images/faces/face3.jpg"  alt="image"></a></td>
                              <td><a href="/userDetails/{{ $tran->seller_id }}"><img src="temp/images/faces/face3.jpg"  alt="image"></a></td>

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
