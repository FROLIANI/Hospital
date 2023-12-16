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

        <div  class="container-fluid page-body-wrapper">
            <div  style="padding-top:50px; margin-right:150px">
                <table>
                    <tr style="background-color: black">
                        <th style="padding:10px; font-size: 15px; color:white">Customer Name</th>
                        <th style="padding:10px; font-size: 15px; color:white">Email</th>
                        <th style="padding:10px; font-size: 15px; color:white">Phone</th>
                        <th style="padding:10px; font-size: 15px; color:white">Doctor Name</th>
                        <th style="padding:10px; font-size: 15px; color:white">Date</th>
                        <th style="padding:10px; font-size: 15px; color:white">Message</th>
                        <th style="padding:10px; font-size: 15px; color:white">Status</th>
                        <th style="padding:10px; font-size: 15px; color:white">Approved</th>
                        <th style="padding:10px; font-size: 15px; color:white">Canceled</th>
                    </tr>


                    @foreach ($data as $appoint)
                        <tr style="background-color:skyblue; text-align: center;">
                            <td style="padding: 10px">{{ $appoint->name }}</td>
                            <td style="padding: 10px">{{ $appoint->email }}</td>
                            <td style="padding: 10px">{{ $appoint->phone }}</td>
                            <td style="padding: 10px">{{ $appoint->doctor }}</td>
                            <td style="padding: 10px">{{ $appoint->date }}</td>
                            <td style="padding: 10px">{{ $appoint->message }}</td>
                            <td style="padding: 10px">{{ $appoint->status }}</td>

                            <td><a class="btn btn-success" href="{{ url('approved', $appoint->id) }}">Approved</a>
                            </td>

                            <td>
                                <a class="btn btn-danger" href="{{ url('canceled', $appoint->id) }}">Canceled</a>
                            </td>

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
