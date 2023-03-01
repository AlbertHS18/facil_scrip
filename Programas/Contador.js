function contador(texto = ''){
    if (typeof texto !== 'string') return 'el valor digitado no es una palabra';
    if (texto === '') return 'No ha ingresado nada';
    return  texto.length;
}

console.log(contador('Hola mundo'))