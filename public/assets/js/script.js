function isActive(id) {
    if (id === 'lista') {
        window.location.href = 'lista';
        document.getElementById('li-lista').classList.add('active')
    } else if (id === 'quadro') {
        document.getElementById('li-quadro').classList.add('active')
    } else if (id === 'visao') {
        document.getElementById('li-visao').classList.add('active')
    }
}

function active(classe) {
    if (classe === 'lista-tarefas') {
        document.getElementById('li-lista').classList.add('active')
    }
}