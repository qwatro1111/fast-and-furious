$(function() {
   $('.btn_add').click(function( e ) {
       /*
           вместо $("selector").click( observer ) можно использовать синтаксис вида
                  $("selector").on( 'click', observer );
       */
       e.preventDefault(); // отменяем стандартное поведение

       // изменение стиля в нашем случае можно сделать так
       // этот способ быстрее всего, но применять его лучше не надо
       // хотя если сильно важна производительность - пишите так
     

       // или так
       $("#form_add").css("display","block");
       // или так
       $("#enterblock").show();
   });
});

