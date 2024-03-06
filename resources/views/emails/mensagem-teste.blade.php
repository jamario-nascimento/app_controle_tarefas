@component('mail::message')
# Introdução

Corpo da mensagem.

- Opção 1
- Opção 2
- Opção 3
- Opção 4

@component('mail::button', ['url' => ''])
Texto do Botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
