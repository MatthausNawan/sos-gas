<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anexo I</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        p {
            font-size: 14px;
            margin: 4px;
        }

        .border-top {
            width: 100%;
            font-weight: bold;
            margin-left: 5%;
        }

        .border-top,
        out {
            width: 75%;
            font-weight: bold;
            margin-left: 15%;
        }

        .footer p {
            font-size: 11px;
            margin: 0;
        }

        .page-break {
            page-break-after: always;
        }

        footer {
            position: fixed;
            bottom: -20px;
            left: 0px;
            right: 0px;
            height: 60px;
            width: 100%;
        }

        header {
            position: fixed;
            top: -40px;
            left: 0px;
            right: 0px;
            height: 50px;
        }

        header img {
            width: 140px;
            height: auto;
            margin-bottom: 20px
        }

        .mt-60 {
            margin-top: 60px;
        }

        .mt-50 {
            margin-top: 50px;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .text-label {
            margin-right: 50pt;
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <header class="text-center mb-4">
            <img src="assets/sos-logo.png" class="img-md" alt="sos-logo" style="height:100px; width:auto;">
        </header>
        <div class="titulo text-center mt-100">
            <h4 class="border-bottom"><b>CADASTRO PARA LEITURA INDIVIDUALIZADA E FORNECIMENTO DE GLP E CONDIÇOES GERAIS</b></h4>
        </div>

        <p class="text-justify">
            O sistema de individualização de gás LP é um benefício essencial para seu condomínio, seja ele vertical ou
            horizontal. Isso porque através do medidor individual, os condôminos pagam somente pelo que é
            consumido, ao invés de pagar uma quantia referente à divisão de todos os outros moradores. Além disso, a
            taxa de condomínio é desonerada e, consequentemente, a taxa de inadimplência reduz drasticamente.
        </p>

        <p class="text-justify">
            E para instalar esse sistema em seu apartamento ou residência, os técnicos da
            i-gás verificam as condições de segurança e adequação da tubulação instalada. Com tudo dentro das
            normas e decretos-lei vigentes, então é feita a instalação do equipamento. A fatura do gasto é mensal e é
            emitida em nome do condômino. Outra vantagem é que a fatura pode ser paga em toda rede bancária, em
            casas lotéricas, através da internet (via ficha de compensação) ou débito automático.
        </p>
        <p class="text-justify">
            Além dessa praticidade na hora do pagamento, os moradores também contam com o suporte emergencial
            para vazamentos gratuito. São profissionais treinados pela i-gás e que possuem amplo conhecimento dos
            procedimentos de instalação e manutenção dos medidores individuais de gás LP. Assim, os moradores de
            seu condomínio não pagam taxa mínima de consumo, não arcam com as despesas de outros condôminos e
            ainda têm uma assistência técnica gratuita sempre que for necessário.
            Outro ponto positivo é que a i-gás, após a implementação do serviço, assume a inteira responsabilidade
            pela atividade, de forma que tanto síndico, conselho e administração fazem somente o papel de agente
            fiscalizador.
        </p>


        <div class="titulo text-center mt-10">
            <h4 class="border-bottom"><b>Dados do Consumidor</b></h4>
        </div>
        <p>Nome: <b>{{$contract->first_name}}</b></p>
        <p>Data de Nasc.: <b>{{$contract->birth_date}}</b> </p>
        <p>Telefone: <b>{{$contract->phone}}</b></p>
        <p>Whatsapp: <b>{{$contract->mobile_phone}}</b></p>
        <p>CPF: <b>{{$contract->ssn}}</b></p>
        <p>Identidade: <b>{{$contract->register}}</span></p>

        <div class="titulo text-center mt-10">
            <h4 class="border-bottom"><b>Localização</b></h4>
        </div>
        <p>CEP: <b>{{$contract->zipcode}}</b></p>
        <p>Endereço: <b>{{$contract->address_1}},{{$contract->address_number}}</b> </p>
        <p>Bairro: <b>{{$contract->province}}</b></p>
        <p>Cidade: <b>{{$contract->city}}</b></p>
        <p>Estado: <b>{{$contract->state}}</b></p>
        <p>Condominio: <b>{{$contract->condominium_name}}</b></p>
        <p>Apto/Bloco: <b>{{$contract->condominium_block}} / {{$contract->condominium_apto}}</span></p>
    </div>

    <footer>
        <div class="footer align-items-center">
            @include('printables.partials.footer')
        </div>
    </footer>
    </div>

    <div class="page-break"></div>

    <div class="container-fluid">

        <div class="titulo mt-10">
            <h6 class="border-bottom"><b>REGRAS GERAIS</b></h6>
        </div>

        <div class="texto">
            <p class="text-justify">
                * Por este instrumento, o CONSUMIDOR solicita à SOS GÁS DISTRIBUIDORA LTDA o fornecimento de GLP - Gás Liquefeito de Petróleo à unidade autônoma que ocupa, o qual será armazenado na central de GLP da SOS GÁS DISTRIBUIDORA LTDA, localizada nas dependências do respectivo edifício/condomínio, conforme
                prévio "contrato de promessa de venda e compra de gás liquefeito de petróleo - GLP, de comodato e outras avenças".
            </p>

            <p class="text-justify">
                * O CONSUMIDOR pagará à SOS GÁS DISTRIBUIDORA LTDA pelo GLP efetivamente fornecido à sua unidade, pela leitura individualizada de consumo e eventuais outros serviços solicitados, sendo que não será exigido consumo mínimo mensal.
            </p>

            <p class="text-justify">
                * A SOS GÁS DISTRIBUIDORA LTDA encaminhará demonstrativo de consumo e serviços para pagamento pelo CONSUMIDOR, no qual será apontado o volume consumido de GLP, data de vencimento, condições de pagamento e valor do GLP, bem como eventuais serviços contratados ou produtos adquiridos oferecidos pela SOS GÁS DISTRIBUIDORA LTDA.
            </p>

            <p class="text-justify">
                * O não pagamento da conta na data de vencimento acarretará:
                1- multa moratória de 2%(dois) por cento, juros de mora de 1%(um) por cento ao mês e correção monetária nos termos legais.
                2 - no prazo de 20(vinte) dias, contados da data do vencimento, será lacrado medidor individual da unidade consumidora inadimplente até a devida quitação dos valores devidos, referente ao consumo, débitos de atraso, taxa de re-ligação ou rompimento do lacre de bloqueio parcial ou total;
            </p>

            <p class="text-justify">
                * O CONSUMIDOR se obriga a não alterar a situação ou a instalação dos bens que possibilitam o fornecimento de GLP e sua leitura individualizada, sob pena de serem cobrados do CONSUMINDOR os valores despendidos pela SOS GÁS DISTRIBUIDORA LTDA em caso de danos. Constatada qualquer irregularidade no fornecimento do GLP, a SOS GÁS DISTRIBUIDORA LTDA efetuará a suspensão por medida de segurança e poderá lacrar o medidor, o qual não poderá ser violado pelo CONSUMIDOR, sob pena de cominação ao pagamento de multa no valor de R$ 50,00 (cinqüenta reais) à SOS GÁS DISTRIBUIDORA LTDA, sem prejuízo de perdas e danos, eventualmente apurados; multa corrigida pelo IGPM a parir da presente data.
            </p>

            <p class="text-justify">
                * O presente instrumento será rescindido de pleno direito nas seguintes hipóteses:
                1 - independente de correspondência prévia, no caso de encerramento do "contrato de promessa de
                venda e compra de gás liquefeito de petróleo - GLP, de comodato e outras avenças", já mencionado;
                2- a quaisquer momento e sem pagamento de qualquer multa ou penalidade, mediante solicitação escrita pelo CONSUMIDOR, que possui a unidade consumidora escrita, será suspenso o fornecimento;
                3 - se houver solicitação de fornecimento de GLP por parte de novo CONSUMIDOR, deverá ser comprovada sua titularidade ou condição parcial de inquilino;
            </p>

            <div class="page-break"></div>


        </div>

        <div class="container-fluid">
            <p class="text-justify">
                * O CONSUMIDOR, fica obrigado a informar à SOS GÁS DISTRIBUIDORA, caso venha a desocupar o imóvel, sob pena das próximas faturar a unidade consumidora serem faturas em sua propriedade nominal;
            </p>

            <p class="text-justify">
                * O presente instrumento não poderá ser transferido a terceiros sem a expressa e prévia anuência da outra parte.
            </p>

            <p class="text-justify">
                * O CONSUMIDOR deverá manter seu cadastro, descrito na parte deste instrumento, devidamente atualziado, mediante a apresentação do respctivo documento à SOS GÁS DISTRIBUIDORA.
            </p>

            <p class="text-justify">
                * As partes designam o foro da Comarca de João Pessoa no estado da Paraíba como competente para dirimir quaisquer dúvidas ou controvérsias decorrentes da execução deste instrumento.
            </p>
            <div class="local-data text-left mt-4">
                <p style="font-size: 14px">
                    João Pessoa, {{date('d/m/Y',strtotime(now()))}}.
                </p>

            </div>

            <div class="assinatura mt-5 text-center">
                <p class="border-top out"><b>Consumidor</b> - CPF: {{$contract->ssn}}</p>
            </div>

            <div class="assinatura mt-5 text-center">
                <p class="border-top out"><b>Marcelo Tolentino</b> - Gerente de Vendas</p>
            </div>
        </div>


        <footer>
            <div class="footer align-items-center">
                @include('printables.partials.footer')
            </div>
        </footer>

    </div>




</body>

</html>
