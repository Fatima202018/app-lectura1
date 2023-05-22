@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Leyenda
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Leyenda</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('leyendas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('leyenda.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
