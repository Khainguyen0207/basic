$(document).ready(function(){
   $('button[type="reset"][data-bb-toggle="btn-with-href"]').on('click', function(e) {
       e.preventDefault();

       window.location.href = $(this).data('url');
   })
})
