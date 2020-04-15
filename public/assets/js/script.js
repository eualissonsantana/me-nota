function startPage() {
    defineSituacao();
    definePrioridadeLista();
    definePrioridadeQuadro();
    defineCategoria();

}

function definePrioridadeLista() {
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

function definePrioridadeQuadro() {
    var el = document.getElementsByClassName('span-prioridade-quadro')

    for (let i in el) {
        if (el[i].textContent === 'baixa') {
            el[i].setAttribute('id', 'span-quadro-baixa')
        } else if (el[i].textContent === 'media') {
            el[i].setAttribute('id', 'span-quadro-media')
        } else if (el[i].textContent === 'alta') {
            el[i].setAttribute('id', 'span-quadro-alta')
        } else if (el[i].textContent === 'urgente') {
            el[i].setAttribute('id', 'span-quadro-urgente')
        }
    }
}

function defineCategoria() {
    var el = document.getElementsByClassName('span-categoria')
    var cat
    var j = 1

    if (el.length == 0) {
        return
    }

    for (let i in el) {
        cat = 'cat' + parseInt(j)

        if (i == 0) {
            el[i].setAttribute('id', cat)
            j++
        }
        else if (getIdCategoria(el[i].textContent, i) != null) {
            el[i].setAttribute('id', getIdCategoria(el[i].textContent, i))
        } else {
            console.log("teste log")
            el[i].setAttribute('id', cat)
            j++
        }
    }
}

function defineSituacao() {
    var ancoras = document.getElementsByClassName('span-situacao')
    var imagens = document.getElementsByClassName('img-situacao')

    for (let i in ancoras) {
        if (ancoras[i].textContent === 'done') {
            img = imagens[i]
            img.setAttribute("src", "/assets/img/real-done.png")
            img.setAttribute("onmouseover", "changeOff(this)")
            img.setAttribute("onmouseout", "changeOn(this)")
        }

        ancoras[i].innerHTML = '';
    }
}

function getIdCategoria(categoria, cont) {
    var el = document.getElementsByClassName('span-categoria')

    for (let i = 0; i < cont; i++) {
        if (el[i].textContent == categoria) {
            return el[i].getAttribute("id")
        }
    }

    return null
}

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

function changeOn(elemento) {
    elemento.setAttribute("src", "/assets/img/real-done.png")
}

function changeOff(elemento) {
    elemento.setAttribute("src", "/assets/img/doing.png")
}