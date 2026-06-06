# 🌐 Página Escola DNC

Landing Page desenvolvida utilizando HTML, CSS, JavaScript, PHP e MySQL como exercício prático de desenvolvimento web full stack.

<p align="center">
<img src="https://img.shields.io/badge/HTML-5-orange?style=for-the-badge&logo=html5"/>
<img src="https://img.shields.io/badge/CSS-3-blue?style=for-the-badge&logo=css3"/>
<img src="https://img.shields.io/badge/JavaScript-ES6-yellow?style=for-the-badge&logo=javascript"/>
<img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php"/>
<img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql"/>
<img src="https://img.shields.io/badge/Status-Concluído-green?style=for-the-badge"/>
</p>

---

## 📖 Sobre o Projeto

Este projeto consiste em uma Landing Page inspirada no layout da Escola DNC, desenvolvida com o objetivo de praticar conceitos fundamentais de desenvolvimento web.

Além da interface desenvolvida com HTML, CSS e JavaScript, o projeto conta com integração com banco de dados MySQL através de PHP para armazenamento das informações enviadas pelo formulário.

---

## 🚀 Funcionalidades

✔ Layout moderno baseado em Landing Pages

✔ Estrutura HTML semântica

✔ Estilização com CSS

✔ Interatividade com JavaScript

✔ Formulário de pré-matrícula

✔ Armazenamento de dados em banco MySQL

✔ Criação automática da tabela caso ela não exista

✔ Página de agradecimento após o envio do formulário

✔ Integração entre Front-end e Back-end

---

## 🛠 Tecnologias Utilizadas

* HTML5
* CSS3
* JavaScript
* PHP
* MySQL
* XAMPP
* Git
* GitHub

---

## 📂 Estrutura do Projeto

```text
Projeto-Pagina-Escola-DNC
│
├── Index.html
├── style.css
├── Index.js
├── conexao.php
├── database.php
├── pre_matricula.php
├── agradecimento.html
├── estilo_agradecimento.css
│
├── images/
├── cards/
├── icons/
```

### Arquivos principais

**Index.html**
Página principal da Landing Page.

**style.css**
Responsável pela estilização da página principal.

**Index.js**
Responsável pelas interações da interface.

**conexao.php**
Realiza a conexão com o banco de dados MySQL.

**database.php**
Cria automaticamente a tabela de pré-matrícula caso ela não exista.

**pre_matricula.php**
Recebe os dados enviados pelo formulário e realiza o cadastro no banco de dados.

**agradecimento.html**
Página exibida após o envio do formulário.

---

## ▶ Como Executar o Projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/PauloHMJ/Projeto-Pagina-Escola-DNC.git
```

### 2. Mover o projeto para o XAMPP

Copie a pasta para:

```text
C:\xampp\htdocs\
```

### 3. Iniciar os serviços

No XAMPP inicie:

* Apache
* MySQL

### 4. Acessar o phpMyAdmin
```text
http://localhost/phpmyadmin
```

### 5. Criar o banco de dados

Crie um banco chamado:

```sql
CREATE DATABASE forms_db;
```

### Observação

Após a criação do banco `forms_db`, a tabela `pre_matricula`
será criada automaticamente no primeiro envio do formulário.

### 6. Executar o projeto

Acesse:

```text
http://localhost/Projeto-Pagina-Escola-DNC/Index.html
```

---

## 🎯 Objetivos de Aprendizagem

* Desenvolvimento Front-end com HTML, CSS e JavaScript
* Manipulação de formulários HTML
* Integração entre PHP e MySQL
* Criação e manipulação de tabelas no banco de dados
* Armazenamento de dados enviados por usuários
* Versionamento utilizando Git e GitHub

---

## 👨‍💻 Autor

**Paulo Henrique Manoel Junior**

GitHub:
https://github.com/PauloHMJ
