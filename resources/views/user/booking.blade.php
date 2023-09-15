<style>
body{
    background-color: rgb(153, 63, 63);
}
</style>

<link href="assets/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Flaticon Font -->
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<br><br><br><br><br><br><br><br><br>


<div class="page-section">
    <div class="container">
      <title>Booking</title>

      <h1 class="text-center wow fadeInUp">Book A Time</h1>
      <body style="background-color: rgb(207, 78, 78);">
        
      
      <form class="main-form" action="{{ route('store',$id) }}" method="POST">
        @csrf
        <div class="row mt-5 ">
          {{-- <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="nom" class="form-control" placeholder="Full name">
          </div> --}}
          {{-- <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address...">
          </div> --}}
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" id="res_dateid" class="form-control">
            <span class="text-red-400 error-text res_date_error" style="color:red"></span>
            <span id="selected_date" class="text-green-500" style="color:green"></span>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">

            <select name="period" id="periodid" class="custom-select">
              @foreach ($periods as $period)
                  <option value="{{ $period->id }}">{{ $period->period_time }}</option>
              @endforeach


            </select>
            <span class="text-red-400 error-text period_error" style="color:red"></span>
            <span id="selected_period" class="text-green-500" style="color:green"></span>
          </div>
          {{-- <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number...">
          </div> --}}
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="comment" id="comment" class="form-control" rows="6" placeholder="Comment..."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" id="submit-btn">Submit Request</button>
      </form>
    </body>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
     let res_date='',period='';
    $(document).ready(function () {

	        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : $('meta[name=csrf-token]').attr('content') }
        });

	  //date ajax verifiyDate
        $('#res_dateid').on('change',function(){

            res_date=$('#res_dateid').val();
            console.log('data clicked value : '+res_date)
            $.ajax({
               method:'get',
               dataType:'json',
               url:"{{ route('verifyDate',$id) }}",
               data:{
                'res_date':res_date,
               },

               beforeSend:function(){
                            $(document).find('span.res_date_error').text('');
                            $(document).find('span#selected_date').text('');

                        },

               success:function(res){
                if(res.status==false){

                    $('span.res_date_error').text(res.errors.res_date[0])
                  }else{
                  $('span#selected_date').text(res_date)
                    }
                    console.log('the request succeeded res :'+res)
                }

            });//end ajax
          });

          // places verification
          //date ajax verifiyDate
        $('#periodid').on('change',function(){
            res_date=$('#res_dateid').val();
            period=$('#periodid').val();
            console.log('data clicked value period id is : '+period)
            $.ajax({
               method:'get',
               dataType:'json',
               url:"{{ route('verifyPlace',$id) }}",
               data:{
                'date':res_date,
                'period':period,
               },

               beforeSend:function(){
                            $(document).find('span.period_error').text('');
                            $(document).find('span#selected_period').text('');
                        },
               success:function(res){
                if(res.status==false){
                  document.getElementById('submit-btn').disabled=true;


                    $('span.period_error').text(res.msg_error);
                }else{
                  document.getElementById('submit-btn').disabled=false;

                  $('span#selected_period').text('good');
                    }
                    console.log('the request succeeded res :'+res.msg_done)
                }

            });//end ajax

          });
          // end places verification







    });
    </script>
  </div>
