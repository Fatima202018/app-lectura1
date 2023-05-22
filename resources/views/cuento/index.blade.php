@extends('layouts.app')

@section('template_title')
    Cuento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cuentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($cuentos as $cuento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cuento->titulo }}</td>
											<td>{{ $cuento->autor }}</td>
											<td>{{ $cuento->contenido }}</td>

                                            <td>
                                                <form action="{{ route('cuentos.destroy',$cuento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuentos.show',$cuento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuentos.edit',$cuento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cuentos->links() !!}
            </div>
        </div>
    </div>
@endsection
