<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Commune List</h1>
    {{-- <a href="{{ route('comunas.create')}}" class="btn btn-success">Add </a> --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Commune</th>
            <th scope="col">Municipality</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @forerach ($comunas as $comuna)
          <tr>
            <th scope="row">{{$comuna->comu_codi}}</th>
            <td>{{$comuna->comu_nomb}}</td>
            <td>{{$comuna->muni_nomb}}</td>
            <td><span> Actions</span></td>
          </tr>
          
        </tbody>
      </table>
</body>
</html>