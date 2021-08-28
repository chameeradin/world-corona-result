<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Corona Results</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">World Wide Corona Results</h1>
            <div class="col-md-6 offset-md-3 mt-5 wrapper">
                @foreach ($data as $key => $value)
                <div class="card text-center">
                    <h5 class="card-header bg-info bg-gradient bg-opacity-25">{{$key}}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            {{$value}}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
