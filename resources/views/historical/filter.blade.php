<div class="row">
    <div class="col-md-9">
        {!!Form::open(array('url'=>'/accounts/movements','method'=>'GET','autocomplete'=>'off'))!!}
        <div class="form-inline">
            <div class="form-group">
                <label>Tipo de Transação: </label>
                <select name="type_transaction" class="form-control">
                    <option value="">Selecione...</option>
                    @if(isset($query['type_transaction']))
                        @if($query['type_transaction'] == 1)
                        <option value="1" selected>Depósito</option>
                        <option value="2">Retirada</option>
                        @elseif ($query['type_transaction'] == 2)
                        <option value="1">Depósito</option>
                        <option value="2" selected>Retirada</option>
                        @endif
                    @else
                    <option value="1">Depósito</option>
                    <option value="2">Retirada</option>
                    @endif
                </select>
            </div>
            <div class="form-group" style="padding-left:15px;">
                <label>Data de Operação: </label>
                @if(isset($query['date_operation']))
                    <input type="date" class="form-control" name="date_operation" value="{{$query['date_operation']}}">
                @else
                    <input type="date" class="form-control" name="date_operation">
                @endif
            </div>
            <div class="form-group" style="padding-left:15px;">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
            <div class="d-flex flex-row-reverse" style="padding-left:15px;">
                <a href="/accounts/movements" class="btn btn-outline-primary">Limpar</a>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
    <div class="col-md-3">
        {!!Form::open(array('url'=>'/reports/historics','method'=>'POST','autocomplete'=>'off','target'=>'_blank'))!!}
        <div class="form-inline" style="position: relative;left: 135px;">
            @foreach($query as $key => $value)
            <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach
            <div class="form-group" style="padding-left:15px;">
                <button type="submit" class="btn btn-danger">Gerar PDF</button>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>