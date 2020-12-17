$(document).ready(function(){

var source   = $("#card-template").html();
var template = Handlebars.compile(source);


$.ajax({
  'url': 'dischi.php',
  'method': 'GET',
  'success': function(risposta){
      for (var i = 0; i < risposta.length; i++) {
          var context={
              poster: risposta[i].poster,
              title: risposta[i].title,
              genre: risposta[i].genre,
              author: risposta[i].author,
              year: risposta[i].year
          };
          var html = template(context);
          $('card-container').append(html);
      }
  },
  'error':function(){
     alert('errore!');
   }
});
});
