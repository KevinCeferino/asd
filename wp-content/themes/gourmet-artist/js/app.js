jQuery(document).foundation();

jQuery(document).ready(($) => {
  $('#platillos > div').not(':first').hide();
  jQuery('#filtrar .menu li:first-child').addClass('active');

  $('#filtrar .menu a').on('click', function () {
    jQuery('#filtrar .menu li').removeClass('active');
    jQuery(this).parent().addClass('active');

    var enlace = $(this).attr('href');

    $('#platillos > div').hide();
    $(enlace).fadeIn();
    return false;
  });

  var fecha = new Date();
  var hora = fecha.getHours()
  var comida = "";

  if (hora <= 10) {
    comida = "desayunar";
  } else if (hora >= 11 && hora <= 17) {
    comida = "comer";
  } else {
    comida = "cenar"
  }

  jQuery.ajax({
    url: admin_url.ajax_url,
    type: 'post',
    data: {
      action: `recetas_${comida}`
    }
  }).done((response) => {
    $('#hora').append('<em>' + comida + '</em>');
    $.each(response, function (index, object) {
      var plato_hora = '<li class="medium-4 small-12 columns">' +
        object.imagen +
        '<div class="contenido">' +
        '<h3 class="text-center">' +
        '<a href="' + object.link + '">' +
        object.nombre + '</h3>' +
        '</a>' +
        '</div>' +
        '</li>';

      $('#por-hora').append(plato_hora);
    });
  });
});



jQuery(document).ready(($) => {
  jQuery.ajax({
    url: admin_url.ajax_platos,
    type: 'post',
    data: {
      action: `platos`
    }
  }).done((response) => {
    console.log(response);
    $.each(response, function(index, object) {
      var ingredientes = object.taxo.ingredientes;
      var lista = ['<ul>'];
      ingredientes.forEach(element => {
        lista.push(`<li>${element.nombre}: ${element.precio}$`);
      });
      lista.push('</ul>');
      lista = lista.join('');

      var plato = `<li id="plato" class="class="medium-4 small-12 columns"">
      <div class="titulo">
      <h1>${object.nombre}</h1>
      ${lista}
      <a href="${object.link}">ver</a>
      </div>
      </li>`;


      $('#lista').append(lista);
      $('#platos_lista').append(plato);
    });

    var len = $('#platos_lista #plato').length;

      $('#platos_lista #plato').hide();
      $('#platos_lista #plato:first').show();

      var pos=1;
      $('.left').click(prev);
      $('.right').click(next);

      function next(){
        pos++;
        if(pos > len){pos = 1;}
        $('#platos_lista #plato').hide();
        $('#platos_lista #plato:nth-child('+pos+')').show();
      }
      function prev(){
        pos--;
        if(pos < 1){pos = len};
        $('#platos_lista #plato').hide();
        $('#platos_lista #plato:nth-child('+pos+')').show();
      }
  });
});