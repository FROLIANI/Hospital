<!DOCTYPE html>
<html lang="en">

<head>

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
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        @include('auth.admin.sidebar')


        @include('auth.admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class=" justify-content-center align-items-center" style="padding: 50px">

                <table>
                    <tr style="background-color: black">
                        <th style="padding:10px; font-size: 20px; color:white">Doctor Name</th>
                        <th style="padding:10px; font-size: 20px; color:white">Phone</th>
                        <th style="padding:10px; font-size: 20px; color:white">Speciality</th>
                        <th style="padding:10px; font-size: 20px; color:white">Room No</th>
                        <th style="padding:10px; font-size: 20px; color:white">Delete</th>
                        <th style="padding:10px; font-size: 20px; color:white">Update</th>
                    </tr>

                    @foreach ($data as $doctor)
                        <tr style="background-color:skyblue; text-align: center;">
                            <td style="padding: 10px">{{ $doctor->name }}</td>
                            <td style="padding: 10px">{{ $doctor->phone }}</td>
                            <td style="padding: 10px">{{ $doctor->specility }}</td>
                            <td style="padding: 10px">{{ $doctor->room }}</td>

                            <td><a onclick="return confirm('Are you sure to delete this?')"
                                 class="btn btn-danger" href="{{ url('deletedoctor', $doctor->id) }}">Delete</a></td>

                            <td><a class="btn btn-primary" href="{{ url('updatedoctor', $doctor->id )}}">Update</a></td>


                        </tr>
                    @endforeach

                </table>

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
