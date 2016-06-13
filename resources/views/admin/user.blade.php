@extends('layouts.admin')

@section('content')

<!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
        Datos del PTC // Registro de Usuarios
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Nombre:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Nombre del usuario">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Apellidos:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Apellidos del usuario">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">E-mail:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control form-control-line" placeholder="Email del usuario">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Contraseña:</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control form-control-line" placeholder="Introdusza su contraseña">
                  </div>
                </div>

                

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grupo Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Docente Investigador</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Relación Laboral:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Base</option>                        
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Categoria:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Tiempo Completo</option>
                        <option>Tiempo Parcial</option>                        
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Profesor(Perteneciente a):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>PRODED</option>
                        <option>SNI Nivel 0</option>
                        <option>SNI Nivel 1</option>
                        <option>SNI Nivel 2</option>
                        <option>SNI Nivel 3</option>                        
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Grado Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Doctorado</option>
                        <option>Maestro</option>        
                      </select>                  
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Estudios Academicos:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-line" placeholder="Ultimo Grado de estudios alcanzado">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Cuerpo Academíco:</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Ciencias Nucleares UAZ-CA- 26</option>
                        <option>Radiobiología UAZ-CA-1 </option>       
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Linea de Generación y Aplicación del Conocimiento (LGAC):</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="00">Seleccione una opcion</option>
                        <option>Estudio y Aplicación de las Radiaciones.</option>
                        <option>Estudio y Aplicación de los Campos de Radiación, Contaminantes Ambientales y sus Efecto</option>       
                      </select>                  
                  </div>
                </div>


              </form> 

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->



@stop