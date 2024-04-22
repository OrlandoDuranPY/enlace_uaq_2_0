import "./bootstrap";
import "flowbite";
import Swal from "sweetalert2/dist/sweetalert2.js";
import "sweetalert2/src/sweetalert2.scss";

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    /* ========================================
    Inicializar Toast
    ========================================= */
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    /* ========================================
    Toast: Muestra mensaje de exito al crear
    un curriculum o vacante
    ========================================= */
    Livewire.on("record_created", (message) => {
        Toast.fire({
            icon: "success",
            title: message,
        });

    });

    /* ========================================
    Toast: Muestra mensaje de exito al crear
    un curriculum o vacante
    ========================================= */
    Livewire.on("record_updated", (message) => {
        Toast.fire({
            icon: "success",
            title: message,
        });
    });
});
