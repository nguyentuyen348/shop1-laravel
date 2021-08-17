<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <script src="{{asset('js/myjs.js')}}"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<br>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Online Store</h1>
        <p>Mission, Vission & Values</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">logo<img src="" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('products.index')}}">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>

<section>

    <nav id="myMenu1">
        <div>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
            <ul id="myMenu">
                <li><a href="#">Brand</a></li>
                <li><a href="#">Gender</a></li>
                <li><a href="#">Size</a></li>
                <li><a href="#">Price</a></li>
                <li><a href="#">New</a></li>
            </ul>
        </div>
        <div>
            <ul id="search-for-gender">
                <li><a href="">All</a>
                </li>
                <li><a href="">Man</a>
                </li>
                <li><a href="">Woman</a>
                </li>
                <li><a href="">Kid</a>
                </li>
            </ul>
        </div>

        <div>
            <ul id="search-for-brand">
                <li><a href="">Adidas</a>
                </li>
                <li><a href="">Nike</a>
                </li>
                <li><a href="">Vans</a>
                </li>
                <li><a href="">Converse</a>
                </li>
            </ul>
        </div>
        <div></div>

    </nav>
</section>
@yield('content')
</div>
<div class="footer">
<div class="container">
<footer class="container-fluid text-center">
    <p>Online Store Copyright</p>
    <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Sign Up</button>
    </form>
</footer>
</div>
</div>
</body>
</html>
