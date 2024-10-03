<h1>productos</h1>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <a href="agregar_producto" class="btn btn-info">Agregar</a>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped dt-responsive table-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acciones</th>                                               
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                            $productos = ControladorProductos::ctrMostrarProductos();
                            foreach ($productos as $key => $value) {                         
                        ?>
                        <tr style = "background-color:#000888">
                            <td> <?php echo $value["descripcion"] ?></td>
                            <td>
                                <?php
                                if($value["stock"] <= 5){ ?>
                                <span class="badge bg-warning text-dark">
                                    <?php echo $value["stock"]; ?>
                                </span>                                
                                 <?php } else {  
                                    echo $value["stock"];
                                    }   ?>
                            </td>
                            <td>$ <?php echo number_format($value["precio_venta"],2) ?></td>
                            <td><a href="editar_producto" class="btn btn-warning"><i class="fas fa-edit"></i></a> <button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                            
                        </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>