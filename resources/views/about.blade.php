@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> <?php echo $nama; ?> </h3>
    <p> <?php echo $email; ?> </p>
    <img src="images/<?php echo $gambar; ?>" alt="yogatama" width="200px">
@endsection

