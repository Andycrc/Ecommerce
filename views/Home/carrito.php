<?php require_once VIEW_LAYOUT_PATH . 'header.php'; ?>

<body>

    <h1>Carrito de compras</h1>

    <div class="container pt-2">



            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Precio total</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($viewData['carrito'] as $item) { ?>
                        <tr>
                         <td><?php echo $item['producto']->getNombre(); ?></td>
                         <td><?php echo $item['cantidad']; ?></td>
                         <td><?php echo $item['producto']->getPrecio(); ?></td>
                            <td><?php echo $item['producto']->getPrecio() * $item['cantidad']; ?></td>
                            <td>
                                <form action="<?php echo URL . 'carrito/eliminarProducto'; ?>" method="POST">
                                    <input type="hidden" name="id_producto" value="<?php echo $item['producto']->getIdProducto(); ?>">
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total:</td>
                    </tr>
                </tfoot>
            </table>

            <form action="<?php echo URL . 'comprar'; ?>" method="POST">
                <button type="submit">Comprar</button>
            </form>



    </div>

</body>

<?php require_once VIEW_LAYOUT_PATH . "footer.php"; ?>


<?php

