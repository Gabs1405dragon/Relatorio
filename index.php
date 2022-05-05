<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .grafico{
            margin: 0 auto;
            padding: 0 2%;
            max-width: 700px;
        }
        header{
            padding: 5px 2%;
            background-color: green;

        }
        header a{
            color: white;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <header>
        <div class="center">
            <a href="#">Atualizar Grafico</a>
        </div>
    </header>
    <div class="grafico">
      <canvas id="myChart" width="400" height="400"></canvas>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " ></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janeiro', 'Fevereiro','março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        datasets: [{
            label: '# Receitas dos messes',
            data: [12, 19,22, 3, 5, 2, 3,4,6,2,8,14,10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 222, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 98, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 203, 86, 0.2)',
                'rgba(75, 190, 192, 0.2)',
                'rgba(153, 111, 255, 0.2)',
                'rgba(255, 155, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 222, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 98, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 203, 86, 1)',
                'rgba(75, 190, 192, 1)',
                'rgba(153, 111, 255, 1)',
                'rgba(255, 155, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

$('header a').click((e)=>{
    e.preventDefault();
    atualizarGrafico();
})

function atualizarGrafico(){
    $.ajax({
    dataType:'json',
    url:'info.php',
    success:function(dataInfo){
        myChart.destroy();
      myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Abril', 'Maio', 'Junho', 'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        datasets: [{
            label: '# Todos os meses do Ano de 2022!',
            data: [dataInfo[0].valor, dataInfo[1].valor, dataInfo[2].valor, dataInfo[3].valor, dataInfo[4].valor, dataInfo[5].valor,dataInfo[6].valor,dataInfo[7].valor,dataInfo[8].valor,dataInfo[9].valor,dataInfo[10].valor,dataInfo[11].valor],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 222, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 98, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 203, 86, 0.2)',
                'rgba(75, 190, 192, 0.2)',
                'rgba(153, 111, 255, 0.2)',
                'rgba(255, 155, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 222, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 98, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 203, 86, 1)',
                'rgba(75, 190, 192, 1)',
                'rgba(153, 111, 255, 1)',
                'rgba(255, 155, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    } 
})
}


  


</script>

</body>
</html>