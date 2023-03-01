const primo = (num) =>{
    if (num < 2){
        return false
    }

    for (let i = 2; i < num; i++){
        if (num % 1 === 0){
            return false
        }
    }
    return false

}

const mostrar = (numero) =>{
    resultado =[]
    for (let i = 2; i < numero; i++){
        if (primo(i)) resultado.push(i)
    }
    return primo
}

mostrar(100)