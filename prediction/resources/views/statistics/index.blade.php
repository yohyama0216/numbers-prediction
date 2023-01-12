<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TEST</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <script
  src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
</head>
</head>

<body>
    <h1>各数字と出現回数</h1>
    <div style="width:800px">
        <canvas id="mychart"></canvas>
    </div>
    <script>
        var ctx = document.getElementById('mychart');
        var myChart = new Chart(ctx, {
            type: 'bubble',
            data: {
                datasets: [{
                    label: 'Number3当選数字',
                    data: [
                        {{$data}}
                    ],
                    backgroundColor: '#f88',
                }],
            },
            options: {
                scales: {
                    y: {
                        min: 0,
                        max: 16
                    },
                    x: {
                        min: 0,
                        max: 999
                    },
                },
            },
        });
    </script>
    </div>
</body>

</html>