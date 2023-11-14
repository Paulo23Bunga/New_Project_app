<!DOCTYPE html>
<html lang="pt-pt">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/MinisterioEducacao.css" type="text/css" media="all">
    <script src="bibliotecas/chart.js"></script>
    <form id="principal">
        
        <h2 class="pub">ESC-PÚBLICAS: total</h2>
        <h1 class="secu">M.E.D</h1>
        <h2 class="priva">ESC-PRIVADAS: total</h2>
    
    
    </form>  
    
</head>

<body class="body2">
<a class="linkBack" href="MinisterioEducacao.php"><img class="icoBack" src="imagem/icoBack.png"></a>
<form id="form2">

<canvas id="myChart"></canvas>
<a class="linkLuanda" href="Luanda.php">Ver</a><a class="linkBenguela" href="Benguela.php">Ver</a>

</form> 






<script>
  

    
        var ctx = document.getElementById('myChart').getContext('2d');
  
        var chart = new Chart(ctx, {
            // O tipo de grafico
            type: 'line',

            // Os dados do grafico

           
            data:{
                labels: [  'Luanda', 'Benguela', 'Huila', 'Huambo', 'Cabinda', 'K.Sul', 'K.Norte','L.Sul','L.Norte','Bie','Bengo', 'Malange', 'K.Kubango', 'Moxico', 'Cunene', 'Zaire', 'Namibe','Uige'],
                
                datasets: [{
                    label: 'Reclamações',
                
                    borderColor: 'red',
                   data: [10,2,6,20,5,8,10,22,29,0,12,14,7,3,9,0,6,10],
                    borderWidth: 3,
                   
                },
                {

                  
                    label: 'Elogios',
                
                    borderColor: 'lime',
                    data: [  0, 9, 3, 12, 25, 35, 10,10, 4, 15, 2, 2, 3, 0,0, 7, 5, 2],
                    borderWidth: 3,
                    
                }
                ]
            },

            // Configuracao do grafico

            options: {
               
            title:{
                text:'GRÁFICO DAS ESCOLAS EM ANGOLA',
                display:1,
                fontSize:20,
                
            },
            
            layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        }
    
           
               
            }
        });
        
        
    </script>
   

  





</form>
  
</body>


</html>