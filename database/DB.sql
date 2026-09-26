create database saep if not exists saep;
use saep;

create table funcionario (
    id int not null auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null
);

create table pedido (
    id int not null auto_increment primary key,
    funcionario_id int not null,
    nome_pedido varchar(100) not null,
    categoria varchar(100) not null,
    urgencia enum('baixa', 'media', 'alta') not null,
    data_solicitacao date not null,
    status enum('pendente', 'em andamento', 'concluido') not null default 'pendente',
    foreign key (funcionario_id) references funcionario(id)
);