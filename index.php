<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Notas</title>
    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">📚 Sistema Académico</a>
        </div>
    </nav>

    <div class="container mb-4"> <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-dark">Listado de Alumnos</h2>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalRegistro">
                <i class="bi bi-person-plus-fill"></i> Registrar Nuevo Alumno
            </button>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="miTabla" class="table table-hover table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre Completo</th>
                                <th>Correo / Contacto</th>
                                <th>Edad</th>
                                <th>Promedio</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan Ejemplo (Estático)</td>
                                <td>juan@correo.com<br><small class="text-muted">0991234567</small></td>
                                <td>22 años</td>
                                <td class="fw-bold">8.50</td>
                                <td><span class="badge bg-success">Notable</span></td>
                                <td>
                                    <button class="btn btn-sm btn-info text-white" title="Agregar Nota" data-bs-toggle="modal" data-bs-target="#modalNota"><i class="bi bi-journal-plus"></i></button>
                                    <button class="btn btn-sm btn-warning text-white" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditar"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRegistro" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-primary text-white"><h5 class="modal-title">Nuevo Estudiante</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><form><div class="mb-3"><label>Nombre</label><input type="text" class="form-control"></div><div class="mb-3"><label>Apellido</label><input type="text" class="form-control"></div><div class="row"><div class="col-6 mb-3"><label>Teléfono</label><input type="text" class="form-control"></div><div class="col-6 mb-3"><label>Nacimiento</label><input type="date" class="form-control"></div></div><div class="mb-3"><label>Correo</label><input type="email" class="form-control"></div><div class="d-grid"><button type="submit" class="btn btn-primary">Guardar</button></div></form></div></div></div>
    </div>

    <div class="modal fade" id="modalNota" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-info text-white"><h5 class="modal-title">Nota</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><form><div class="mb-3"><label>Materia</label><select class="form-select"><option>Matemáticas</option><option>Programación</option></select></div><div class="mb-3"><label>Nota</label><input type="number" class="form-control"></div><div class="d-grid"><button type="submit" class="btn btn-info text-white">Guardar</button></div></form></div></div></div>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-warning text-dark"><h5 class="modal-title">Editar</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><form><div class="mb-3"><label>Nombre</label><input type="text" class="form-control" value="Juan"></div><div class="mb-3"><label>Apellido</label><input type="text" class="form-control" value="Ejemplo"></div><div class="d-grid"><button type="submit" class="btn btn-warning">Actualizar</button></div></form></div></div></div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-auto shadow-lg">
        <div class="container">
            <p class="mb-1 fw-bold">Universidad de las Fuerzas Armadas ESPE</p>
            <p class="mb-0 small">Aplicación de Tecnologías Web</p>
            <small class="text-white-50">&copy; Grupo 3 - 2026 </small>
        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'excel', text: '<i class="bi bi-file-earmark-excel"></i> Excel', className: 'btn btn-success btn-sm' },
                    { extend: 'pdf', text: '<i class="bi bi-file-earmark-pdf"></i> PDF', className: 'btn btn-danger btn-sm' }
                ],
                language: { url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json' }
            });
        });
    </script>
</body>
</html>