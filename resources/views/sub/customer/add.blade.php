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
                                    
                                    <form class="form form-horizontal" method="post" action="{{route('customer.store')}}">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fa fa-eye"></i> About User</h4>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput3">Nome</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="username" class="form-control border-primary" placeholder="Nome" name="username" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Endereço</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="address" class="form-control border-primary" placeholder="Endereço" name="address" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput3">CEP</label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="number" class="form-control border-primary" placeholder="n°"name="number" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput4">Cidade</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="city" class="form-control border-primary" placeholder="Cidade" name="city" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput6" required data-validation-required-message="This field is required">Telefone</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control border-primary" type="text" placeholder="Telefone" id="phone_number" name="phone_number" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>

                                                   
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="userinput6" required data-validation-required-message="This field is required">CPF / CNPJ</label>
                                                        <div class="col-md-9">
                                                            <input class="form-control border-primary" type="text" placeholder="CPF / CNPJ" id="cpf_cnpj"pattern="[0-9]+" name="cpf_cnpj" title="Please input only 14 number" required data-validation-required-message="This field is required">
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
@endsection