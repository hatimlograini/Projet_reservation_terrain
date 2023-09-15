

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->


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


        <div class="main-panel">
              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">

                    <div class="card-body">
                        <a style="margin-bottom: 15px" class="btn btn-primary" href="{{ url('add_period_view') }}">Ajouter period</a>
        <table class="table table-light table-hover">
            <thead>
              <tr>
                <th style="padding: 10px">Period time</th>
                <th style="padding: 10px">places</th>
                <th>Action</th>
              </tr>
              @foreach ($data as $period)
            </thead>
            <tbody>
              <tr>
                <td>{{$period->period_time}}</td>
                <td>{{$period->places}}</td>
                <td><a style="margin-right: 15px" onclick="return confirm('sure vous voulez supprimer')" class="btn btn-danger" href="{{ url('delete_period',$period->id) }}">Supprimer</a>
                    <a class="btn btn-primary" href="{{ url('update_period_view',$period->id) }} ">Modifier</a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>

</div>
</div>
</div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>




