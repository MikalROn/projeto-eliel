#!/bin/bash

# Diretório alvo
TARGET_DIR="/xampp/htdocs"

# Verifica se o diretório atual está sob o diretório alvo
if [[ $PWD == $TARGET_DIR/* ]]; then
    # Execute os scripts se estiver no diretório correto
    sudo /opt/lampp/xampp startapache 
     sudo /opt/lampp/xampp startmysql
else
    # Se não estiver no diretório correto, copie os arquivos
    echo "Você não está no diretório correto. Copiando arquivos para $TARGET_DIR/meu_projeto..."
    
    # Cria o diretório se ele não existir
    mkdir -p "$TARGET_DIR/meu_projeto"
    
    # Copia todos os arquivos e subdiretórios para o diretório alvo
    cp -r ./* "$TARGET_DIR/meu_projeto/"
    
    echo "Arquivos copiados!"
fi







    
   