$(document).ready(function() {
    var listTitles = [
        'Hit Systems',
        'Hit Systems | Sobre nosotros',
        'Hit Systems | Nuestros servicios',
        'Hit Systems | Contacto'
    ];
    var index; //2
    var lastIndex = index; //2
    $('li a').click(function() {
        index = $(this).parent('li').index() //3
        document.title = listTitles[index];
        if(index != 3) lastIndex = index;
        $('.close-btn').click(function() {
            console.log(lastIndex);
            document.title = listTitles[lastIndex];
        })
    })
    $('.nav-open').click(function() {
        if($('.slider').is(":visible")) {
            $('.slider').hide();
        } else {
            $('.slider').show();
        }
    })
});