@extends('layouts.app')
@section('content')
<section id="album" class="py-1 text-center bg-light">
    <div class="container">
        <h2>Album: {{ $albums->nama_album }}</h2>
        <div class="row">
            @foreach ($galeris as $data)
            <div class="col-md-4">
                <div class="card" style="width: 13rem;">
                <a href="{{ asset('image/'.$data->foto) }}" data-lightbox="image-1" data-title="{{ $data->keterangan }}">
                    <img src="{{ asset('image/'.$data->foto) }}"class="card-img-top" style="width: 200px; height:150px">
                    <div class="card-body">
                        <h6 class="card-title">{{ $data->nama_galeri }}</h6></a>
                        {{-- <a href="{{ route('like.foto', $data->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up"></i>Like<span class="badge-light">{{ $data->suka}}</span></a> --}}
                        
                    </div>
            </div>
        </div>
        @endforeach
    </div><div>{{ $galeris->links() }}</div>
    </div>
</section>
@endsection