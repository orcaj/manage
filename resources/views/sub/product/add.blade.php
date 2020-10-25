@extends('layouts.app')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-colored-controls">Customer Profile</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    
                                    <form class="form form-horizontal" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fa fa-eye"></i> Product Info</h4>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput3">Customer Name</label>
                                                        <div class="col-md-9">
                                                            <select class="select2 form-control" name="customer_id" required="">
                                                                @foreach($customers as $customer)
                                                                    <option value="{{$customer->id}}">{{$customer->username}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Status</label>
                                                        <div class="col-md-9">
                                                            <select class="select2 form-control" name="status" required="">
                                                                <option value="Entrada">Entrada</option>
                                                                <option value="Em Análise">Em Análise</option>
                                                                <option value="Aguardando Resposta">Aguardando Resposta</option>
                                                                <option value="Orçamento Aprovado">Orçamento Aprovado</option>
                                                                <option value="Aguardando Peça">Aguardando Peça</option>
                                                                <option value="Pronto">Pronto</option>
                                                                <option value="Finalizado">Finalizado</option>
                                                                <option value="Garantia">Garantia</option>

                                                                <option value="Garantia Aguardando Peça">Garantia Aguardando Peça</option>
                                                                <option value="Devolução">Devolução</option>
                                                                <option value="Orçamento Rejeitado">Orçamento Rejeitado</option>

                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Aparelho</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="equipament" class="form-control border-primary" placeholder="Aparelho" name="equipament" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput3">Marca</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="brand" class="form-control border-primary" placeholder="Marca" name="brand" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Modelo </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="model" class="form-control border-primary" placeholder="Modelo" name="model" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Número de Série </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="serial_number"class="form-control border-primary" placeholder="Número de Série" name="serial_number" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">acessórios</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="access" class="form-control border-primary" placeholder="acessórios" name="access" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="basicTextarea">Problema relatado</label>
                                                        <textarea class="form-control" name="defect" rows="3" placeholder="Problema relatado" required data-validation-required-message="This field is required"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="placeTextarea">Orçamento</label>
                                                        <textarea class="form-control" name="description" rows="3" placeholder="Orçamento" required data-validation-required-message="This field is required"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="descTextarea">Observações</label>
                                                        <textarea class="form-control" name="observations"  rows="3" placeholder="Observações" required data-validation-required-message="This field is required"></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-2 label-control" for="userinput5">Área para inserção de fotos</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="custom-file-input form-group" id="photo" name="photo[]" required data-validation-required-message="This field is required" multiple="">
                                                    <label class="custom-file-label" for="inputGroupFile01" >Área para inserção de fotos</label>
                                                </div>
                                            </div>



                                            <div class="row custom-control custom-checkbox  form-group">
                                                <div class="col-md-12">
                                                    <input type="checkbox" class="custom-control-input" name="optional" id="optional">
                                                    <label class="custom-control-label" for="optional">Em garantia</label>
                                                </div>
                                            </div>

                                            <div class="row hidden" id="option_fields">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">NF </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="numeric_digits"class="form-control border-primary" placeholder="NF" name="numeric_digits">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Data de Compra </label>
                                                        <div class="col-md-9">
                                                            <input type="date" id="purchase_date" class="form-control border-primary" placeholder="Data de Compra" name="purchase_date">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Loja </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="store"class="form-control border-primary" placeholder="Loja" name="store">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
<!-- END: Content-->

<script type="text/javascript">
    $(function(){
        $("#optional").change(function(){
            flag=$("#optional").prop('checked');
            if(flag == true){
                $("#option_fields").removeClass('hidden');
            }else{
                $("#option_fields").addClass('hidden');
            }
        })

    })
</script>
@endsection