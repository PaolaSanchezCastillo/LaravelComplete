var tr; 
console.log("Linkeado")


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