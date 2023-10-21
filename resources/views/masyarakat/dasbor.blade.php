@extends('masyarakatlayuot')

@section('css')
    <style>
      
    </style>
@endsection

@section('konten')
<div class="card shadow mt-5">
  <div class="card-body text-center">
          <h1>SELAMAT DATANG!!</h1>
          <h3>SILAHKAN AJUKAN PENGADUAN ANDA</h3>
          <button type="button" class="btn btn-outline-info me-2" href="{{url('pengaduan')}}">Tulis Ajuan</button>
  </div>
</div>
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
  h1{
    font-size: 70px;
    padding: 90px 0 10px 0;
    justify-content: center;
    display: flex;
  }
  h3{
    font-size: 30px;
    padding: 50px 0 10px 0;
    justify-content: center;
    display: flex;
  }
  button{
    margin: auto;
  }
</style>
  
</body>
</html>
