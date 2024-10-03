$(window).ready(function(){
    $("#buscarFecha").click(function(ev){
      ev.preventDefault();
      buscarFecha();
    })
  })
function buscar(){
    var fechaTwig=$("#fecha").val();
    alert(fechaTwig)
}


function buscarFecha(){
    var ruta= Routing.generate('buscarPorFecha');
    var fechaTwig=$("#fecha").val();
    
    $.ajax({
        
        tipe:'POST',
        url:ruta,
        data:({fecha:fechaTwig}),
        async:true,
        dataType:'json',
        success: function(data){
            var nombre = data['eventoRepositorio'].values("nombresalon");

            //var n=JSON.parse(data);
            alert(data['eventoRepositorio'])
            console.log(data);

        }
    }); 

} 