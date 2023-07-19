<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Products</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Incidunt aliquam sed fugiat, voluptatibus explicabo id quibusdam
            ut numquam consequatur commodi ducimus autem temporibus. 
            Delectus facilis, vero impedit unde pariatur eos.</p>
        <div class="row g-3" id="data-holder">


            @foreach ($images as $key => $value)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="images/{{$key}}" class="card text-bg-dark h-100" data-lightbox="roadtrip">
                        <img src="images/{{$key}}" class="card-img h-100" style="object-fit:cover" alt="{{$value}}">
                        <div class="card-img-overlay">
                            <h5 class="card-title" style="text-shadow:0 0 5px #000">{{$value}}</h5>
                        </div>
                    </a>
                </div>              
            @endforeach


        </div>
    </div>
<script src="/js/app.js"></script>
</body>
</html>