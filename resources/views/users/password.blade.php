@extends('layouts.users')

@section('content')         

           
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Actualizar Password</h1>
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
                                <form role="form" action="{{ route('updatePassword')}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contraseña Actual</label>
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña">                                            
                                        </div>
  	                                <div class="form-group">
                                            <label>Nueva Contraseña</label>
                                            <input type="password" name="newPassword" class="form-control" placeholder="Contraseña">                                            
                                        </div>                           
                                        <div class="form-group">
                                            <label>Confirmar Nueva Contraseña</label>
                                            <input type="password" name="newPassword_confirmation" class="form-control" placeholder="Enter text">                                            
                                        </div> 
                                        <div align="center">
                                            <button type="submit" class="btn btn-success">Actualizar</button>  
                                        </div>                                              
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