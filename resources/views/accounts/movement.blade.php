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
            <li class="breadcrumb-item">
                <a href="/accounts">Contas</a>
            </li>
            <li class="breadcrumb-item active">Movimentação</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Movimentação</h5>
            {!!Form::open(array('url'=>'accounts/accomplish','method'=>'POST','autocomplete'=>'off'))!!}
		        {{Form::token()}}
                <input type="hidden" name="account_id" value="{{$account->id}}">
                <div class="form-group">
                    <label>Conta</label>
                    <input type="text" class="form-control" name="holder" value="{{ $account->holder }}" placeholder="Títular" disabled>
                </div>
                <div class="form-group">
                    <label>Tipo de Transação</label>
                    <select name="type_transaction" class="form-control" required>
                        <option value="1">Depósito</option>
                        <option value="2">Retirada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Data da Operação</label>
                    <input type="date" class="form-control" name="date_operation">
                </div>
                <div class="form-group">
                    <label>Valor</label>
                    <input type="text" class="form-control" name="value" placeholder="Digite o valor">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="/accounts" class="btn btn-outline-primary" style="margin-left: 10px;">Voltar</a>
                </div>
			{!!Form::close()!!}
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/jquery.mask.js"></script>
<script type="text/javascript" src="/js/money.js"></script>
@endsection