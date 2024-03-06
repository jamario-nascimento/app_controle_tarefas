## About Appp Controle de tarefas
laravel v 8.5.9
laravel/ui

- [Instalação do NodeJS obrigatoria para usar o npm](https://nodejs.org/en).

### Inmstalando Laravel UI

Adiciona o ui para interfaces frontend no Laravel
```composer require laravel/ui:^3.2```

Esse comando define o bootstrap como forntend para o laravel  e o --auth inclui scafold para login, registro de usuario...
```php artisan ui bootstrap --auth```

Baixa as dependencias de front e roda em modo dev
```npm install && npm run dev```