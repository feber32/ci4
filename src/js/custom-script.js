/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */


 $( document ).ready(function() {


   $( "#btn_Entrar" ).click(function() {

     var valUsuario=$( "#username" ).val();
     var pass=$( "#password" ).val();

     if(valUsuario===''){

         Materialize.toast('Usuario no valido', 3000, 'rounded pink lighten-1');

     }else if (pass==='') {

         Materialize.toast('Contraseña no valida', 3000, 'rounded pink lighten-1');

     }else{

       $("body").removeClass("loaded");

       $.ajax({
         method: "POST",
         //url: "DB_Selects/login/"+valUsuario+"/"+pass,
         url: "DB_Selects/login/",
         dataType: 'json',
         data: { name: valUsuario, location: pass }
       })
         .done(function( msg ) {
           console.log(msg);
           console.log(typeof msg);
           if(  msg['Acceso'] ){
             window.location.replace("/ci4/public/index.php/inicio");
           }else{
             $("body").addClass("loaded");
            Materialize.toast('Usuario y contraseña no validos', 3000, 'rounded pink lighten-1');
           }
         })
         .fail(function() {
           console.log( "error" );
         })
         .always(function() {
           console.log( "complete" );
         });

     }






   });







});
