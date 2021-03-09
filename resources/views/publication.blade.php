@extends('layouts.app')


@php
    $existComment = false;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $value->title }}</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{{ $value->content }}</p>
                        <footer class="blockquote-footer">{{ $value->user->name }} <cite title="Source Title">{{ $value->publicationTime }}</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Comentarios') }}</div>
                <div class="card-body">

                @forelse( $value->comments as $comment )
                    @php 
                        if ($comment->user->id === auth()->user()->id ) {
                            $existComment = true;
                        }
                    @endphp
                    <div class="row justify-content-center ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ $comment->user->name }}</div>

                                <div class="card-body">
                                    <p>{{ $comment->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="row justify-content-center ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p>Sin comentarios</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                </div>
                @if(!$existComment)
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Nuevo comentario</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('comment.store', $value->id) }}">
                                    @csrf
                                    <label for="mensaje">Escriba su comentario</label>
                                    <textarea name="content" class="form-control" id="mensaje" rows="3"></textarea>
                                    <button class="btn btn-primary mt-5" type="submit">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
