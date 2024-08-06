<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }
        .hero {
            background: #f8f9fa;
            padding: 60px 0;
            text-align: center;
        }
        .portfolio-item {
            margin-bottom: 30px;
        }
        .portfolio-item img {
            max-width: 100%;
            height: auto;
        }
        .contact-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
    </style>
</head>
<body>
    <section id="about" class="container my-5">
        <h2 class="text-center">About Me</h2>
        <p>{{$aboutMe}}</p>
    </section>

     <!-- Portfolio Section -->
     <section id="portfolio" class="container my-5">
        <h2 class="text-center">Portfolio</h2>
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <img src="{{$image}}" alt="Project 1">
                <h3>Profile Pic</h3>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>