<p>Filtros</p>
{!!Form::open(array('url'=>'/accounts/movements','method'=>'GET','autocomplete'=>'off'))!!}
<div class="form-inline">
    <div class="form-group">
        <label>Tipo de Transação: </label>
        <select name="type_transaction" class="form-control">
            <option selected value>Selecione...</option>
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
        <a href="/accounts/movements" class="btn btn-outline-success">Limpar</a>
    </div>
</div>
{!!Form::close()!!}