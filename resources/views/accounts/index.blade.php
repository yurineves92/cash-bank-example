@extends('layout.app')
@section('content')
<div>
    <div>
        <!-- Page Heading/Breadcrumbs -->
        <h3 class="mt-4 mb-3"></h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Contas</li>
        </ol>
    </div>
    <a href="/accounts/create" class="btn btn-primary">Novo</a>
    <br><br>
    <div>
        @if ($message = Session::get('alert-success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">X</button> 
                <strong>{{ $message }}</strong>
        </div>
	    @elseif ($message = Session::get('alert-danger'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">X</button> 
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titular</th>
                    <th>Agência</th>
                    <th>Conta</th>
                    <th>Balanço</th>
                    <th>Última atualização</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $a)
                <tr>
                    <td>{{ $a->id}}</td>
                    <td>{{ $a->holder }}</td>
                    <td>{{ $a->agency }}</td>
                    <td>{{ $a->account }}</td>
                    <td>{{ $a->balance }}</td>
                    <td>{{ date('d/m/Y h:i:s',strtotime($a->updated_at)) }}</td>
                    <td>
                        <a href="/accounts/movement/{{$a->id}}" title="Realizar Movimento"><button class="btn btn-warning"><i class="fa fa-dollar"></i></button></a>
                        <a href="{{URL::action('AccountsController@edit',$a->id)}}"><button class="btn btn-info"><i class="fa fa-pencil"></i></button></a>
                        <a href="" data-target="#modal-delete-{{$a->id}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @include('accounts.modal')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection