<form action="{{route('registrar')}}" method="post" id="frmRegistrar">
    {{ csrf_field() }}
    <div class="row form-group">
        <div class="col-md-6">
            <label for="txtNombre">*Nombre(s):</label>
            <input class="form-control" type="text" name="nombres" id="txtNombre" required="required">
        </div>              
        <div class="col-md-6">
            <label for="txtPrimerApellido">*Apellido Paterno:</label>
            <input class="form-control" type="text" name="primer_apellido" id="txtPrimerApellido" required="required">
        </div>         
    </div>
    <div class="row form-group">                        
        <div class="col-md-6">
            <label for="txtSegundoApellido">*Apellido Materno:</label>
            <input class="form-control" type="text" name="segundo_apellido" id="txtSegundoApellido"required="required" >
        </div>
        <div class="col-md-6">
            <label for="sltGenero">*Genero:</label>
            <select class="form-control" name="id_genero" id="sltGenero" required="required">
                <option value="">--Seleccione--</option>
                @foreach($generos as $genero)
                    <option value="{{$genero->id_genero}}">{{$genero->genero}}</option>                                    
                @endforeach
            </select>
        </div>
    </div>
    <div class="row form-group">                        
        <div class="col-md-6">
            <label for="sltEstadoCivil">*Estado Civil:</label>
            <select class="form-control" name="id_estado_civil" id="sltEstadoCivil" required="required">
                <option value="">--Seleccione--</option>
                @foreach($estado_civil as $estado)
                    <option value="{{$estado->id_estado_civil}}">{{$estado->estado_civil}}</option>                                    
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="txtFechaNacimiento">*Fecha de nacimiento:</label>
            <input class="form-control" type="date" name="fecha_nacimimiento" id="txtFechaNacimiento" required="required">                            
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6">
            <label for="txtCorreoElectronico">*Correo electronico:</label>
            <input class="form-control" type="email" name="email" id="txtCorreoElectronico" required="required">                            
        </div>
        <div class="col-md-6">
            <label for="txtContrasena">*Contraseña:</label>
            <input class="form-control" type="password" name="password" id="txtContrasena" required="required">                            
        </div>
    </div>
    <hr/>
    <div class="row form-group">
        <div class="col-md-6">
            <label for="sltGradoAcademico">*Nivel de interés:</label>
            <select class="form-control" name="id_grado_academico" id="sltGradoAcademico" required="required">
                <option value="">--Seleccione--</option>
                @foreach($grado_academico as $grado)
                    <option value="{{$grado->id_grado_academico}}">{{$grado->grado_academico}}</option>                                    
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
        <label for="sltFacultad">Facultad:</label>
            <select class="form-control" name="id_facultad" id="sltFacultad" disabled="disabled">
                <option value="">--Seleccione--</option>
            </select>
        </div>
    </div>
</form>