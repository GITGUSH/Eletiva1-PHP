document.querySelectorAll('[data-confirmar]').forEach(function (el) {
    el.addEventListener('click', function (e) {
        if (!confirm(el.dataset.confirmar)) {
            e.preventDefault();
        }
    });
});

function digitos(v) { return v.replace(/\D/g, ''); }

var cpf = document.getElementById('cpf');
if (cpf) {
    cpf.addEventListener('input', function () {
        cpf.value = digitos(cpf.value).slice(0, 11)
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    });
}

var telefone = document.getElementById('telefone');
if (telefone) {
    telefone.addEventListener('input', function () {
        var v = digitos(telefone.value).slice(0, 11);
        if (v.length > 10) {
            v = v.replace(/(\d{2})(\d{5})(\d{1,4})/, '($1) $2-$3');
        } else if (v.length > 2) {
            v = v.replace(/(\d{2})(\d{1,5})(\d{0,4})/, '($1) $2-$3').replace(/-$/, '');
        }
        telefone.value = v;
    });
}

var placa = document.getElementById('placa');
if (placa) {
    placa.addEventListener('input', function () {
        placa.value = placa.value.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 7);
    });
}
