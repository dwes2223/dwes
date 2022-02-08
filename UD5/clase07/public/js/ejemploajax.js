console.log("enlazado");

$('#formulario').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#filtro').val();
    console.log(data);

    $.get("/studies/filter?filter="+data, function(dataJSON, status){
        // console.log("Data: " + data + "\nStatus: " + status);
        console.log(dataJSON);
      //$('#destinofiltro').html(data);
    });      
})


//Si queremos enviar post en ajax hay que añadir los datos.
// (https://www.w3schools.com/JQuery/jquery_ajax_get_post.asp)
//$("button").click(function() {
    //   $.post("demo_test_post.asp",
    //   {
    //     name: "Donald Duck",
    //     city: "Duckburg"
    //   },
    //   function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    //   });
//}); 
    
    // Si eso viene de un formulario podemos leer el 
    // formulario de una tacada con serialize de jquery
    // const data = $('#miFormulario').serialize()
    // importante el data debe incluir el csrf si no devolverá
    // error 419 
    //})