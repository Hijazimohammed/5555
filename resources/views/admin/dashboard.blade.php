<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('Content/bootstrap-rtl.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Content/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Content/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Content/styles9093.css?v=0.02') }}" rel="stylesheet">
  <link href="{{ asset('Content/custom-red9093.css?v=0.02') }}" rel="stylesheet">
  <link href="{{ asset('Content/costum.css') }}" rel="stylesheet">
  <link href="{{ asset('Content/bootstrap-select.min.css') }}" rel="stylesheet">



  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>