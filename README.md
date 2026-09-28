# Simulador SAEP

O **Simulador SAEP** é uma aplicação web desenvolvida para auxiliar estudantes do **SESI** na preparação para a prova SAEP, oferecendo um ambiente para realização de simulados e gerenciamento de informações.

Além do simulador, o sistema possui funcionalidades de **cadastro de funcionários** e **cadastro de pedidos**, permitindo aplicar na prática conceitos de desenvolvimento web e banco de dados.

## 📌 Principais Recursos

* 📝 Simulado da prova SAEP
* 👤 Cadastro de funcionários
* 📦 Cadastro de pedidos
* 🗄️ Armazenamento de informações em banco de dados
* 🌐 Sistema web executado localmente
* 🔐 Integração com banco de dados MySQL

## 🛠️ Tecnologias Utilizadas

* **PHP** — desenvolvimento da aplicação e processamento das informações
* **MySQL** — gerenciamento e armazenamento dos dados
* **HTML5** — estrutura das páginas
* **CSS3** — estilização e layout
* **XAMPP** — ambiente de desenvolvimento local
* **Apache** — servidor web utilizado para executar a aplicação

## 📋 Pré-requisitos

Antes de executar o projeto, é necessário ter instalado:

* [XAMPP](https://www.apachefriends.org/)
* Git
* Navegador web, como Google Chrome, Microsoft Edge ou Mozilla Firefox

O XAMPP será utilizado para disponibilizar o **Apache** e o **MySQL** necessários para o funcionamento do sistema.

## 🚀 Como Instalar e Rodar o Projeto

### 1. Clonar o repositório

Abra o terminal e clone o repositório:

```bash
git clone https://github.com/SEU-USUARIO/simulador-saep.git
```

Depois, entre na pasta do projeto:

```bash
cd simulador-saep
```

### 2. Mover o projeto para o XAMPP

Copie ou mova a pasta `simulador-saep` para a pasta `htdocs` do XAMPP.

No Windows, normalmente o caminho é:

```text
C:\xampp\htdocs\
```

O projeto deverá ficar, por exemplo:

```text
C:\xampp\htdocs\simulador-saep
```

### 3. Iniciar o XAMPP

Abra o **XAMPP Control Panel** e inicie os seguintes serviços:

```text
Apache
MySQL
```

Os dois serviços precisam estar em execução para que o sistema funcione corretamente.

### 4. Criar o banco de dados

Abra o navegador e acesse:

```text
http://localhost/phpmyadmin
```

No phpMyAdmin, crie o banco de dados utilizado pelo projeto.

Caso o projeto possua um arquivo `.sql`, importe esse arquivo pelo phpMyAdmin para criar automaticamente as tabelas necessárias.

### 5. Configurar a conexão com o banco

Verifique o arquivo responsável pela conexão com o banco de dados e confirme as informações do MySQL.

Em uma instalação padrão do XAMPP, os dados normalmente são:

```text
Host: localhost
Usuário: root
Senha: 
Porta: 3306
```

A senha pode permanecer vazia caso o MySQL do XAMPP esteja utilizando a configuração padrão.

> O nome do banco de dados deve ser configurado de acordo com o banco utilizado pelo projeto.

### 6. Executar o projeto

Com o **Apache** e o **MySQL** ligados, abra o navegador e acesse:

```text
http://localhost/simulador-saep
```

A página inicial do projeto será carregada.

## 💻 Como Usar

### Realizar o simulado

1. Acesse o sistema pelo navegador.
2. Entre na área do **Simulador SAEP**.
3. Responda às questões apresentadas.
4. Utilize o sistema para praticar os conteúdos cobrados na avaliação.

### Cadastrar funcionário

1. Acesse a área de cadastro de funcionários.
2. Preencha os dados solicitados.
3. Confirme o cadastro.
4. O funcionário será armazenado no banco de dados.

Fluxo:

```text
Cadastro de Funcionário
          ↓
Preenchimento dos dados
          ↓
     Confirmação
          ↓
Funcionário cadastrado
```

### Cadastrar pedido

1. Acesse a área de cadastro de pedidos.
2. Informe os dados solicitados.
3. Confirme o cadastro.
4. O pedido será registrado no banco de dados.

Fluxo:

```text
Cadastro de Pedido
        ↓
Preenchimento dos dados
        ↓
    Confirmação
        ↓
Pedido cadastrado
```

## 🤝 Como Contribuir

Contribuições são bem-vindas.

Para contribuir com o projeto:

### 1. Faça um fork do repositório

Crie uma cópia do projeto em sua conta do GitHub.

### 2. Clone o seu fork

```bash
git clone https://github.com/SEU-USUARIO/simulador-saep.git
```

```bash
cd simulador-saep
```

### 3. Crie uma nova branch

```bash
git checkout -b minha-alteracao
```

### 4. Faça suas alterações

Implemente a correção ou funcionalidade desejada e teste o funcionamento do sistema.

### 5. Faça o commit

```bash
git add .
git commit -m "feat: adiciona nova funcionalidade"
```

### 6. Envie a branch

```bash
git push origin minha-alteracao
```

### 7. Abra um Pull Request

No GitHub, abra um **Pull Request** descrevendo as alterações realizadas.

Procure:

* Manter o código organizado;
* Utilizar nomes claros para variáveis e funções;
* Testar as alterações antes do envio;
* Evitar alterações que não estejam relacionadas ao Pull Request;
* Utilizar mensagens de commit claras.

## 📄 Licença

Este projeto está disponível sob a licença **MIT**.

Consulte o arquivo `LICENSE` para obter os termos completos de utilização, modificação e distribuição do projeto.

---

## 👨‍💻 Sobre o Projeto

O **Simulador SAEP** foi desenvolvido como um projeto acadêmico para aplicar conhecimentos de **desenvolvimento web, PHP, banco de dados e organização de sistemas** em uma aplicação voltada à preparação para a avaliação SAEP.

O projeto também permite colocar em prática conceitos como **CRUD, conexão com banco de dados e desenvolvimento de aplicações web**.
