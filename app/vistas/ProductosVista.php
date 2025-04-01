<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title> <!-- Título de la página -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css"> <!-- Enlace al archivo de estilo externo -->
</head>

<style>
    /* Estilo general para la página */
    body {
        font-family: Arial, sans-serif; /* Tipo de letra para la página */
        background-color: #f4f4f9; /* Color de fondo */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center; /* Centra el contenido horizontalmente */
        align-items: center; /* Centra el contenido verticalmente */
        flex-direction: column; /* Coloca los elementos en una columna */
        height: 100vh; /* Hace que el contenido ocupe toda la altura de la ventana */
    }

    /* Estilo para el título de la página */
    h1 {
        color: #333; /* Color del título */
        margin-top: 20px; /* Espacio entre el título y el borde superior */
        text-align: center; /* Centra el texto del título */
    }

    /* Estilo para la tabla de productos */
    table {
        width: 80%; /* La tabla ocupa el 80% del ancho de la pantalla */
        margin-top: 20px; /* Espacio entre el título y la tabla */
        border-collapse: collapse; /* Combina los bordes de las celdas */
        background-color: #fff; /* Color de fondo de la tabla */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave alrededor de la tabla */
    }

    /* Estilo para las celdas de la tabla */
    th, td {
        padding: 12px; /* Espaciado dentro de las celdas */
        text-align: center; /* Centra el contenido de las celdas */
        border: 1px solid #ddd; /* Borde suave de las celdas */
    }

    /* Estilo para los encabezados de la tabla */
    th {
        background-color: #007bff; /* Color de fondo de los encabezados */
        color: white; /* Color de texto en los encabezados */
    }

    /* Estilo para las filas pares de la tabla */
    tr:nth-child(even) {
        background-color: #f4f4f9; /* Color de fondo para filas pares */
    }

    /* Estilo para las filas cuando se pasa el cursor por encima */
    tr:hover {
        background-color: #e0e0e0; /* Cambia el color de fondo al pasar el cursor */
    }

    /* Estilo para los enlaces */
    a {
        color: #007bff; /* Color del texto de los enlaces */
        text-decoration: none; /* Elimina el subrayado del enlace */
    }

    /* Estilo para los enlaces cuando se pasa el cursor por encima */
    a:hover {
        color: #0056b3; /* Cambia el color al pasar el cursor */
    }

    /* Estilo para el botón de agregar nuevo producto */
    .btn-agregar {
        display: inline-block; /* Hace que el botón se muestre en línea con otros elementos */
        padding: 12px 20px; /* Espaciado dentro del botón */
        background-color: #007bff; /* Color de fondo del botón */
        color: white; /* Color del texto dentro del botón */
        text-align: center; /* Centra el texto del botón */
        border-radius: 5px; /* Bordes redondeados del botón */
        text-decoration: none; /* Elimina el subrayado del enlace del botón */
        width: auto; /* Ajusta el tamaño del botón al contenido */
        transition: background-color 0.3s; /* Transición suave para el cambio de color del fondo */
        margin-top: 20px; /* Espacio entre la tabla y el botón */
    }

    /* Estilo para el botón cuando se pasa el cursor por encima */
    .btn-agregar:hover {
        background-color: #0056b3; /* Cambia el color de fondo al pasar el cursor */
    }
</style>

<body>
    <!-- Título principal de la página -->
    <h1>Lista de Productos</h1>

    <!-- Tabla para mostrar los productos -->
    <table border='1'>
        <thead>
            <!-- Encabezados de las columnas -->
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </thead>
        <tbody>
            <!-- Sección donde se listan los productos -->
            <?php
            // Itera a través del arreglo de productos y muestra cada producto en una fila
            foreach ($data as $producto) {
                echo "<tr>"; // Comienza una nueva fila
                echo "<td>" . $producto['id'] . "</td>"; // Muestra el ID del producto
                echo "<td>" . $producto['nombre'] . "</td>"; // Muestra el nombre del producto
                echo "<td>" . $producto['marca'] . "</td>"; // Muestra la marca del producto
                echo "<td>" . $producto['talla'] . "</td>"; // Muestra la talla del producto
                echo "<td>" . $producto['color'] . "</td>"; // Muestra el color del producto
                echo "<td>" . $producto['precio'] . "</td>"; // Muestra el precio del producto
                // Enlace para modificar el producto
                echo "<td><a href='" . RUTA_APP . "productos/modificar/" . $producto['id'] . "'>Modificar</a></td>";
                // Enlace para eliminar el producto, con confirmación
                echo "<td><a href='" . RUTA_APP . "productos/borrar/" . $producto['id'] . "' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este producto?\")'>Borrar</a></td>";
                echo "</tr>"; // Cierra la fila
            }
            ?>
        </tbody>
    </table>

    <!-- Espacio y botón para agregar un nuevo producto -->
    <br><br>
    <a href='<?php echo RUTA_APP . "productos/alta"; ?>'>
        <button type="button">Agregar nuevo producto</button>
    </a>
</body>
</html>
