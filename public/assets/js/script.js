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

function corPrioridade() {
    var el = document.getElementsByClassName('span-prioridade')

    for (let i in el) {
        if (el[i].textContent === 'baixa') {
            el[i].setAttribute('id', 'span-baixa')
        } else if (el[i].textContent === 'media') {
            el[i].setAttribute('id', 'span-media')
        } else if (el[i].textContent === 'alta') {
            el[i].setAttribute('id', 'span-alta')
        } else if (el[i].textContent === 'urgente') {
            el[i].setAttribute('id', 'span-urgente')
        }
    }
}