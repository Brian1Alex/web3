<style>
       h1 {
        margin-top: 10px;
        padding: 12px;
        background-color: #996e02;
        border-radius: 22px;
        color: white;

    }
</style>

<h1 Align="center">¡ENVÍANOS TU RECETA!</h1>
<br>
<form class="" action="OJO" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Nombre:</label>
            <br>
            <input type="text" placeholder="Ingrese el primer apellido" class="form-control" name="primer_apellido_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Apellido:</label>
            <br>
            <input type="text" placeholder="Ingrese el segundo apellido" class="form-control" name="segundo_apellido_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Nick Name:</label>
            <br>
            <input type="text" placeholder="Ingrese un apodo (opcional)" class="form-control" name="nombres_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Título de la Receta:</label>
            <br>
            <input type="text" placeholder="Ingrese su título" class="form-control" name="titulo_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Ingredientes:</label>
            <br>
            <input type="text" placeholder="Ingrese sus ingredientes" class="form-control" name="telefono_ins" value="">
        </div>
        <div class="col-md-12">
            <label for="">Preparacion:</label>
            <br>
            <input type="text" placeholder="cuentanos la preparacion que se realiza :)" class="form-control" name="direccion_ins" value="">
        </div>
    </div>
    <br>
    <div class="col-md-12 text-center">
        <button type="submit" name="button" class="btn btn-primary">
            GUARDAR
        </button>
        &nbsp;
        <a href="<?php echo site_url();?>" class="btn btn-danger">CANCELAR</a>
    </div>
</form>