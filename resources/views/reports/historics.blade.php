<title>Históricos de Transações</title>
<style>
  table, td, th {
    text-align: center;
    border: 1px solid black;
  }
  table {
      border-collapse: collapse;
      width: 100%;
  }
  th {
      height: 25px;
  }
</style>
<div>
    <h2 class="text-center">Históricos de Transações</h2>
    <hr/>
</div>
<div class="table-responsive">
    <table class="table-striped table-bordered table-hover table" style="font-size:12px;"> 
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
            <tr>
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
    <script type="text/php">
        if (isset($pdf)) {
            $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
            $size = 10;
            $font = $fontMetrics->getFont("Verdana");
            $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
            $x = ($pdf->get_width() - $width) / 2;
            $y = $pdf->get_height() - 35;
            $pdf->page_text($x, $y, $text, $font, $size);
        }
    </script>
</div>