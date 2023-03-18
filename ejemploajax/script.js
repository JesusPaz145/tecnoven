$(document).ready(function() {
  // Esta función se ejecutará cuando la página HTML haya terminado de cargarse.

  // Controlador de eventos para los enlaces del menú
  // Establecemos un controlador de eventos que se activará cuando se haga clic en un enlace del menú.
  $('nav ul li a').click(function(event) {

    // Evita que se recargue la página al hacer clic en el enlace
    // Esta línea impide que se realice la acción por defecto del enlace, que es navegar a otra página.
    event.preventDefault();

    // Obtiene el identificador de la opción del menú seleccionada
    // Esta línea extrae el valor del atributo "id" del enlace del menú que se ha hecho clic.
    var opcion = $(this).attr('id');

    // Imprime el valor de la opción seleccionada en la consola del navegador
    console.log('Opción seleccionada: ' + opcion);

    // Hace una solicitud AJAX para obtener el contenido dinámico
    // Esta línea hace una solicitud al servidor para obtener el contenido HTML correspondiente a la opción seleccionada.
    $.get('contenido/' + opcion + '.html', function(respuesta) {

      // Imprime la respuesta obtenida en la consola del navegador
      console.log('Respuesta recibida: ' + respuesta);

      // Actualiza el contenido dinámico con la respuesta de la solicitud
      // Esta línea actualiza el contenido del elemento HTML que se muestra debajo del menú con el contenido HTML obtenido.
      $('#contenido-dinamico').html(respuesta);
    });
  });
});
