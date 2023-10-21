<div class="box box-info p-4">
    <div class="box-body">
        <div class="form-group mb-4">
            {{ Form::label('titulo', 'Título', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
            {{ Form::text('titulo', $recurso->titulo, ['class' => 'form-input w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('titulo') ? ' border-red-500' : ''), 'placeholder' => 'Título']) }}
            {!! $errors->first('titulo', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="form-group">
                {{ Form::label('carrera_id', 'Carrera', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::select('carrera_id', $carrera, $recurso->carrera_id, ['class' => 'form-select w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('carrera_id') ? ' border-red-500' : ''), 'placeholder' => 'Selecciona una Carrera']) }}
                {!! $errors->first('carrera_id', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>

            <div class="form-group">
                {{ Form::label('asignatura_id', 'Asignatura', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::select('asignatura_id', $asignatura, $recurso->asignatura_id, ['class' => 'form-select w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('asignatura_id') ? ' border-red-500' : ''), 'placeholder' => 'Selecciona una Asignatura']) }}
                {!! $errors->first('asignatura_id', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>

            <div class="form-group">
                {{ Form::label('tematica_id', 'Tematica', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::select('tematica_id', $tematica, $recurso->tematica_id, ['class' => 'form-select w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('tematica_id') ? ' border-red-500' : ''), 'placeholder' => 'Selecciona una Tematica']) }}
                {!! $errors->first('tematica_id', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>
        </div>
        <br>
        <div class="grid grid-cols-4 gap-4">
            <div class="form-group col-span-2">
                {{ Form::label('descripcion', 'Descripción', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::textarea('descripcion', $recurso->descripcion, ['class' => 'form-input w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('descripcion') ? ' border-red-500' : ''), 'placeholder' => 'Descripción', 'rows' => 3]) }}
                {!! $errors->first('descripcion', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>

            {{ Form::hidden('tipo', null, ['id' => 'tipo-archivo']) }}

            <div class="form-group col-span-2">
                {{ Form::label('archivo', 'Subir archivo', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::file('archivo', ['class' => 'hidden', 'id' => 'file-input', 'accept' => '.jpg, .jpeg, .png, .gif, .bmp, .svg, .tiff, .ico, .mp4, .mov, .avi, .mkv, .wmv, .flv, .webm, .m4v, .mp3, .wav, .flac, .aac, .ogg, .pdf, .docx, .pptx, .xlsx, .csv, .doc, .ppt, .xls, .odt, .ods, .odp, .zip, .rar, .ai, .psd, .indd, .txt, .sql, .html, .xml, .css, .js, .php, .java, .ts, .c, .cpp, .cs, .py, .rb, .pl, .dwg, .dxf, .sldprt, .sldasm, .slddrw, .slddrw, .dwf, .dwt, .dws, .rvt, .dwf, .rfa, .3ds, .ova, .ovf, .vmdk, .vmx, .qcow2, .pkt, .pka, .ccna, .pks']) }}
                <div id="file-drop" class="w-full h-60 border-dashed border-2 border-green-400 rounded-lg flex flex-col items-center justify-center cursor-pointer">
                    <svg class="w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 8v12h-5v12h-4l11 10 11-10h-4V20h-5V8z"></path>
                    </svg>
                    <p class="text-green-400 text-xs md:text-sm lg:text-base mt-1">Agregar archivos</p>
                    <p class="text-green-400 text-xs md:text-sm lg:text-base mt-1">o arrastra y suelta</p>
                </div>
                <p id="file-name" class="mt-2 text-gray-700 text-sm"></p>
            </div>
        </div>
        <br>
        <div class="grid grid-cols-2 gap-4">
            <div class="form-group">
                {{ Form::label('autor', 'Autor', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::text('autor', $recurso->autor, ['class' => 'form-input w-full rounded-md focus:outline-none focus:ring focus:border-blue-300' . ($errors->has('autor') ? ' border-red-500' : ''), 'placeholder' => 'Autor']) }}
                {!! $errors->first('autor', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>

            <div class="form-group">
                {{ Form::label('anonimo', 'Anónimo', ['class' => 'block text-gray-700 text-sm font-bold mb-2']) }}
                {{ Form::select('anonimo', ['0' => 'No', '1' => 'Sí'], $recurso->anonimo, ['class' => 'form-select w-full rounded-md focus:outline-none focus:ring focus:border-blue-300', 'placeholder' => 'Selecciona una opción']) }}
                {!! $errors->first('anonimo', '<p class="text-red-500 text-xs mt-1">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt-4">
        <div class="float-right">
            <a href="{{ route('recursos.index') }}" class="btn btn-danger mr-2">{{ __('Regresar') }}</a>
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>

@php
    $validFileExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'tiff', 'ico', 'mp4', 'mov', 'avi', 'mkv', 'wmv', 'flv', 'webm', 'm4v', 'mp3', 'wav', 'flac', 'aac', 'ogg', 'pdf', 'docx', 'pptx', 'xlsx', 'csv', 'doc', 'ppt', 'xls', 'odt', 'ods', 'odp', 'zip', 'rar', 'ai', 'psd', 'indd', 'txt', 'sql', 'html', 'xml', 'css', 'js', 'php', 'java', 'ts', 'c', 'cpp', 'cs', 'py', 'rb', 'pl', 'dwg', 'dxf', 'sldprt', 'sldasm', 'slddrw', 'slddrw', 'dwf', 'dwt', 'dws', 'rvt', 'dwf', 'rfa', '3ds', 'ova', 'ovf', 'vmdk', 'vmx', 'qcow2', 'pkt', 'pka', 'ccna', 'pks'];
    $maxFileSizeMB = 50;
@endphp


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const fileDrop = document.getElementById('file-drop');
    const fileInput = document.getElementById('file-input');
    const fileNameDisplay = document.getElementById('file-name');

    const validFileExtensions = @json($validFileExtensions);
    const maxFileSizeMB = @json($maxFileSizeMB);

    fileDrop.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileDrop.classList.add('border-blue-500');
    });

    fileDrop.addEventListener('dragleave', () => {
        fileDrop.classList.remove('border-blue-500');
    });

    fileDrop.addEventListener('drop', (e) => {
        e.preventDefault();
        fileDrop.classList.remove('border-blue-500');

        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    fileDrop.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        const files = fileInput.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        for (const file of files) {
            fileNameDisplay.textContent = 'Archivo seleccionado: ' + file.name;  // Muestra el nombre del archivo seleccionado

            const extension = getFileExtension(file.name); // Detecta la extensión del archivo

            if (validFileExtensions.includes(extension) && file.size / (1024 * 1024) <= maxFileSizeMB) {
                // El archivo es válido, el envío del formulario continuará
            } else {
                // El archivo no cumple con los requisitos
                showFileTypeAlert();
                fileInput.value = '';
                fileNameDisplay.textContent = '';
            }
        }
    }

    function getFileExtension(filename) {
        return filename.split('.').pop().toLowerCase();
    }

    function showFileTypeAlert() {
        Swal.fire({
            title: 'Error',
            text: 'El archivo no cumple con los requisitos. Verifica la extensión y el tamaño del archivo (máximo 50 MB).',
            icon: 'error',
            confirmButtonText: 'OK',
            footer: '<a href="javascript:void(0);" onclick="showSupportedFormats()">Ver formatos compatibles</a>'
        });
    }

    function showSupportedFormats() {
    const supportedFormats = 
    `<table>
        <tr>
            <td>jpg, jpeg, png, gif, bmp, svg, tiff, ico</td>
        </tr>
        <tr>
            <td>mp4, mov, avi, mkv, wmv, flv, webm, m4v</td>
        </tr>
        <tr>
            <td>mp3, wav, flac, aac, ogg</td>
        </tr>
        <tr>
            <td>pdf, docx, pptx, xlsx, csv, doc, ppt, xls, odt, ods, odp</td>
        </tr>
        <tr>
            <td>zip, rar</td>
        </tr>
        <tr>
            <td>ai, psd, indd</td>
        </tr>
        <tr>
            <td>txt, sql, html, xml, css, js, php, java, ts, c, cpp, cs, py, rb, pl</td>
        </tr>
        <tr>
            <td>dwg, dxf, sldprt, sldasm, slddrw, slddrw, dwf, dwt, dws, rvt, dwf, rfa, 3ds</td>
        </tr>
        <tr>
            <td>ova, ovf, vmdk, vmx, qcow2</td>
        </tr>
        <tr>
            <td>pkt, pka, ccna, pks</td>
        </tr>
    </table>`;

    Swal.fire({
        title: 'Formatos Compatibles',
        html: supportedFormats,
        icon: 'info',
        confirmButtonText: 'OK'
    });
}

</script>
