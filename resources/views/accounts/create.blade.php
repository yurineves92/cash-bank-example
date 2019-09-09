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
            <li class="breadcrumb-item active">Formulário</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Formulário</h5>
            {!!Form::open(array('url'=>'accounts','method'=>'POST','autocomplete'=>'off'))!!}
		        {{Form::token()}}
                <div class="form-group">
                    <label>Titular</label>
                    <input type="text" class="form-control" name="holder" placeholder="Títular">
                </div>
                <div class="form-group">
                    <label>Agência</label>
                    <input type="number" class="form-control" name="agency" placeholder="Agência">
                </div>
                <div class="form-group">
                    <label>Conta</label>
                    <input type="number" class="form-control" name="account" placeholder="Conta">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="/accounts" class="btn btn-outline-primary" style="margin-left: 10px;">Voltar</a>
                </div>
			{!!Form::close()!!}
        </div>
    </div>
</div>
@endsection