// Obtén una referencia al elemento del interruptor de modo oscuro
const darkModeSwitcher = document.querySelector(".dark-mode-switcher");

// Obtén una referencia al elemento que representa el modo oscuro
const body = document.body;

// Agrega un evento de clic al elemento del interruptor
darkModeSwitcher.addEventListener("click", function () {
    // Cambia el color de fondo y el texto del interruptor
    let switcher = this.querySelector(".dark-mode-switcher__toggle");
    if (switcher.classList.contains("dark-mode-switcher__toggle--active")) {
        switcher.classList.remove("dark-mode-switcher__toggle--active");
        // Cambia a modo claro
        body.classList.remove("dark-mode");
    } else {
        switcher.classList.add("dark-mode-switcher__toggle--active");
        // Cambia a modo oscuro
        body.classList.add("dark-mode");
    }
});
