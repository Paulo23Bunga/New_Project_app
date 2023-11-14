<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MinisterioEducacao.css" type="text/css" media="all">
    <script src="bibliotecas/chart.js"></script>
    <title>Document</title>
     <form id="principal">
        
        <h2 class="pub">ESC-PÚBLICAS: total</h2>
        <h1 class="secu">(BENGUELA)</h1>
        <h2 class="priva">ESC-PRIVADAS: total</h2>
    
    
    </form>  
</head>
<body>
 
<body class="body2">
<a class="linkBack" href="GraficoMinisterio.php"><img class="icoBack" src="imagem/icoBack.png"></a>
<form id="form2">

<canvas id="myChart"></canvas>
<a class="linkLuanda" href="">Ver</a>

</form> 

<script>
     
        var ctx = document.getElementById('myChart').getContext('2d');
        
  
        var chart = new Chart(ctx, {
            // O tipo de grafico
            type: 'line',

            // Os dados do grafico

           
            data:{
                labels: ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7','E8','E9','E10','E11', 'E12', 'E13', 'E14', 'E15', 'E16', 'E17','E18','E19','E20'],
                
                datasets: [{
                    label: 'Reclamações',
                
                    borderColor: 'red',
                   data: [0,20,60,2,50,8,1,2,9,0,32,14,7,3,9,0,6,18],
                    borderWidth: 3,
                   
                },
                {

                  
                    label: 'Elogios',
                
                    borderColor: 'lime',
                    data: [  0, 9, 3, 12, 25, 35, 10,10, 4, 15, 2, 2, 3, 0,0, 7, 5, 20],
                    borderWidth: 3,
                    
                }
                ]
            },

            // Configuracao do grafico

            options: {
               
            title:{
                text:'GRÁFICO DAS ESCOLAS EM BENGUELA',
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





</body>
</html>