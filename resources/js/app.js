require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// custom for me ============================================================================
const Swal = require('sweetalert2');
// noinspection JSUnresolvedFunction
const Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        // noinspection JSUnresolvedVariable
        toast.addEventListener('mouseenter', Swal.stopTimer)
        // noinspection JSUnresolvedVariable
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
// liwevire:load === get emit() method in livewire class
document.addEventListener('livewire:load', function () {
    Livewire.on('toast', function (type, message) {
        Toast.fire({
            icon: type,
            title: message,
        });
    });
});

