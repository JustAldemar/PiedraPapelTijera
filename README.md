# Piedra, Papel o Tijera - PHP

## Descripción
Backend para el clásico juego de Piedra, Papel o Tijera implementado en PHP. El sistema procesa la jugada del usuario contra la máquina y determina el resultado del juego.

## Funcionalidades
- Procesamiento de jugadas del usuario (1: Piedra, 2: Papel, 3: Tijera)
- Generación aleatoria de jugadas de la máquina
- Lógica de comparación para determinar el ganador
- Validación de entrada de datos
- Respuesta con el resultado del juego

## Estructura del Código
- Recepción de datos mediante POST
- Asignación numérica: 1 (Piedra), 2 (Papel), 3 (Tijera)
- Comparación de jugadas con todas las combinaciones posibles
- Manejo de casos especiales (empates, entradas inválidas)

## Tecnologías Utilizadas
- PHP para la lógica del backend
- HTML5 para la estructura básica
- Bulma CSS para el styling (v0.9.4)

## Lógica del Juego
- Piedra (1) gana a Tijera (3)
- Tijera (3) gana a Papel (2)
- Papel (2) gana a Piedra (1)
- Jugadas iguales resultan en empate

## Validaciones
- Verificación de que el usuario haya seleccionado una opción
- Mensaje de error para valores nulos o inválidos
