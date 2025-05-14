@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <h1>Galeri</h1>
    <div class="row">
        <div class="col-md-4 mb-3">
            <!-- <img src="https://imgcdnblog.carmudi.com.ph/wp-content/uploads/2024/10/17195812/Ferrari-F80-3.jpeg" class="img-fluid rounded" alt="Ferrari 1"> -->
             <img src="{{ asset('images/gambar3.jpg') }}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-4 mb-3">
            <!-- <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2024/05/07163755/image-3-231.jpg" class="img-fluid rounded" alt="Ferrari 2"> -->
            <img src="{{ asset('images/gambar2.jpg') }}" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-4 mb-3">
            <!-- <img src="https://img.autofun.co.id/file/1fc8748dd3fd4eeebcb0d5db5a06540a.jpg" class="img-fluid rounded" alt="Ferrari 3"> -->
            <img src="{{ asset('images/gambar1.jpg') }}" class="img-fluid rounded" alt="">
        </div>
    </div>
@endsection
