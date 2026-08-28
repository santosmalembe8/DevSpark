<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('build/assets/css/thanks.css') }}">

<title>Obrigado!</title>

</head>

<body>

<div class="container">

    <div class="card">

        <div class="icon">

            <svg viewBox="0 0 24 24">
                <path d="M9.55 18.2L3.85 12.5L5.27 11.08L9.55 15.35L18.73 6.18L20.15 7.6L9.55 18.2Z"/>
            </svg>

        </div>

        <h1>Obrigado!</h1>

        <p>
            Recebemos a sua mensagem com sucesso.
            A nossa equipa analisará o seu pedido e responderá o mais rapidamente possível.
        </p>

        <div class="info">

            <h3>O que acontece agora?</h3>

            <p>
                A sua solicitação foi registada no nosso sistema.
                Em breve entraremos em contacto consigo através dos dados fornecidos no formulário.
            </p>

        </div>

        <a href="{{route('index')}}" class="btn">
            Voltar ao início
        </a>

        <div class="footer">
            Agradecemos a sua confiança.
        </div>

    </div>

</div>

</body>
</html>