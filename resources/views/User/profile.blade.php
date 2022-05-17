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
        @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }} </div>
        @endif

        <div class="content-wrapper">

            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">User details</h4>
                      <div style="margin-bottom: 70px;">
                        <img width="200px" height="200px" src="{{ asset("temp/images/faces/" . $cur_user->profile_photo_path) }}" alt="">
                      </div>
    
                      <div>
                        <h3>Name : <span>{{ $cur_user->name }}</span></h3>
                        <br>
                        <br>
                        
                        <h3>Email : <span>{{ $cur_user->email }}</span></h3>
                        <br>
                        <br>
                        <h3>Phone : <span>{{ $cur_user->phone }}</span></h3>
                        <br>
                        <br>
                        <h3>Address : <span>{{ $cur_user->address }}</span></h3>
                        <br>
                        <br>
                        
    
                      </div>
    
                      
    
                      <h1></h1>
    
    
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 style="display: inline-block;" class="card-title">My Books</h4>
                      <a style="float: right;" href="uploadbook.html" class="btn btn-primary">Upload new book</a>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                              Book name
                              </th>
                              <th>
                                Author
                              </th>
                              <th>
                                Cost
                              </th>
                              <th>
                                 Uploaded at
                              </th>
    
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($user_uploaded_books as $book )
                                  
                              
                            <tr>
                              <td>
                                {{ $book->name }}
                              </td>
                              <td>
                                {{ $book->author }}
                              </td>
                              <td>
                            {{ $book->cost }}
                              </td>
                              <td>
                                {{ $book->created_at }}
                              </td>
                            </tr>
                            @endforeach
    
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">My Sales</h4>
    
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                              Book name
                              </th>
                              <th>
                                Author
                              </th>
                              <th>
                                Cost
                              </th>
                              <th>
                                 Transiction date
                              </th>
                              <th>
                                Buyer
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($user_sales as $transaction)
                                  
                              
                            <tr>
                              <td>
                                {{ App\Models\Book::find($transaction->book_id)->name }}
                              </td>
                              <td>
                                {{ App\Models\Book::find($transaction->book_id)->author }}
                              </td>
                              <td>
                                $ {{ App\Models\Book::find($transaction->book_id)->cost }}
                              </td>
                              <td>
                                {{ $transaction->created_at }}
                              </td>
                              <td class="py-1">
                               <a href=""><img src="temp/images/faces/face1.jpg" alt="image"/></a> 
                              </td>
                            </tr>
                            @endforeach
    
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">My purchases</h4>
    
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>
                              Book name
                              </th>
                              <th>
                                Author
                              </th>
                              <th>
                                Cost
                              </th>
                              <th>
                                 Transiction date
                              </th>
                              <th>
                                Seller
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                Herman Beck
                              </td>
                              <td>
                                Herman Beck
                              </td>
                              <td>
                                $ 77.99
                              </td>
                              <td>
                                20-11-2022
                              </td>
                              <td class="py-1">
                               <a href=""><img src="../../images/faces/face1.jpg" alt="image"/></a> 
                              </td>
                            </tr>
    
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
