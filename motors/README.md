# Motors - Catálogo de Motos em PHP

Catálogo interativo de motos desenvolvido em PHP puro, sem banco de dados.

## Estrutura de Pastas

```
motors/
├── index.php           → Página principal (listagem de produtos)
├── detalhe.php         → Página de detalhe do produto
├── css/
│   └── style.css       → Estilos do site
├── assets/
│   └── *.jpg/webp      → Imagens das motos
└── includes/
    ├── produtos.php    → Array com todos os produtos
    ├── functions.php   → Funções auxiliares
    ├── header.php      → Cabeçalho HTML
    └── footer.php      → Rodapé HTML
```

## Como rodar localmente

Você precisa de um servidor PHP. As opções mais simples são:

### Opção 1 — PHP embutido (recomendado)
```bash
cd motors
php -S localhost:8000
```
Depois acesse: http://localhost:8000

### Opção 2 — XAMPP / WAMP / MAMP
Copie a pasta `motors/` para dentro de `htdocs/` (XAMPP) ou `www/` (WAMP)
e acesse: http://localhost/motors

### Opção 3 — Laragon
Copie a pasta para `C:/laragon/www/motors` e acesse: http://motors.test

## Funcionalidades

- Listagem de todos os produtos na página inicial
- Filtro por categoria na navegação (Trail e Naked / Big Trails e Touring Premium / Urbanas)
- Página de detalhe com preço e parcelamento em 10x
- Sem banco de dados — produtos gerenciados diretamente em `includes/produtos.php`

## Adicionar um novo produto

Abra `includes/produtos.php` e adicione um item ao array `$produtos`:

```php
[
    'nome' => 'Nome da Moto',
    'foto' => 'nome-da-foto.jpg',   // coloque a imagem em assets/
    'desc' => 'Descrição da moto.',
    'preco' => 50000,               // valor em reais (sem R$)
    'cat'  => 'Trail e Naked'       // categoria existente ou nova
],
```
