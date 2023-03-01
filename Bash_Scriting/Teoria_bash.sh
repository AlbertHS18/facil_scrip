#!/usr/bin/env bash


# Imprime un comentario en pantalla:
echo "Hello world!" # => Hello world!

# Declara una variable:
variable="Some string"

# Usar la variable:
echo "$variable" # => Some string
echo '$variable' # => $variable

# Expansión de parámetros ${...}:
echo "${variable}" # => Some string

# Declara un array :
array=(one two three four five six)

# Para imprimir un elemento:
echo "${array[0]}" # => "one"

# Para imprimir todos los elementos:
echo "${array[@]}" # => "one two three four five six"

# Para imprimir el numero de elementos:
echo "${#array[@]}" # => "6"

# Para imprimir el número de caracteres en el tercer elemento:
echo "${#array[2]}" # => "5"

# Imprimir 2 elementos a partir del cuarto:
echo "${array[@]:3:2}" # => "four five"

# Imprimir todos los elementos, cada uno de ellos en una nueva línea.
for item in "${array[@]}"; do
    echo "$item"
done


# Variables integradas:
# Hay algunas variables incorporadas útiles, como:
echo "Valor de retorno del último programa: $?"
echo "PID del script: $$"
echo "Número de argumentos pasados al script: $#"
echo "Todos los argumentos pasados al script: $@"
echo "Argumentos del script separados en diferentes variables: $1 $2..."

# Expansión de llaves {...}
# usado para generar cadenas arbitrarias:
echo {1..10} # => 1 2 3 4 5 6 7 8 9 10
echo {a..z} # => a b c d e f g h i j k l m n o p q r s t u v w x y z
# Esto generará el rango desde el valor inicial hasta el valor final.
# Tenga en cuenta que no puede usar variables aquí:
from=1
to=10
echo {$from..$to} # => {$from..$to}

# Lee el valor de una entrada:
echo "What's your name?"
read name
# Tenga en cuenta que no necesitamos declarar una nueva variable.
echo "Hello, $name!"

# Uso de codicionales.
# La condición es verdadera si el valor de $nombre no es igual al nombre de usuario de inicio de sesión del usuario actual:
if [[ "$name" != "$USER" ]]; then
    echo "Your name isn't your username"
else
    echo "Your name is your username"
fi

# Uso de (&, =) en condiciones para indicar que será verdadera miante dos condiciones mas:
read age
if [[ "$name" == "Steve" ]] && [[ "$age" -eq 15 ]]; then
    echo "This will run if $name is Steve AND $age is 15."
fi

if [[ "$name" == "Daniya" ]] || [[ "$name" == "Zach" ]]; then
    echo "This will run if $name is Daniya OR Zach."
fi

# También existe la ejecución condicional.
echo "Always executed" || echo "Only executed if first command fails"

# => Siempre ejecutado
echo "Always executed" && echo "Only executed if first command does NOT fail"
# => Siempre ejecutado
# => Solo se ejecuta si el primer comando NO falla

# Redefina el comando `ping` como alias para enviar solo 5 paquetes
alias ping='ping -c 5'
# Escape del alias y use el comando con este nombre en su lugar
\ping 192.168.1.1
# Imprimir todos los alias
alias -p

# Las expresiones se denotan con el siguiente formato:
echo $(( 10 + 5 )) # => 15

# directorio con el comando ls:
ls # Enumera los archivos y subdirectorios contenidos en el directorio actual

# Este comando tiene opciones que controlan su ejecución:
ls -l # Muestra cada archivo y directorio en una línea separada
ls -t # Ordena el contenido del directorio por fecha de última modificación (descendente)
ls -R # `ls` recursivamente este directorio y todos sus subdirectorios

# "\n" imprime un carácter de nueva línea
# "-e" para interpretar los caracteres de escape de nueva línea como caracteres de escape


# Ejecute el script de Python hello.py con varios stdin, stdout y
# redirecciones estándar:
python hello.py < "input.in" # pasar input.in como entrada al script

python hello.py > "output.out" # redirigir la salida del script a output.out

python hello.py 2> "error.err" # redirigir la salida de error a error.err


# Ejecutar un comando e imprimir su descriptor de archivo (por ejemplo, /dev/fd/123)

# Sobrescribir output.out con "#helloworld":
cat > output.out <(echo "#helloworld")
echo "#helloworld" > output.out
echo "#helloworld" | cat > output.out
echo "#helloworld" | tee output.out >/dev/null


# Limpiar archivos temporales detalladamente (add '-i' for interactive)
# ADVERTENCIA: los comandos `rm` no se pueden deshacer
rm -v output.out error.err output-and-error.log
rm -r tempDir/ # eliminar recursivamente
# Puede instalar el paquete Python `trash-cli` para tener `trash`
# que coloca los archivos en la papelera del sistema y no los elimina directamente

# Los comandos se pueden sustituir dentro de otros comandos usando $( ):
# El siguiente comando muestra el número de archivos y directorios en el
# directorio actual.
echo "There are $(ls | wc -l) items here."

# Bash usa una declaración `case` que funciona de manera similar para cambiar en Java y C++:
case "$Variable" in
  # Enumere patrones para las condiciones que desea cumplir
    0) echo "There is a zero.";;
    1) echo "There is a one.";;
    *) echo "It is not null.";;  # match everything
esac

# Ciclo `for` estructura:
for Variable in {1..3}
do
    echo "$Variable"
done
# => 1
# => 2
# => 3

# Ciclo `for` estructura de dos condiciones:
for ((a=1; a <= 3; a++))
do
    echo $a
done
# => 1
# => 2
# => 3


# Definir funciones:

function foo ()
{
    echo "Los argumentos funcionan igual que los argumentos del script: $@"
    echo "And: $1 $2..."
    echo "This is a function"
    returnValue=0    # Variable values can be returned
    return $returnValue
}


# Funciones:
bar ()
{
     echo "¡Otra forma de declarar funciones!"
     return 0
}

# Llamar a la funcion:
foo "My name is" $Name



