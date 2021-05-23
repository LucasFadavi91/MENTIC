document.querySelector('.checkbox').addEventListener('change',()=>{
    document.querySelectorAll('.night-mode-available').forEach(ele=>{
        ele.classList.toggle('night');})
    
    //Guardamos el modo en localStorage
    if (document.body.classList.contains('night')){
        localStorage.setItem('dark-mode','true');
    } else {
        localStorage.setItem('dark-mode','false');
    }
});

//Obtenemos el modo actual
if (localStorage.getItem('dark-mode') === 'true') //Si es true, el night mode se queda activado
{
    document.querySelectorAll('.night-mode-available').forEach(ele=>{
        ele.classList.toggle('night');})
} else { // Si es false, el night mode se queda desactivado 
    document.querySelectorAll('.night-mode-available').forEach(ele=>{
        ele.classList.remove('night');})
}