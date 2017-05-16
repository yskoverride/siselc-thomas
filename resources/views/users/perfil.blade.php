@extends('layouts.users')

@section('content')    

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Actualizar Datos principales</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">                 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <div class="row">                                    
                            
                                <form role="form" action="{{ route('updatePerfil') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="nombres">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input name="lastName" value="{{ Auth::user()->lastName }}" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-6">
  	                                <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                            <label>Documento de identidad</label>
                                            <input name="DocIdentidad" value="{{ Auth::user()->DocIdentidad }}" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>
                                    <div class="col-lg-12" align="center">
                                        <button type="submit" class="btn btn-success">Actualizar</button>  
                                    </div>                               

                                </form>                              
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
@endsection       