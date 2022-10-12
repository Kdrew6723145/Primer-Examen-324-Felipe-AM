<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PREGUNTA 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>PREGUNTA 7 PERSONA</h1>
        <h2>BUSCAR PERSONA</h2>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url() . '/crear' ?>">
                    <label for="ci">Ci Estudiante</label>
                    <input type="text" name="ci" id="ci" class="form-control">
                    <br>
                    <button class="btn bnt-primary"> Buscar</button>
                </form>
            </div>
        </div>
        <hr>

        <h2>Listado de Personas</h2>

        <?php print_r($datos);?>

        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>CI</th>
                            <th>Nombre</th>
                            <th>Fecha nacimiento</th>
                            <th>Cod Departamento</th>
                            <th>Departamento</th>
                            <th>Editar</th>
                            <th>Dar de Baja</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

	    $(document).ready(function () {
	        $('#LibroTableContainer').jtable({
	            title: 'Tabla de Personas',
	            actions: {
	                listAction: '<?php echo site_url(); ?>/Crud/listarNombres',
	                createAction: '<?php echo site_url(); ?>/Crud/crear',
	                updateAction: '<?php echo site_url(); ?>/Crud/actualizar',
	                deleteAction: '<?php echo site_url(); ?>/Crud/eliminar'
	            },
	            fields: {
	                id: {
	                    key: true,
	                    list: false
	                },
	                nombre: {
	                    title: 'Nombre',
	                    width: '50%'
	                },
	                autor: {
	                    title: 'Autor',
	                    width: '20%'
	                },
	                fecha_creacion: {
	                    title: 'Fecha de creación',
	                    width: '30%',
	                    type: 'date',
	                    create: false,
	                    edit: false
	                }
	            }
	        });
	        $('#PersonaTableContainer').jtable('load');
	    });

	</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>