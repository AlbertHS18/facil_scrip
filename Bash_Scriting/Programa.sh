#!/usr/bin/env bash

rad=${RANDOM:0:1}
echo "$rad"

N = 0

contador = 0

echo "**********Adivina el número, a ver si puedes."
echo "**********Solo tienes tres intentos."
while [[ $N -lt 3 ]] 
do
echo "Escriba un número del 1 al 10."
read contador
if [[ $rad -eq $contador ]]; then
echo "Felicidades el número ${contador} era el correcto"
break
else
echo "el número ${contador} no es correcto, vuelve a intentarlo"
fi
((N++))
done