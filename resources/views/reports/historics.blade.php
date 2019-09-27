<html>
    <head>
        <title>Históricos de Transações</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
        table, td, th {
            text-align: center;
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        thead { display: table-header-group }
        tfoot { display: table-row-group }
        tr { page-break-inside: avoid }
        </style>
    </head>
    <body class="container">
        <div>
            <h2 class="text-center">Históricos de Transações</h2>
            <p>Total de Registros: {{ count($accounts_historical) }}</p>
            <hr/>
        </div>
        <div class="table-responsive">
            <table class="table-striped table-bordered table-hover table"> 
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
                    $font = $fontMetrics->get_font("helvetica", "bold");
                    $pdf->page_text(90, 30, "Página: {PAGE_NUM} de {PAGE_COUNT}", $font, 20,  array(0,0,0)
                }
            </script>
        </div>
    </body>
</html>