## About Appp Controle de tarefas
laravel v 8.5.9
laravel/ui

- [Instalação do NodeJS obrigatoria para usar o npm](https://nodejs.org/en).
- [Trabalhando com excel no laravel](https://laravel-excel.com/)

### Instalando Laravel UI

Adiciona o ui para interfaces frontend no Laravel
```composer require laravel/ui:^3.2```

Esse comando define o bootstrap como forntend para o laravel  e o --auth inclui scafold para login, registro de usuario...
```php artisan ui bootstrap --auth```

Baixa as dependencias de front e roda em modo dev
```npm install && npm run dev```

Criando templates de email
```php artisan make:mail MensagemTesteMail --markdown emails.mensagem-teste```

Passar o parametro 14 laravel mail ele resources de email para /resources/views/vendor/mail
```php artisan vendor:publish```

Instalando laravel-excel
```composer require maatwebsite/excel:^3.1```
```php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config```

Exportanto dados com Laravel excel
```php artisan make:export TarefasExport --model=Tarefa```