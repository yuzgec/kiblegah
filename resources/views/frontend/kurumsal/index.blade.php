@extends('frontend.layout.app')
@section('title', $Detay->title.' | Kurumsal Sayfalar')
@section('content')

    <div class="container">
        <div class="mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>{{ $Detay->title }}</h2>
                        <hr>
                        {{ $Detay->desc}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
