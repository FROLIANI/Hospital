<!DOCTYPE html>
<html lang="en">

<head>

    @include('auth.user.style')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('auth.user.userheader')

    @include('auth.user.userbody')

    <div class="d-flex justify-content-center align-items-center" style="padding: 70px">
        <table>
            <tr style="background-color: black">
                <th style="padding:10px; font-size: 20px; color:white">Doctor Name</th>
                <th style="padding:10px; font-size: 20px; color:white">Date</th>
                <th style="padding:10px; font-size: 20px; color:white">Message</th>
                <th style="padding:10px; font-size: 20px; color:white">Status</th>
                <th style="padding:10px; font-size: 20px; color:white">Cancel Appointment</th>
            </tr>

            @foreach ($appoint as $appoints)
                <tr style="background-color: black; text-align: center;">
                    <td style="padding:10px; font-size: 20px; color:white">{{ $appoints->doctor }}</td>
                    <td style="padding:10px; font-size: 20px; color:white">{{ $appoints->date }}</td>
                    <td style="padding:10px; font-size: 20px; color:white">{{ $appoints->message }}</td>
                    <td style="padding:10px; font-size: 20px; color:white">{{ $appoints->status }}</td>
                    <td style="padding: 10px; vertical-align: middle; margin-right: 10px;"><a class="btn btn-danger"
                            onclick="return confirm('Are you sure to delete this? ')"
                            href="{{ url('cancel_appointment', $appoints->id) }}">Cancel</a></td>
                </tr>
            @endforeach


        </table>
    </div>




    @include('auth.user.script')

</body>

</html>
