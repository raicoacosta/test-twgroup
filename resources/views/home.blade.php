@extends('layouts.app')

@section('content')
<div class="container">
    @foreach(\App\Models\Publication::all() as $value)
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $value->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ $value->content }}</p>
                    <a href="{{ route('publication.show', $value->id) }}" class="btn btn-primary">Detalles de la publicacion</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
