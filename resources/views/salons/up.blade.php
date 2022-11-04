<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Up</title>
</head>
<body>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"></p>
              @foreach ($rec as $recs)
              @csrf
              <form action="{{route('up.fin', $recs->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" value="{{$recs->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Saissisez un email valide">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" value="{{$recs->password}}"  class="form-control" id="exampleInputPassword1" name="password" placeholder="Entrez un mot de passe en chiffre"  minlength="4" required >
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Cocher</label>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </form>
                    
@endforeach
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>