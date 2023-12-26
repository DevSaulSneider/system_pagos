$(document).ready(function () {
    // datatable para la lista de usuarios
    $("#tabla_usuarios").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "responsive": true,
        "autoWidth": false,
    });

    //Alerta para actualizar datos de la empresa
    $("#form_actualizar_empresa").submit(function (e) {
        e.preventDefault();
        
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                console.log(response);
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        window.location.href = data.url;
                    });

                } else {
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    // Alerta para el Formulario (modal) al crear un nuevo perfil
    $("#modal_perfil").submit(function (e) {
        e.preventDefault();
        // Verificar si el campo rol esta vacio
        if ($("#rol").val() == "") {
            toastr.error('Debe seleccionar un rol', 'Error');
            return;
        }
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        location.reload();
                    });

                } else {
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                    $("#modal-default").modal('hide');
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    // Alerta para el Formulario (modal) al crear un nuevo Servicio
    $("#modal_servicio").submit(function (e) {
        e.preventDefault();
        // Verificar si el campo servicio esta vacio
        if ($("#servicio").val() == "") {
            toastr.error('Debe seleccionar un servicio', 'Error');
            return;
        }
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        location.reload();
                    });

                } else {
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                    $("#modal-default").modal('hide');
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    // Alerta para el Formulario (modal) al crear un nuevo Periodo
    $("#modal_periodo").submit(function (e) {
        e.preventDefault();
        // Verificar si el campo de meses esta vacio
        if ($("#meses").val() == "") {
            toastr.error('Debe seleccionar un fecha', 'Error');
            return;
        }
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        location.reload();
                    });
                }else{
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                    $("#modal-default").modal('hide');
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            })
    })

    //Alerta para confirmar la creacion de un usuario
    $("#form_create_user").submit(function (e) {
        e.preventDefault();
        // Verificar si los campos estan vacios
        // Array de verificaciones
        const validations = [
            { field: "#name_user", message: 'Debe seleccionar un nombre de usuario' },
            { field: "#email_user", message: 'Debe seleccionar un usuario para iniciar sesión' },
            { field: "#password_user", message: 'Debe seleccionar una contraseña' },
            { field: "#password_repeat", message: 'Debe verificar su contraseña' }
        ];
        // Verificar campos vacíos
        for (const validation of validations) {
            const fieldValue = $(validation.field).val();
            if (fieldValue.trim() === "") {
                toastr.error(validation.message, 'Error');
                return;
            }
        }
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                console.log(response);
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        window.location.href = data.url;
                    });

                } else {
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    //Alerta para Actualizar un usuario
    $("#form_update_user").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        window.location.href = data.url;
                    });

                } else {
                    console.log(data.error);
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    //Alerta al Resetear password de un usuario
    $("#form_reset_password").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        window.location.href = data.url;
                    });

                } else {
                    console.log(data.error);
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });

    //Alerta para confirmar la creacion de un cliente
    $("#form_create_client").submit(function (e) {
        e.preventDefault();
        // Verificar si los campos estan vacios
        // Array de verificaciones
        const validations = [
            { field: "#nombre_cliente", message: 'Debe seleccionar un nombre' },
            { field: "#correo_cliente", message: 'El campo de email no puede estar vacío' },
            { field: "#primer_pago", message: 'Seleccione una fecha de primer pago' }
        ];
        // Verificar campos vacíos
        for (const validation of validations) {
            const fieldValue = $(validation.field).val();
            if (fieldValue.trim() === "") {
                toastr.error(validation.message, 'Error');
                return;
            }
        }
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
            .done(function (response) {
                let data = JSON.parse(response);
                if (data.success) {
                    swal.fire({
                        title: 'Éxito',
                        text: data.message,
                        icon: 'success'
                    }).then(() => {
                        window.location.href = data.url;
                    });

                } else {
                    swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            })
            .fail(function (error) {
                console.log("Error en la petición ajax: ", error);
            });
    });
    
    // Limitar longitud de input number
    $('#telefono_cliente, #telMovil_empresa').on('input', function () {
        limitarLongitudInput(this, 9);
    });
    function limitarLongitudInput(input, longitudMaxima) {
        if (input.value.length > longitudMaxima) {
            input.value = input.value.slice(0, longitudMaxima);
        }
    }

    //Date picker Crear Cliente
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    //Funcion para eliminar usuario
    $(".delete-user").click(function (e) { 
        e.preventDefault();
        // Obtener el ID del usuario desde el atributo data
        var userId = $(this).data('id');
        
        Swal.fire({
            title: '¿Estás seguro de eliminar este usuario?',
            text: 'Esta acción no se puede deshacer',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '../app/controller/usuarios/eliminar_usuario.php',
                    data: { id_user: userId }
                })
                .done(function (response) {
                    let data = JSON.parse(response);
                    if (data.success) {
                        swal.fire({
                            title: 'Éxito',
                            text: data.message,
                            icon: 'success'
                        }).then(() => {
                            window.location.href = data.url;
                        });
    
                    } else {
                        swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error'
                        });
                    }
                })
                .fail(function (error) {
                    console.log("Error en la solicitud Ajax: ", error);
                });
            }
        })
    })

    //Funcion para eliminar Perfil
    $(".delete-perfil").click(function (e) { 
        e.preventDefault();
        // Obtener el ID del usuario desde el atributo data
        let id_perfil = $(this).data('id');
        
        Swal.fire({
            title: '¿Estás seguro de eliminar este perfil?',
            text: 'Esta acción no se puede deshacer',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '../app/controller/perfiles/eliminar_perfil.php',
                    data: { id_perfil: id_perfil }
                })
                .done(function (response) {
                    let data = JSON.parse(response);
                    if (data.success) {
                        swal.fire({
                            title: 'Éxito',
                            text: data.message,
                            icon: 'success'
                        }).then(() => {
                            window.location.href = data.url;
                        });
    
                    } else {
                        swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error'
                        });
                    }
                })
                .fail(function (error) {
                    console.log("Error en la solicitud Ajax: ", error);
                });
            }
        })
    })

})