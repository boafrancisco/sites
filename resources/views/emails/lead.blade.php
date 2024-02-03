<x-mail::message>
# Parabéns, voçê recebeu um novo lead

<p>
    Nome: {{ $data['name'] }}<br>
    Telefone: {{ $data['tel'] }}<br>
    Email: {{ $data['email'] }}
</p>

The body of your message.

<x-mail::button :url="'https://google.com'">
Acesse o site clicando aqui
</x-mail::button>

{{ date('d/m/Y') }},<br>
{{ config('app.name') }}
</x-mail::message>
