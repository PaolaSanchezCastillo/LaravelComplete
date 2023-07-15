

@extends('layouts.app-master')

@section('content')




<div class="container">
    <h1>Proveedores</h1>

    <button class="btn btn-info" id="agregarPartida">Agregar partida</button>

        <div class="table-body">
            <table>

                <thead>
                    <tr>
                    <td><label for="nombre">Nombre</label></td>
                    <td><label for="direccion">Direccion</label></td>
                    <td><label for="correo">Correo</label></td>
                </tr>

                </thead>
                <tbody id="partidas"> 

                </tbody>



                

                
            </table>

        </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
var tr; 
console.log("Linkeado");

$("#agregarPartida").click(function(){
    $("#partidas").append(
        "<tr>\
          <td>\
           <input type='text' class='nombreProveedor' />\
           </td>\
           <td>\
           <input type='text' class='direccionProveedor' />\
            </td>\
            <td>\
            <input type='text' class='correoProveedor'/>\
            </td>\
            </tr>");  

});
</script>


@endsection


