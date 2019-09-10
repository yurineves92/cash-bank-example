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
        <p>Filtros</p>
        <div class="form-inline">
            <div class="form-group">
                <label>Tipo de Transação: </label>
                <select name="type_transaction" class="form-control" required>
                    <option value="1">Depósito</option>
                    <option value="2">Retirada</option>
                </select>
            </div>
            <div class="form-group" style="padding-left:5px;">
                <label>Data de Operação: </label>
                <input type="date" class="form-control" name="date_operation">
            </div>
            <div class="form-group" style="padding-left:5px;">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
            <div class="d-flex flex-row-reverse" style="padding-left:5px;">
                <button type="submit" class="btn btn-danger">PDF</button>
            </div>
        </div>
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
    </div>
</div>
@endsection