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

link2="https://cursos.develoteca.com/courses/take/poo-php-web/lessons/60579257-0-0-bienvenida-al-curso-de-poo"

export link1
export link2
