@extends('layouts.app')

@section('template_title')
    {{ $chiste->name ?? "{{ __('Show') Chiste" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Chiste</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chistes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $chiste->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $chiste->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $chiste->contenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
