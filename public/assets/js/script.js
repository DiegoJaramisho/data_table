$(document).ready( function () {
    $('#employee').DataTable({
        responsive: true,
        autowidth:false
    });
});
function selectFila(datos){
    const fila = document.querySelector('#fila_'+datos.id)
    const tabla = document.querySelector('#body')
    // const arrayHijos = tabla.children
    // const todos = arrayHijos.map(element => element.id)
    // arrayHijos[0].id

    if(fila.classList.contains('bg-success')){
        fila.classList.remove('bg-success')
        fila.style.color = '#000'
    }else{
        fila.classList.add('bg-success')
        fila.style.color = '#fff'
    }
    // $('#fila_'+datos.id).addClass('bg-success')
    for(let child of tabla.children){

        // console.log(child.id)
        if(child.id==fila.id){
            child.classList.add('bg-success')
            child.style.color = '#fff'
        }else{
            child.classList.remove('bg-success')
            child.style.color = '#000'
        }

    }
    /* Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    }); */

    console.log(datos);
}

const urlActual = window.location;
const boton = document.querySelector('#boton')
if(urlActual.href == 'http://127.0.0.1:8000/employee'){
    boton.href = 'http://127.0.0.1:8000/api'
    boton.textContent = 'API'
}else{
    boton.href = 'http://127.0.0.1:8000/employee'
    boton.textContent = 'EMPLOYEE'
}

