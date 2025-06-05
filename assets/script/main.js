
function setTema(tema) {
    const body = document.body;

    if (tema === 'claro') {
        body.style.backgroundColor = "#f8f9fa";
        body.style.color = "#000";
    } else {
        body.style.backgroundColor = "#1c1c1c";
        body.style.color = "#fff";
    }
}



class ValidaFormulario {
    constructor() {
        this.formulario = document.querySelector('.form')
        this.eventos()
    }

    eventos() {
        this.formulario.addEventListener('submit', e => {
            this.handleSubmit(e)
        })
    }

    handleSubmit(e) {
        e.preventDefault()
        const camposValidos = this.camposSaoValidos()
        const senhasValidas = this.senhasSaoValidas()

        if (camposValidos && senhasValidas) {
            alert('Formulário enviado.')

            this.formulario.reset()


            window.location.href = window.location.href
        }
    }

    senhasSaoValidas() {
        let valid = true

        const senha = this.formulario.querySelector('.senha')
        const repetirSenha = this.formulario.querySelector('.confSenha')

        if (!senha.value) {
            valid = false
            this.criaErro(senha, 'Campo senha não pode estar em branco.')
        }

        if (senha.value.length < 6 || senha.value.length > 12) {
            valid = false
            this.criaErro(senha, 'Senha precisa estar entre 6 e 12 caracteres.')
        }

        if (senha.value !== repetirSenha.value) {
            valid = false
            this.criaErro(senha, 'Campos senha e confirmar senha precisam ser iguais.')
            this.criaErro(repetirSenha, 'Campos senha e confirmar senha precisam ser iguais.')
        }

        if (!repetirSenha.value) {
            valid = false
            this.criaErro(repetirSenha, 'Campo confirmar senha não pode estar em branco.')
        }

        return valid
    }

    camposSaoValidos() {
        let valid = true;

        for (let errorText of this.formulario.querySelectorAll('.invalid-feedback')) {
            errorText.remove();
        }

        for (let campo of this.formulario.querySelectorAll('.validate')) {
            campo.classList.remove('is-invalid');
            campo.classList.remove('is-valid');
        }

        for (let campo of this.formulario.querySelectorAll('.validate')) {
            const label = campo.previousElementSibling.innerText;

            if (!campo.value) {
                this.criaErro(campo, `Campo "${label}" não pode estar em branco.`);
                valid = false;
                campo.classList.add('is-invalid');
            } else {
                campo.classList.add('is-valid');
            }

            if (campo.classList.contains('cpf')) {
                if (!this.validaCPF(campo)) valid = false;
            }


            return valid;
        }
    }

    validaCPF(campo) {
        const cpf = new ValidaCPF(campo.value)

        if (!cpf.valida(campo)) {
            this.criaErro(campo, 'CPF inválido.')
            return false
        }

        return true
    }

    criaErro(campo, msg) {
        const erroExistente = campo.parentElement.querySelector('.invalid-feedback')
        if (erroExistente) erroExistente.remove()

        const div = document.createElement('div')
        div.innerHTML = msg
        div.classList.add('invalid-feedback')
        campo.insertAdjacentElement('afterend', div)
        campo.classList.add('is-invalid')
    }
}

class ValidaCPF {
    constructor(cpfEnviado) {
        Object.defineProperty(this, 'cpfLimpo', {
            writable: false,
            enumerable: true,
            configurable: false,
            value: cpfEnviado.replace(/\D+/g, '')
        })
    }

    éSequência() {
        return this.cpfLimpo.split('').every((digit) => digit === this.cpfLimpo.charAt(0))
    }

    geraNovoCpf() {
        const cpfSemDigitos = this.cpfLimpo.slice(0, -2)
        const digito1 = ValidaCPF.geraDigito(cpfSemDigitos)
        const digito2 = ValidaCPF.geraDigito(cpfSemDigitos + digito1)
        this.novoCPF = cpfSemDigitos + digito1 + digito2
    }

    static geraDigito(cpfSemDigitos) {
        let total = 0
        let reverso = cpfSemDigitos.length + 1

        for (let stringNumerica of cpfSemDigitos) {
            total += reverso * Number(stringNumerica)
            reverso--
        }

        const digito = 11 - (total % 11)
        return digito <= 9 ? String(digito) : '0'
    }

    valida(campo) {
        const erroExistente = campo.parentElement.querySelector('.invalid-feedback')
        if (erroExistente) erroExistente.remove()

        if (!this.cpfLimpo) {
            this.criaErro(campo, 'CPF é obrigatório.')
            campo.classList.add('is-invalid')
            return false
        }

        if (typeof this.cpfLimpo !== 'string' || this.cpfLimpo.length !== 11 || this.éSequência()) {
            campo.classList.add('is-invalid')
            return false
        }

        this.geraNovoCpf()

        if (this.novoCPF !== this.cpfLimpo) {
            this.criaErro(campo, 'CPF inválido.')
            campo.classList.add('is-invalid')
            return false
        }

        campo.classList.add('is-valid')
        return true
    }

    criaErro(campo, msg) {
        const div = document.createElement('div')
        div.innerHTML = msg
        div.classList.add('invalid-feedback')
        campo.insertAdjacentElement('afterend', div)
    }
}

const valida = new ValidaFormulario()
