<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $recurso->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $recurso->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::select('carrera_id', $carrera, $recurso->carrera_id, ['class' => 'form-control' . ($errors->has('carrera_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una Carrera']) }}
            {!! $errors->first('carrera_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Asignatura') }}
            {{ Form::select('asignatura_id', $asignatura, $recurso->asignatura_id, ['class' => 'form-control' . ($errors->has('asignatura_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una Asignatura']) }}
            {!! $errors->first('asignatura_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Tematica') }}
            {{ Form::select('tematica_id', $tematica, $recurso->tematica_id, ['class' => 'form-control' . ($errors->has('tematica_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una Categoria']) }}
            {!! $errors->first('tematica_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $recurso->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $recurso->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('anonimo') }}
            {{ Form::text('anonimo', $recurso->anonimo, ['class' => 'form-control' . ($errors->has('anonimo') ? ' is-invalid' : ''), 'placeholder' => 'Anonimo']) }}
            {!! $errors->first('anonimo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::text('archivo', $recurso->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $recurso->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $recurso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <div class="float-right">
            <a href="{{ route('recursos.index') }}" class="btn btn-danger mr-2">{{ __('Regresar') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>