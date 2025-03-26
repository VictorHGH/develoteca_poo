#!/bin/bash

# Detect the operating system
if [[ "$OSTYPE" == "darwin"* ]]; then
    # macOS
	link1="dev_poo.test:8080"
elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
    # Linux
	link1="dev_poo.test:8080"
else
    echo "Unsupported operating system"
    exit 1
fi

link2="https://cursos.develoteca.com/courses/take/poo-php-web/lessons/60435878-2-7-manipulacion-de-atributos-en-php"

export link1
export link2
