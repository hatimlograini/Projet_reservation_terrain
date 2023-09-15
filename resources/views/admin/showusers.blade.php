

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
      @include('admin.css')
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
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Num tele</th>
                    <th style="padding: 10px">Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $user)
              </thead>
              <tbody>
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a onclick="return confirm('are u sure u wanna delete')" class="btn btn-danger" href="{{ url('deleteuser',$user->id) }}">Supprimer</a>
                        <a class="btn btn-primary" href="{{ url('updateuser',$user->id) }} ">Modifier</a>
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
