$(document).ready(function(e){
    /**
     *@VARIABLES
    **/
    var _url = window.location;
    
    $('.carousel').carousel({
        interval: 3000
    });
    
    $('ul.nav a[href="'+ _url +'"]').parent().addClass('active');
    
    $('ul.nav a').filter(function() {
        return this.href+'/' == _url;
    }).parent().addClass('active');
});
