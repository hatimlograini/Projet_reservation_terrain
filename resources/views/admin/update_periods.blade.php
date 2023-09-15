

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        
    </style>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner">
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
                <form action="{{ url('edit_period',$data->id) }}" method="POST">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">period time</label>
                        <input type="text" style="color:black" name="period_time" value="{{ $data->period_time }}">
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Places</label>
                        <input type="text" style="color:black" name="places" value="{{ $data->places }}">
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
    <!-- End custom js for this page -->
  </body>
</html>
