@extends('layouts.app')

@section('template_title')
    Leyenda
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Leyenda') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('leyendas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Titulo</th>
										<th>Autor</th>
										<th>Contenido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leyendas as $leyenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $leyenda->titulo }}</td>
											<td>{{ $leyenda->autor }}</td>
											<td>{{ $leyenda->contenido }}</td>

                                            <td>
                                                <form action="{{ route('leyendas.destroy',$leyenda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('leyendas.show',$leyenda->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('leyendas.edit',$leyenda->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $leyendas->links() !!}
            </div>
        </div>
    </div>
@endsection
