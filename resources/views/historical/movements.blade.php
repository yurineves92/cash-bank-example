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
            <li class="breadcrumb-item active">Histórico</li>
        </ol>
    </div>
<!--<br><br> -->
    <div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Conta</th>
                    <th>Tipo de Transação</th>
                    <th>Valor</th>
                    <th>Data de Operação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts_historical as $a)
                <tr class="{{$a->type_transaction == 1 ? 'alert alert-success' : 'alert alert-danger' }}">
                    <td>{{ $a->id}}</td>
                    <td>{{ $a->account->holder }}</td>
                    @if($a->type_transaction == 1)
                    <td>Depósito</td>
                    @else
                    <td>Retirada</td>
                    @endif
                    <td>{{ $a->value }}</td>
                    <td>{{ date('d/m/Y',strtotime($a->date_operation)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{ $accounts_historical->links() }}
        </div>
    </div>
</div>
@endsection