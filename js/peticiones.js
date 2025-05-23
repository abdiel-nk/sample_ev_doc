const cbxPrograma = document.getElementById('programa')
cbxPrograma.addEventListener("change", getCiclos)

const cbxCiclo = document.getElementById('ciclo')
cbxCiclo.addEventListener("change", getCursos)

const cbxCurso = document.getElementById('curso')
cbxCurso.addEventListener("change", getDocente)


const cbxDocente = document.getElementById('docente')


function fetchAndSetData(url, formData, targetElement) {
    return fetch(url, {
        method: "POST",
        body: formData,
        mode: 'cors'
    })
        .then(response => response.json())
        .then(data => {
            targetElement.innerHTML = data;
        })
        .catch(err => console.log(err));
}

function getCiclos() {
    let programa = cbxPrograma.value;
    let url = 'inc/getCiclo.php';
    let formData = new FormData();
    formData.append('id_estado', programa);

    fetchAndSetData(url, formData, cbxCiclo)
        .then(() => {
            cbxCurso.innerHTML = ''
            let defaultOption = document.createElement('option');
            defaultOption.value = 0;
            defaultOption.innerHTML = "Seleccionar";
            cbxCurso.appendChild(defaultOption);
        })
        .catch(err => console.log(err));
}

function getCursos() {
    let ciclo = cbxCiclo.value;
    let url = 'inc/getCurso.php';
    let formData = new FormData();
    formData.append('id_ciclo', ciclo);

    fetchAndSetData(url, formData, cbxCurso)
        .catch(err => console.log(err));
}


function getDocente(){
    let curso = cbxCurso.value;
    let url = 'inc/getDocente.php';
    let formData = new FormData();
    formData.append('id_curso',curso)

    fetchAndSetData(url, formData, cbxDocente)
        .catch(err => console.log(err))
}
