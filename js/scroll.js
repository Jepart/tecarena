$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Evitar o comportamento de clique de âncora padrão
      event.preventDefault();

      // Hash da loja
      var hash = this.hash;

        // Usando o método jQuery animate () para adicionar scroll de página suave
       // O número opcional (800) especifica o número de milissegundos necessários para rolar para a área especificada
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function(){
   
        // Adicionar hash (#) ao URL quando feito scroll (comportamento de clique padrão)
        window.location.hash = hash;
      });
    } //Fim if
  });
});
