@extends('layouts.app')

@section('template_title')
    {{ $leyenda->name ?? "{{ __('Show') Leyenda" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Leyenda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('leyendas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $leyenda->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $leyenda->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $leyenda->contenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
