<div class="box box-info p-4">
    <div class="box-body">
        <div class="mb-4">
            {{ Form::label('Nombre:', null, ['class' => 'font-bold']) }}
            {{ Form::text('name', $carrera->name, ['class' => 'form-input block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'placeholder' => 'Nombre de la Carrera']) }}
        </div>
        <div class="form-group col-span-2">
            {{ Form::label('imagen', 'Subir imagen de la Carrera', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
            {{ Form::file('imagen', ['class' => 'hidden', 'id' => 'imagen-input', 'accept' => 'image/*']) }}
            <div id="imagen-drop" class="w-full h-60 border-dashed border-2 border-green-400 rounded-lg flex flex-col items-center justify-center cursor-pointer">
                <svg class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 8v12h-5v12h-4l11 10 11-10h-4V20h-5V8z"></path>
                </svg>
                <p class="text-green-400 text-xs md:text-sm lg:text-base mt-1">Agregar imagen</p>
                <p class="text-green-400 text-xs md:text-sm lg:text-base mt-1">o arrastra y suelta</p>
            </div>
            <p id="imagen-name" class="mt-2 text-gray-700 text-sm"></p>
        </div>

    </div>
    <div class="box-footer mt-4">
        <div class="float-right">
            <a href="{{ route('carreras.index') }}" class="btn btn-danger mr-2">{{ __('Regresar') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/utvt/js/carrera-form.js"></script>