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

  



          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Purchase A Book</h4>
                <form class="form-sample" method="POST" action="/makeTransaction">
                  @csrf
                  <p class="card-description">
                    Book Details
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Book Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled value="{{ $purchased_book->name }}">
                          <input type="text" hidden class="form-control" name="book_id" value="{{ $purchased_book->id }}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Author Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled value="{{ $purchased_book->author }}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Seller Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" disabled value="{{ App\Models\User::find($purchased_book->user_id)->name  }}">
                          <input type="text" class="form-control" hidden value="{{ $purchased_book->user_id  }}" name="seller_id">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Cost</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="$ {{ $purchased_book->cost }}" disabled>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-description">
                    Buyer Details
                  </p>


                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Buyer Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{ $current_user->name }}" disabled>
                          <input type="text" class="form-control" value="{{ $current_user->id }}" name="buyer_id" hidden>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="{{ $current_user->address }}" disabled>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Options</label>
                        @foreach ($all_payments_type as $payment )
                        <div class="col-sm-3">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="payment_type" id="membershipRadios1" value="{{ $payment->id }}" checked="">
                              {{ $payment->payment_name }}
                            <i class="input-helper"></i></label>
                          </div>
                        </div>

                        @endforeach

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Card Number</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Security Code</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">CARD NAME</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Expiration Date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                    <button type="submit" class="btn btn-primary me-2">Purchase</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>
                  </div>
                </form>
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
<script src="/temp/js/file-upload.js"></script>
</body>

</html>

