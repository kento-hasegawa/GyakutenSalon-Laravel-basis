<!DOCTYPE html>
<html lang = "en" >
<head>
    <meta charaset="utf-8">
    <meta name="view-point" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link 
            rel="stylesheet"
            href=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
    >

    <title>人生逆転サロン</title>
</head>
<body>
    <header class= "navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="{{ url('')}}">
                Gyakuten
            </a>
        </div>
    </header >
    
    @yield('content')
    
    
</body>
</html>