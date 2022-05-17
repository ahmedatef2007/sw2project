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
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    @auth
                    <h2>Welcome back {{ $current_user->name }} ,</h2>
                    @endauth

                    <p class="mb-md-0">Here are the last uploaded books</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Home&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Books</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
    
                  <a href="/addBook" class="btn btn-primary mt-2 mt-xl-0">Add a Book</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <ul id="myUL" style="display: inline-block">
@foreach ($books as $book)
  
<li style="width:300%">

            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Book Details</p>
                 <a href="#" style="text-decoration: none;"><h1 style="color: #6896ff">{{ $book->name }}</h1></a> 
                  <p class="card-title">Author Name : <span style="color: #6896ff">{{ $book->author }}</span></p>
                  <h4 style="margin-bottom: 30px">Cost : <span style="color: #6896ff">$ {{ $book->cost }}</span></h4>
                  <h5 style="margin-bottom: 10px">Seller :  <span style="margin-right: 20px; color:#6896ff"> {{ App\Models\User::find($book->user_id)->name  }}</span> <a href="/userDetails/{{ $book->user_id }}"><img style="border-radius: 50%" src="temp/images/faces/face3.jpg" alt="" width="36px" height="36px"></a> </h5>
                  <a href="purchaseBook/{{ $book->id }}" class="btn btn-primary mt-2 mt-xl-0">Purchase</a>
                  <div id="total-sales-chart-legend"></div>                  
                </div>

              </div>
            </div>
          </li>


@endforeach
            </ul>




          </div>
          <div class="row">

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
</body>

</html>

