 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>{{$user->name." ".$user->last_name}}</title>
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
    /*  .border-line td{
        border:solid black  1px;
      }
      .border-td{
        border:solid black  1px;
      }*/

    </style>
</head>

<body>

    <div class="container">
        <div class="head">
            <h2 style="margin: auto; margin-top: 15px;">TV SALES </h2>
            <p></p>
            <img src="{{asset('system_img/Smart logistica - Logo.png')}}" style=" margin-top: 15px; visibility: hidden;" width="150">
        </div>
         <table style="margin-top:0px;">
             <thead>
                 <tr>
                     <th>
                         <h4>
                             Número 
                         </h4>
                     </th>
                     <th>
                         <h4>
                             1 de 1
                         </h4>
                         
                     </th>
                 </tr>
                 <tr>
                     <th>
                         <h4>
                             Expedición:
                         </h4>
                     </th>
                     <th>
                         <h4>
                             Estado de México, México
                         </h4>
                         
                     </th>
				</tr>
                 <tr>
                     <th>
                         <h4>
                             Fecha:
                         </h4>
                     </th>
                     <th>
                         <h4>
                             {{date('d/m/Y')}}
                         </h4>
                         
                     </th>
                </tr>
                 <tr>
                     <th>
                         <h4>
                             Observaciones:  
                         </h4>
                     </th>
                     <th>
                         <h4>
                             Ejecutable sólo al extravío o daño de mercancías por EL (LA) C. 
                             <span class="blue-under">{{$user->name." ".$user->last_name}}</span>
                         </h4>
                         
                     </th>
                </tr>

                 <tr>
                     <th>
                         <h4>
                             Vencimiento            
                         </h4>
                     </th>
                     <th>
                         <h4>
                             Indefinido   
                         </h4>
                         
                     </th>
                </tr>

                <tr class="top-10">
                    <th colspan="2" class="text-center">
                        Importe: $30,000.00 (treinta mil pesos 00/100 M.N.)
                    </th>
                </tr>

                <tr class="top-30">
                    <th colspan="2">
                      <p style="text-align: left;">
                        Debemos y pagaremos incondicionalmente por este pagaré a la orden de la empresa TRALIMEX SA DE CV, con nombre comercial SMART LOGISTICA representada por el Sr. Emmanuel Meléndez Flores o a la persona que él asigne, en el lugar y fecha citado, la cantidad de $30,000.00  (Treinta mil pesos 00/100 M.N.) para garantizar el buen actuar de la relación comercial adquirida entre el C. <span class="blue-under"> {{auth()->user()->name}}  {{auth()->user()->last_name}}</span> con TRALIMEX SA DE CV, con nombre comercial  SMART LOGISTICA que consiste en el traslado y entrega de paquetes es obligación del asociado indicar a TRALIMEX SA DE CV la información completa de la entrega de las mercancías, nombre y/o fotografía de identificación y firma valida, vía aplicación digital o en físico según se le requiera al Asociado. En caso de que la información suministrada no sea cierta o válida, el Asociado acepta toda responsabilidad por cualquier daño o perjuicio que se cause al TRALIMEX SA DE CV o sus clientes. Debiendo pagar el valor total de la o las mercancías reclamadas a precio de venta. Por ello el presente enuncia mas no limita el importe pudiendo ser menor o superior al enunciado. 

                        Desde la fecha de solicitud de pago del presente documento hasta el día de su liquidación, este pagaré causará interés moratorio al 5% mensual, pagadero en el Estado de México o CDMX. Juntamente con el principal. Esta solicitud de hará vía correo electrónico al email registrado por el usuario, dándose por notificado en la fecha de envío del mismo.

                      </p>
                    </th>
                </tr>

                <tr>
                    <td>Aceptamos incondicionalmente</td>
                    <td></td>
                </tr>

                <tr>
                    <td><span class="blue-under"> {{auth()->user()->name}}  {{auth()->user()->last_name}}</span></td>
                    <td></td>
                </tr>

               


                 <!-- <tr>
                     <th>
                         <h4>
                             <img src="{{asset('images/'.$user->photo)}}" width="150">
                         </h4>
                     </th>
                     <th>
                         <h4>
                             <img src="{{asset('credit/'.$user->id_doc)}}" width="150">
                         </h4>
                         
                     </th>
                </tr>
                 <tr>
                 	 <th>
                         <h4>
                             Partner ID Card
                         </h4>
                         
                     </th>
                     <th>
                         <h4>
                             Digital Sign 
                         </h4>
                     </th>
                    

                 </tr>
                 <tr>
                 	<th>
                         <h4>
                            <img src="{{asset('credit/'.$user->partner_id)}}" width="150" height="100"> 
                         </h4>
                         
                     </th>
                     <th>
                         <h4 class="img-center">
                             <img src="{{asset('credit/'.$user->e_sign)}}" width="500"> 
                         </h4>
                     </th>
                     

                 </tr> -->
             </thead>
         </table>


       

     </div>

 </body>

 </html>