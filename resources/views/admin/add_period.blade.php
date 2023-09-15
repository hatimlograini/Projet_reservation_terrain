

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Required meta tags -->
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" >
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
            </div>

          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding: 100px">
                <form action="{{ url('add_period') }}" method="POST">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">period_time</label>
                        <input type="text" style="color:black" name="period_time">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">places</label>
                        <input type="text" style="color:black" name="places">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" value="submit" class="btn-btn-primary">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- End custom js for this page -->
  </body>
</html>
