let btnEnviar = document.getElementById('enviar');

btnEnviar.addEventListener('click', (event) => {
    let nombre = document.getElementById('name').value;
    let correo = document.getElementById('correoEle').value;
    let celular = document.getElementById('celular').value;
    let vehiculo = document.getElementById('vehiculo').value;
    let check = document.getElementById('terminos').checked;

    let error = document.getElementById('error')

    console.log(check)

    if (check === false) {
        error.style.display = 'initial'
        event.preventDefault();

        if (nombre.trim() === '' || correo.trim() === '' || celular.trim() === '' || vehiculo.trim() === '') {
            error.style.display = 'initial'
            event.preventDefault();
        }
    }
});