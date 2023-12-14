<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
       label{
        display: inline-block;
        width: 210px;
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

     <div class="container-fluid page-body-wrapper d-flex justify-content-center align-items-center >
     
     
        <div class="container">

          @if(session()->has('message'))
          <div class ="alert primary-sucess">
            <button type="button" class="close" data-dismiss="alert">x</button>
    
            {{session()->get('message')}}
  
          </div>
          @endif


            <form action="{{url('upload_doctor')}}" method="GET" enctype="multipart/form-data">

                @csrf
               
                <div style="padding: 15px">
                    <label>Doctor Name</label>
                    <input type="text" name="name" style="color: black" placeholder="Write the name" required>
                </div>

                
                <div style="padding: 15px">
                    <label>Phone</label>
                    <input type="number" name="phone" style="color: black" placeholder="Write the phone number" required>
                </div>

                
                <div style="padding: 15px">
                    <label>Room No</label>
                    <input type="text" name="room" style="color: black" placeholder="Write the  room" required>
                </div>

                
                <div style="padding: 15px">
                    <label>Speciality</label>
                    <select name="specility" style="color: black; width: 245px; height: 35px" required>
                        <option disabled selected >--Select--</option>
                        <option value="skin">skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="nose">nose</option>
                    </select>


                <div style="padding: 15px">
                    <label>Doctor Image</label>
                    <input type="file" name="image" id="image" required>
                </div>

                <div style="padding: 15px">
                    <input type="submit" class="btn btn-success" name="submit">
                </div>

            </form>
        </div>
    </div>
    

     @include('auth.admin.footer')
         

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