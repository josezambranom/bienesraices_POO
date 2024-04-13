document.addEventListener('DOMContentLoaded', function(){

    eventListener();
    darkMode();
});

function darkMode(){
    const prefiereDarMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarMode.matches);

    if (prefiereDarMode.matches){
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarMode.addEventListener('change', function(){
        if (prefiereDarMode.matches){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode')
    });
}

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // } else {
    //     navegacion.classList.add('mostrar')
    // } con togle se hace lo mismo

    navegacion.classList.toggle('mostrar');
}