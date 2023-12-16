<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style type="text/css">
    
    label
    {
        display: inline-block;
        width: 200px;
    }

    </style>
   
    @include('auth.admin.css')
  </head>
  <body>
    
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>


     @include('auth.admin.sidebar')


     @include('auth.admin.navbar')

     
     <div class="container-fluid page-body-wrapper d-flex justify-content-center" style="padding-top: 80px"  >
     
        <div class="container">

          @if(session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{ session()->get('message') }}
  </div>
 @endif

            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

               @csrf
               <div style="padding: 15px">
                <h4 style="color: black">Update the Details</h4>
               </div>

                <div style="padding: 15px">
                    <label>Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}" style="color: black">
                </div>

                
                <div style="padding: 15px">
                    <label>Phone</label>
                    <input type="number" name="phone" value="{{$data->phone}}" style="color: black">
                </div>

                
                <div style="padding: 15px">
                    <label>Room No</label>
                    <input type="text" name="room" value="{{$data->room}}" style="color: black" >
                </div>

                <div style="padding: 15px">
                    <label>Specilaity</label>
                    <input type="text" name="specility" value="{{$data->specility}}" style="color: black" >
                </div>


                <div style="padding: 15px">
                    <input type="Submit" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>



        
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

        @include('auth.admin.script')
  </body>
</html>