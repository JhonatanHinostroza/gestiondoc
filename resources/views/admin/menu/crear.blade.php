@extends("theme.$theme.layout")

@section('titulo')
Crear Menús
    
@endsection
@section('contenido')
<div class="row">
      <div class="col-lg-12">
          @include('includes.form-error')
          <div class="card">
              <div class="card-header">
              
                 <h3 class="card-title">Crear Permisos</h3>
                
                </div>
                  
            <form action="{{route('guardar_menu')}}" id="form-general"  class="form-horizontal" method="POST">
             @csrf                               
                <div class="card-body table-responsive p-0">
                @include('admin.menu.form')   
                
                </div>
                <div class="card-footer">
                    
                    @include('includes.boton-form-crear')
                </div>


                </form>


          </div>
      </div>

</div>

@endsection