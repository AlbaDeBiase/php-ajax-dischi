$(document).ready(function(){

var source   = $("#card-template").html();
var template = Handlebars.compile(source);


$.ajax({
  'url': 'dischi.php',
  'method': 'GET',
  'success': function(data){

      var genres=[];

      for (var i = 0; i < data.length; i++) {
          var context={
              poster: data[i].poster,
              title: data[i].title,
              author: data[i].author,
              year: data[i].year
          };
          var html = template(context);
          $('.card-container').append(html);

          // recupero anche il genere e verifico che non sia incluso nell'array di generi che ho predisposto
          if(!genres.includes(data[i].genre)) {
              genres.push(data[i].genre);
          }
      }

      // scorro i dischi per ogni disco appendo una select
      for (var i = 0; i < genres.length; i++) {
         $('#genre-filter').append(`<option value="${genres[i]}">
                ${genres[i]}</option>`);
      }
  },
          'error':function(){
             alert('errore!');
         }
     });

//funzione per intercettare il cambio di genere
     $('#genre-filter').change(function() {

         // svuoto il contenitore
         $('.card-container').empty();
    // recupero il valore seleionato
         var selected_genre = $(this).val();



         // faccio una chiamata ajax per inviare al server il genere
         $.ajax({
             url:'dischi.php',
             method: 'GET',
             data: {
                 genre: selected_genre
             },
             success:function(data) {
                 for (var i = 0; i < data.length; i++) {
                     var context={
                         poster: data[i].poster,
                         title: data[i].title,
                         author: data[i].author,
                         year: data[i].year
                     };
                     var html = template(context);
                     $('.card-container').append(html);
                 }
             },
             error: function(){
                 console.log('errore');
             }


         });
     });
});
