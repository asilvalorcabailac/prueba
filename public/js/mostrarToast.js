function mostrarToastSweet(tipo, mensajes) {
    const Toast = Swal.mixin({
        toast: true,
        position: "center",
        showConfirmButton: false,
        timer: 3000
    });
    //warning - error - success - question - info

    Toast.fire({
        type: tipo,
        title: mensajes
    });
}
function mostrarToastr(tipo, mensajes) {
    const Toast = Swal.mixin({
        toast: true,
        position: "center",
        showConfirmButton: false,
        timer: 3000
    });
    //warning - error - success - question - info

    if (tipo == "info") {
        toastr.info(mensajes);
    } else if (tipo == "error") {
        toastr.error(mensajes);
    } else if (tipo == "warning") {
        toastr.warning(mensajes);
    } else if (tipo == "success") {
        toastr.success(mensajes);
    }
}
function mostrarToasts(tipo, mensajes) {
    if (tipo == "info") {
        $(document).Toasts("create", {
            class: "bg-info",
            title: "Información",
            autohide: true,
            delay: 750,
            icon: "fas fa-exclamation fa-lg",
            body: mensajes,
            position: "bottomLeft"
        });
    } else if (tipo == "error") {
        $(document).Toasts("create", {
            class: "bg-error",
            title: "Información",
            autohide: true,
            delay: 750,
            icon: "fas fa-times fa-lg",
            body: mensajes,
            position: "bottomLeft"
        });
    } else if (tipo == "warning") {
        $(document).Toasts("create", {
            class: "bg-warning",
            title: "Información",
            autohide: true,
            delay: 750,
            icon: "fas fa-exclamation-trianglefa-lg",
            body: mensajes,
            position: "bottomLeft"
        });
    } else if (tipo == "success") {
        $(document).Toasts("create", {
            class: "bg-success",
            title: "Información",
            autohide: true,
            delay: 750,
            icon: "far fa-check-circle fa-lg",
            body: mensajes,
            position: "bottomLeft"
        });
    }
}
function mostrarSweetAlert(tipo, mensaje) {
    if (tipo == "info") {
        Swal.fire({
            icon: "info",
            title: "Información",
            text: mensaje,
            confirmButtonText: "Cerrar"
        });
    } else if (tipo == "error") {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: mensaje,
            confirmButtonText: "Cerrar"
        });
    } else if (tipo == "warning") {
        Swal.fire({
            icon: "warning",
            title: "Advertencia",
            text: mensaje,
            confirmButtonText: "Cerrar"
        });
    } else if (tipo == "success") {
        Swal.fire({
            icon: "success",
            title: "Información",
            text: mensaje,
            confirmButtonText: "Cerrar"
        });
    }
}
