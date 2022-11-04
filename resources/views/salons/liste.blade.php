<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Liste</title>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("home.index")}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route("calendrier.date")}}">Calendrier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route("liste.aff")}}">Liste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
                    @foreach ($cal as $cals)
            {{$cals->email}}
            {{$cals->password}}
            <a href="{{route('up.mod', $cals->id)}}" class="btn btn-warning">Modifier</a>
        <br>
@endforeach   
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>