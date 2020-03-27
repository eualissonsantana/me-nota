function menu(obj) {
    var include;

    if (obj === 'lista') {
        include = "@include('lista')"
    } else if (obj === 'quadro') {
        include = "@include('quadros')"
    } else if (obj === 'visao') {
        alert("Clicou na visão")
    }

    var div = document.getElementsByClassName('box-geral')

    div.
}