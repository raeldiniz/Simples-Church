# Projeto Web Site da Igreja Simples de Jardim América

# Anotações
- Iniciar servidor
```
php artisan serve
# apos executar o comando, abrir o navegador e digitar: http://127.0.0.1:8000
```
# Roda todos os arquivos que estiver dentro da pasta migrations
php artisan migrate
php artisan migrate:fresh <- deleta todas as tables e roda os migrations tudo de novo  
php artisan migrate:refresh <- Vai passar primeiro no down (existindo ele deleta) e depois recria as tables

# Criar seed permitindo criar um novo usuario

php artisan make:seeder UsersSeeder
php artisan db:seed <- Cria um novo usuario
# criptografa a senha

bcrypt()

# cria um array de forma dinamica

compact()

# listar bd
@foreach ($users as $user)
    <li>
        {{$user->name}} -
        {{$user->email}} -
    </li>
@endforeach
O foreach é uma estrutura de repetição da linguagem de programação PHP. Ele é usado para facilitar a iteração de estruturas como arrays, objetos e outros tipos que são iteráveis. Como resultado ele percorrerá todos os itens da coleção, disponibilizando a chave e o valor de cada elemento

# Links 
<a href="{{ route('users.show', $user->id) }}">Detalhes</a>

# Only
Com o only consigo escolher o que o usuario pode inserir
- 
