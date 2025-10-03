//
//  main.swift
//  segundaPrueba
//
//  Created by dam1 on 3/10/25.
//

import Foundation

// Variables, constantes, arrays y tuplas en Swift

let coordenadas = (3.6,8.2);
let http = (code: 404, text: "Not Found", go:true);
print(http.code)

// Declarar varios una variable con varios atributos

var film: (pelicula: String, anio: Double, rank: Float) = ("Cars", 2006, 7.5)
print(film.0)

//Poner valores en vacío con el _

let (pelicula,_,_) = film
print(pelicula)

//Arrays

let numeros = [1,2,3,4,5];
var nombres = ["Juan","Pedro","María"];
print(nombres[0])

//Añadir un nombre con append

nombres.append("Falto yo")
print(nombres[3])

//Eliminar un elemento

nombres.remove(at: 3)

//Usar el Set

let apellidos = Set(["Lijarcio", "Merino"])

//Contar los apellidos

var contador = apellidos.count
print(contador)

//Sacar los apellidos que tengan Lijarcio
print(apellidos.contains("Lijarcio"))

//For

for numero in numeros {
    print(numero)
}
for num in numeros.sorted(){
    print(num)
}

var pares: Set = [2,4,6,8,10]
var impares: Set = [1,3,5,7,9]
var primos: Set = [2,3,5,7]

//Unir los impares con los pares y ordenarlos

print(impares.union(pares).sorted())

//For each

var impares2: [Int] = [1,3,5,7,9]

impares2.forEach{ impares in
    print(impares)
}
