

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

        

        <div class="container-fluid page-body-wrapper">

                <div class="main-panel">
                    <div class="row">
                      <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">

                          <div class="card-body">

              <table class="table table-light table-hover">
                  <thead>
                    <tr>
                        <th style="padding: 10px">Nom</th>
                        <th style="padding: 10px">Prenom</th>
                        <th style="padding: 10px">Period</th>
                        <th style="padding: 10px">Date</th>
                        <th style="padding: 10px">Comment</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($reservations as $reservation)
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{$users->find($reservation->user_id)->name}}</td>
                        <td>{{$users->find($reservation->user_id)->prenom}}</td>
                        <td>{{$periods->find($reservation->period_id)->period_time}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->comment}}</td>
                        <td>
                            <a onclick="return confirm('sure vous voulez supprimer')" class="btn btn-danger" href="{{ url('delete_reservation',$reservation->id) }}">Supprimer</a>
                            <a class="btn btn-primary" href="{{ url('update_reservation',$reservation->id) }} ">Modifier</a>
                        </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>




            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>




