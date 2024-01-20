import Swal from 'sweetalert2'

document.addEventListener('toast', function(event) {
    const { title, message, type } = event.detail;

    Swal.fire({
        toast: true,
        position: 'top-end',
        title: title,
        text: message,
        type: type,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
});


// Para o evento alert
document.addEventListener('alert', function(event) {
    const { title, message, type } = event.detail;

    Swal.fire({
        title: title,
        text: message,
        icon: type, // 'success', 'error', 'warning', 'info', ou 'question'
        confirmButtonText: 'Ok'
    });
});
