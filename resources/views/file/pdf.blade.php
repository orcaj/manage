 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>{{ auth()->user()->name." ". auth()->user()->last_name}}</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style type="text/css">
        .head{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .title-center{
            margin: auto;
        }

        .img-center{
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .blue-under{
          font-weight: bold;
        color: blue;
        text-decoration: underline;
        text-transform: uppercase;
      }
      .top-10{
        margin-top:10px; 
      }
      .top-30{
        margin-top:30px; 
      }

      table{
        width: 100%;
      }
      hr{
        margin:0px;
      }
      p{
        margin-bottom: 0px;
      }

    </style>
</head>

<body>

    <div class="container" style="font-size: 12px;">
        <div class="">
            <table style="width: 100%;">
                <tr>
                    <td><h4><b>TV SALES</b> </h4></td>
                    <td><h4><b>{{$result->subsidiary->phone}}</b> </h4></td>
                </tr>
                <tr>
                    <td colspan="2">{{$result->subsidiary->address}}</td>
                </tr>
            </table>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <table>
                <tr>
                    <td><h4>COMPROVANTE DE ENTRADA – OS N ° MC 00000{{$result->id}}</h4></td>
                    <td>Hora {{date('h:i')}} &nbsp Data: {{date('d/m/Y')}}</td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <tr>
                    <td>Cliente: {{$result->customer->username}}</td>
                    <td>Contato: Maria </td>
                    <td> {{$result->customer->phone_number}} </td>
                </tr>
                <tr>
                    <td>Endereço: {{$result->customer->address}}</td>
                    <td>Bairro: Criméia  </td>
                    <td>  Cidade: {{$result->customer->city}}  </td>
                </tr>
                <tr>
                    <td>CPF/CNPJ:{{$result->customer->cpf_cnpj}}     </td>
                    <td>UF: MG      </td>
                    <td>    CEP:  {{$result->customer->number}} </td>
                </tr>
            </table>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <table>
                <tr>
                    <td>Equipamento: {{$result->equipament}} </td>
                    <td colspan="2">Marca:  {{$result->brand}}  
                    </td>
                    <td> Modelo:  {{$result->model}}  </td>
                </tr>
                <tr>
                    <td colspan="3">Acessórios: Embalagem</td>
                    <td>Série: {{$result->serial_number}} </td>
                </tr>
                @if($result->optional == 1)
                <tr>
                    <td>Em Garantia: Sim</td>
                    <td>Data: {{$result->purchase_date}} </td>
                    <td> NF: {{$result->numeric_digits}}</td>
                    <td>Loja: {{$result->store}}</td>
                </tr>
                @endif
            </table>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <p><b>Problema Relatado: </b> {{$result->defect}}  </p>
            <p><b>Orçamento:  </b> {{$result->description}}  </p>
            <p><b>Observações </b> {{$result->observations}} </p>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <p><b>CONDIÇÕES DE SERVIÇO:</b></p>
            <p>
                Aparelhos só serão entregues com apresentação desta Ordem de Serviço. Em caso de perda, apenas com documento original do titular. Aparelhos não retirados em 30 dias estão sujeitos à taxa de depósito de 10% mensais sobre seu valor real. Todos os acessórios serão devolvidos no ato do recebimento do produto, incluindo mas não se limitando à: controle remoto, cabos, embalagem, Nota Fiscal e manuais. Caso seja necessária a permanência de algum acessório, esta será descriminada nesta ordem de serviço, caso contrário, aparelho sem acessórios. Os serviços prestados têm garantia de 90 dias. PAGAMENTO: Não trabalhamos com cheque. PRÉ-ORÇAMENTO: Será INFORMADO e APROVADO pelo cliente no ato do recebimento do produto, portanto, caracterizada AUTORIZAÇÃO EXPRESSA DE REPARO. Ao assinar esta guia, cliente afirma ter lido e entendido todo o seu conteúdo, não havendo dúvida ou margem à ambiguidade, bem como expressamente aceita integralmente seu teor.
            </p>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <table>
                <tr>
                    <td>Data de Entrada: {{date('m/d/Y')}} </td>
                    <td>Hora: {{date('h:i')}} </td>
                    <td>Visto: TV Sales</td>
                </tr>
                <tr>
                    <td colspan="3">Situação da Ordem: {{$result->status}} </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="color: black; height: 2px; background: black;">
                    </td>
                    <td>
                        <hr style="color: black; height: 2px; background: black;">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        ( X ) Via do Cliente    (   ) Via da Empresa    
                    </td>
                    <td>
                        Visto: Nome do Cliente
                    </td>
                </tr>
            </table>
        </div>


        <hr style="color: black; height: 2px; background: black; margin-top: 10px;">
        <div>
            <table>
                <tr>
                    <td><h4>COMPROVANTE DE ENTRADA – OS N ° MC 00000{{$result->id}}</h4></td>
                    <td>Hora {{date('h:i')}} &nbsp Data: {{date('d/m/Y')}}</td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <tr>
                    <td>Cliente: {{$result->customer->username}}</td>
                    <td>Contato: Maria </td>
                    <td> {{$result->customer->phone_number}} </td>
                </tr>
                <tr>
                    <td>Endereço: {{$result->customer->address}}</td>
                    <td>Bairro: Criméia  </td>
                    <td>  Cidade: {{$result->customer->city}}  </td>
                </tr>
                <tr>
                    <td>CPF/CNPJ:{{$result->customer->cpf_cnpj}}     </td>
                    <td>UF: MG      </td>
                    <td>    CEP:  {{$result->customer->number}} </td>
                </tr>
            </table>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <table>
                <tr>
                    <td>Equipamento: {{$result->equipament}} </td>
                    <td colspan="2">Marca:  {{$result->brand}}  
                    </td>
                    <td> Modelo:  {{$result->model}}  </td>
                </tr>
                <tr>
                    <td colspan="3">Acessórios: Embalagem</td>
                    <td>Série: {{$result->serial_number}} </td>
                </tr>
                @if($result->optional == 1)
                <tr>
                    <td>Em Garantia: Sim</td>
                    <td>Data: {{$result->purchase_date}} </td>
                    <td> NF: {{$result->numeric_digits}}</td>
                    <td>Loja: {{$result->store}}</td>
                </tr>
                @endif
            </table>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <p><b>Problema Relatado: </b> {{$result->defect}}  </p>
            <p><b>Orçamento:  </b> {{$result->description}}  </p>
            <p><b>Observações </b> {{$result->observations}} </p>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <p><b>CONDIÇÕES DE SERVIÇO:</b></p>
            <p>
                Aparelhos só serão entregues com apresentação desta Ordem de Serviço. Em caso de perda, apenas com documento original do titular. Aparelhos não retirados em 30 dias estão sujeitos à taxa de depósito de 10% mensais sobre seu valor real. Todos os acessórios serão devolvidos no ato do recebimento do produto, incluindo mas não se limitando à: controle remoto, cabos, embalagem, Nota Fiscal e manuais. Caso seja necessária a permanência de algum acessório, esta será descriminada nesta ordem de serviço, caso contrário, aparelho sem acessórios. Os serviços prestados têm garantia de 90 dias. PAGAMENTO: Não trabalhamos com cheque. PRÉ-ORÇAMENTO: Será INFORMADO e APROVADO pelo cliente no ato do recebimento do produto, portanto, caracterizada AUTORIZAÇÃO EXPRESSA DE REPARO. Ao assinar esta guia, cliente afirma ter lido e entendido todo o seu conteúdo, não havendo dúvida ou margem à ambiguidade, bem como expressamente aceita integralmente seu teor.
            </p>
        </div>
        <hr style="color: black; height: 2px; background: black;">
        <div>
            <table>
                <tr>
                    <td>Data de Entrada: {{date('m/d/Y')}} </td>
                    <td>Hora: {{date('h:i')}} </td>
                    <td>Visto: TV Sales</td>
                </tr>
                <tr>
                    <td colspan="3">Situação da Ordem: {{$result->status}} </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="color: black; height: 2px; background: black;">
                    </td>
                    <td>
                        <hr style="color: black; height: 2px; background: black;">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        ( ) Via do Cliente    ( X ) Via da Empresa    
                    </td>
                    <td>
                        Visto: Nome do Cliente
                    </td>
                </tr>
            </table>
        </div>





        
    </div>



 </body>

 </html>