<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>ATG</title>

    <!-- Bootstrap -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
	<link href="{{{ URL::asset('public/front/font-awesome/css/font-awesome.min.css') }}}" rel="stylesheet">
    <link href="{{{ URL::asset('public/front/css/bootstrap.css') }}}" rel="stylesheet">   
    @yield('css')
</head>
<body>
	
<header class="top-headers">

</header>	

@yield('content')
<!-----footer---->
<footer>

</footer>
<!-----footer-end---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{{ URL::asset('public/front/js/jquery.js') }}}"></script>
<script src="{{{ URL::asset('public/front/js/bootstrap.min.js') }}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function () { 
    $('#atg_test').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "{{ url('checkemail') }}",
                    type: "post",
                    data: {
                        _token: '{!! csrf_token() !!}',
                    },
                    dataFilter: function (data) {

                        var json = JSON.parse(data);
                        if (json.msg == "true") {
                            return "\"" + "This Email is used" + "\"";
                        } else {
                            return 'true';
                        }
                    }
                }
            },
            pincode: {
                required: true,
                minlength:6,
                maxlength:6,
                digits: true
            },            
        }
    });
});
</script>
@yield('js')
</body>
<style type="text/css">
	.inner-pages{margin-top: 50px;}
    .error{ color: #a94442; }
</style>
</html>

