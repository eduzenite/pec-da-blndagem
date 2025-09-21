<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">PEC da Blindagem</h2>
                        </div>
                        <div class="card-body">
                            <h3 class="fs-6">Cores</h3>
                            <p>
                                <i class="bi bi-square-fill" style="color:#28a745"></i>
                                Voto <strong>“Não”</strong> — representado pelo verde, cor associada à escolha correta nesta Proposta de Emenda à Constituição.
                            </p>
                            <p>
                                <i class="bi bi-square-fill" style="color:#ffc107"></i>
                                <strong>Não votou</strong> — destacado em amarelo, como um alerta para a ausência de posicionamento, quando se esperava um voto contrário.
                            </p>
                            <p>
                                <i class="bi bi-square-fill" style="color:#dc3545"></i>
                                Voto <strong>“Sim”</strong> — marcado em vermelho, sinal de perigo, remetendo a alerta e ao risco associado a esse posicionamento.
                            </p>

                            <h3 class="fs-6">Resumo</h3>
                            <p>A PEC da Blindagem, recentemente aprovada na Câmara dos Deputados, trata de mudanças significativas nas regras para processos criminais e prisões de parlamentares. A proposta restringe a prisão em flagrante de deputados e senadores e estabelece que a abertura de ações penais contra eles só possa ocorrer mediante autorização do próprio Legislativo. Essa medida tem sido interpretada como uma forma de proteção adicional aos parlamentares, pois transfere parte do poder do Judiciário para a arena política.</p>
                            <p>Na prática, a PEC reduz a autonomia de órgãos como o Ministério Público e o Judiciário, criando barreiras para que investigações e julgamentos avancem contra deputados e senadores. Críticos alertam que isso pode abrir caminho para a impunidade, principalmente em casos mais graves de corrupção ou abuso de poder, já que o andamento dos processos ficaria condicionado a interesses políticos.</p>
                            <p>Embora defensores da proposta argumentem que ela reforça a independência e a prerrogativa do Legislativo, a medida levanta preocupações sobre o equilíbrio entre os poderes e a capacidade de responsabilizar agentes públicos. Para a população, o efeito imediato pode ser um aumento na desconfiança em relação à classe política, justamente em um momento em que a transparência e a accountability são cada vez mais cobradas.</p>
                            <hr>
                            <strong>Fonte:</strong> <a href="https://www.cnnbrasil.com.br/politica/pec-da-blindagem-saiba-como-votou-cada-deputado/" target="_blank">https://www.cnnbrasil.com.br/politica/pec-da-blindagem-saiba-como-votou-cada-deputado/</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">PEC da Blindagem</h2>
                        </div>
                        <div class="card-body">
                            <h3 class="fs-6">Total de votos</h3>
                            <p>Apresenta a distribuição geral dos votos em “Sim”, “Não” e “Não votou”.
                                Esse panorama inicial permite entender rapidamente o equilíbrio ou desequilíbrio entre as posições, funcionando como uma visão consolidada do comportamento da Câmara diante da proposta.</p>
                            <hr>
                            <h3 class="fs-6">Votos por Estado</h3>
                            <p>Mostra como cada unidade da federação se posicionou.
                                Esse recorte evidencia tendências regionais, revelando, por exemplo, estados onde houve maior alinhamento favorável à proposta e outros onde prevaleceu a rejeição. Permite também identificar os estados com mais abstenções, sinalizando possível desmobilização política.</p>
                            <hr>
                            <h3 class="fs-6">Votos por Região</h3>
                            <p>Agrupa os resultados de cada estado em blocos regionais (Norte, Nordeste, Centro-Oeste, Sudeste e Sul).
                                Esse cruzamento ajuda a compreender dinâmicas macro-regionais, como a força do Sudeste em relação ao número absoluto de votos, ou padrões de convergência e divergência política dentro de cada região.</p>
                            <hr>
                            <h3 class="fs-6">Votos por partido</h3>
                            <p>Apresenta a soma dos votos de cada legenda, discriminando quantos deputados votaram “Sim”, “Não” ou se abstiveram.
                                Esse recorte é crucial para identificar o posicionamento formal ou divergente das bancadas, além de mostrar partidos que se dividiram internamente ou mantiveram disciplina partidária.</p>
                            <hr>
                            <h3 class="fs-6">Votos por posicionamento</h3>
                            <p>Aqui os partidos são agrupados de acordo com seu posicionamento político-ideológico, como esquerda, centro e direita. A análise permite observar de que forma cada bloco se posicionou diante da PEC, destacando se houve coesão dentro do espectro ou se surgiram divergências relevantes. Esse recorte ajuda a compreender não apenas a distribuição dos votos, mas também o comportamento ideológico das legendas, revelando até que ponto elas mantêm coerência com o discurso que defendem publicamente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">Total de votos</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="pergunta1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">Votos por Estado</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="pergunta3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">Votos por Região</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="pergunta4"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">Votos por partido</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="pergunta2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="fs-5">Votos por posicionamento</h2>
                        </div>
                        <div class="card-body">
                            <canvas id="pergunta5"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <h1>Dados</h1>
            <div class="card mb-3">
                <div class="card-header">
                    <h2 class="fs-5">Lista de Partidos</h2>
                </div>
                <div class="card-body">
                    <input class="form-control mb-3" id="searchInput1" type="text" placeholder="Filtrar por Partido, Espectro Político ou Posicionamento Ideológico">
                </div>
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Partido</th>
                            <th>Espectro Político</th>
                            <th>Posicionamento Ideológico</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable1">
                        @foreach($filesData['parties'] as $vote)
                            <tr>
                                <td> {{ $vote['Sigla'] }} </td>
                                <td> {{ $vote['Espectro Político'] }} </td>
                                <td> {{ $vote['Posicionamento Ideológico'] }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <h2 class="fs-5">Lista de Votos</h2>
                </div>
                <div class="card-body">
                    <input class="form-control mb-3" id="searchInput2" type="text" placeholder="Filtrar pelo Deputado, Partido, Voto ou Estado">
                </div>
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Deputado</th>
                            <th>Partido</th>
                            <th>Voto</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable2">
                    @foreach($filesData['votes'] as $vote)
                        <tr
                            @switch($vote['Voto'])
                                @case("Sim")
                                    class="table-danger"
                                @case("Não")
                                    class="table-success"
                                @case("Não votou")
                                    class="table-warning"
                            @endswitch
                        >
                            <td>{{ $vote['Deputado'] }}</td>
                            <td>{{ $vote['Partido'] }}</td>
                            <td>{{ $vote['Voto'] }}</td>
                            <td>{{ $vote['Estado'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
        <script>
            const pergunta1 = document.getElementById('pergunta1');

            var labels = @json(array_keys($votes));
            var data = @json(array_values($votes));

            new Chart(pergunta1, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Distribuição',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',   // vermelho
                            'rgba(75, 192, 192, 1)',    // verde
                            'rgba(255, 206, 86, 1)',   // amarelo
                            'rgba(54, 162, 235, 1)',   // azul
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        datalabels: {
                            formatter: (value, context) => {
                                const sum = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                                const percentage = (value / sum * 100).toFixed(1) + '%';
                                return percentage;
                            },
                            color: '#000',
                            font: {
                                weight: 'bold',
                                size: 12
                            }
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        </script>

        <script>
            const pergunta2 = document.getElementById('pergunta2');

            // Passa a variável PHP para JS
            var labels = @json($parties['labels']);
            var parties = @json(array_keys($parties['data']));
            var data = @json($parties['data']);

            // Cria datasets dinamicamente para cada tipo de voto
            var datasets = labels.map((voteType, i) => ({
                label: voteType,
                data: parties.map(party => data[party][voteType] ?? 0),
                backgroundColor: ['#28a745','#ffc107','#dc3545','#36a2eb','#6f42c1'][i % 5],
            }));

            new Chart(pergunta2, {
                type: 'bar',
                data: {
                    labels: parties,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        x: { stacked: true },
                        y: { stacked: true, title: { display: true, text: 'Quantidade de votos' } }
                    }
                }
            });
        </script>

        <script>
            const pergunta3 = document.getElementById('pergunta3');

            var states = @json($states['data']);       // { "SP":{"Sim":50,"Não":20,"Absteve":5}, ... }
            var voteLabels = @json($states['labels']); // ["Sim","Não","Absteve"]
            var stateNames = Object.keys(states);

            // Cria datasets dinamicamente
            var datasets = voteLabels.map((voteType, i) => ({
                label: voteType,
                data: stateNames.map(state => states[state][voteType] ?? 0),
                backgroundColor: ['#28a745','#ffc107','#dc3545','#36a2eb','#6f42c1'][i % 5],
            }));

            new Chart(pergunta3, {
                type: 'bar',
                data: {
                    labels: stateNames,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        x: { stacked: true },
                        y: { stacked: true, title: { display: true, text: 'Quantidade de votos' } }
                    }
                }
            });
        </script>

        <script>
            const pergunta4 = document.getElementById('pergunta4');

            var states = @json($regions['data']);
            var voteLabels = @json($regions['labels']);
            var stateNames = Object.keys(states);

            // Cria datasets dinamicamente
            var datasets = voteLabels.map((voteType, i) => ({
                label: voteType,
                data: stateNames.map(state => states[state][voteType] ?? 0),
                backgroundColor: ['#28a745','#ffc107','#dc3545','#36a2eb','#6f42c1'][i % 5],
            }));

            new Chart(pergunta4, {
                type: 'bar',
                data: {
                    labels: stateNames,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        x: { stacked: true },
                        y: { stacked: true, title: { display: true, text: 'Quantidade de votos' } }
                    }
                }
            });
        </script>

        <script>
            const pergunta5 = document.getElementById('pergunta5');

            var states = @json($positions['data']);
            var voteLabels = @json($positions['labels']);
            var stateNames = Object.keys(states);

            // Cria datasets dinamicamente
            var datasets = voteLabels.map((voteType, i) => ({
                label: voteType,
                data: stateNames.map(state => states[state][voteType] ?? 0),
                backgroundColor: ['#28a745','#ffc107','#dc3545','#36a2eb','#6f42c1'][i % 5],
            }));

            new Chart(pergunta5, {
                type: 'bar',
                data: {
                    labels: stateNames,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        x: { stacked: true },
                        y: { stacked: true, title: { display: true, text: 'Quantidade de votos' } }
                    }
                }
            });
        </script>

        <script>
            // Busca na tabela
            document.getElementById('searchInput1').addEventListener('keyup', function () {
                let filter = this.value.toLowerCase();
                let rows = document.querySelectorAll("#dataTable1 tr");

                rows.forEach(row => {
                    let text = row.textContent.toLowerCase();
                    row.style.display = text.includes(filter) ? "" : "none";
                });
            });
            document.getElementById('searchInput2').addEventListener('keyup', function () {
                let filter = this.value.toLowerCase();
                let rows = document.querySelectorAll("#dataTable2 tr");

                rows.forEach(row => {
                    let text = row.textContent.toLowerCase();
                    row.style.display = text.includes(filter) ? "" : "none";
                });
            });
        </script>

    </body>
</html>
