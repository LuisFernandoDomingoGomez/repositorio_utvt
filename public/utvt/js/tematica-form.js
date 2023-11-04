$(document).ready(function() {
    const imagenDrop = document.getElementById('imagen-drop');
    const imagenInput = document.getElementById('imagen-input');

    imagenDrop.addEventListener('click', () => {
        imagenInput.click();
    });

    imagenInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        displayImage(file);
    });

    imagenDrop.addEventListener('dragover', (e) => {
        e.preventDefault();
        imagenDrop.classList.add('border-blue-500');
    });

    imagenDrop.addEventListener('dragleave', (e) => {
        e.preventDefault();
        imagenDrop.classList.remove('border-blue-500');
    });

    imagenDrop.addEventListener('drop', (e) => {
        e.preventDefault();
        imagenDrop.classList.remove('border-blue-500');
        const file = e.dataTransfer.files[0];
        displayImage(file);
    });

    function displayImage(file) {
        if (file) {
            const imagenName = document.getElementById('imagen-name');
            imagenName.textContent = file.name;
            const reader = new FileReader();
            reader.onload = (e) => {
                const img = new Image();
                img.src = e.target.result;
                img.classList.add('w-32', 'h-32', 'rounded-md', 'shadow-md');
                imagenDrop.innerHTML = '';
                imagenDrop.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }
});