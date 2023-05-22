@extends('layouts.app')

@section('template_title')
    {{ $fabula->name ?? "{{ __('Show') Fabula" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fabula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fabulas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $fabula->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $fabula->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $fabula->contenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
