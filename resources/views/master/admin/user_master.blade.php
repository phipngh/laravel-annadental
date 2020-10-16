<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>AnnaDental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('AdminSide/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('AdminSide/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('AdminSide/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('AdminSide/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg bg-gradient">

@yield('content')

<!-- Vendor js -->
<script src="{{asset('AdminSide/js/vendor.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('AdminSide/js/app.min.js')}}"></script>

</body>
</html>
