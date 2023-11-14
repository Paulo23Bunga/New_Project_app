<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MinisterioEducacao.css" type="text/css" media="all">
    <title>Document</title>
     <form id="principal1">
        
        <h3 class="infTipo">(PRIVADO)</h3>
       <h2 class="secu1"> ESCOLA DO Iº CICLO DO ENSINO SECUNDÁRIO NGOLA KILUANGE</h2>
        
    
    
    </form>  
</head>
<body id="bd">
    <a class="linkBack" href="Luanda.php"><img class="icoBack" src="imagem/icoBack.png"></a><br>
    
     <a href="" class="linkPrev1"><img class="imgPrev1" src="imagem/prev.png"></a>
     
     <img class="imgEsc" src="imagem/slide/k.jpg" alt="">
     <a href="" class="linkNext1"><img class="imgNext1" src="imagem/next.png"></a><br><br><br>
    
   
    Nome do Director: <b>Fulano</b><br>
    Nome do Sub-Director: <b>Fulano</b><br>
    Secretaria: <b>Fulano</b><br>
    Contactos: <b>929826902/000000000</b>
     
      <h1 class="muni">Luanda</h1><br>
    <iframe src="https://maps.google.com/"></iframe>

<h2 id="data" class="data">
  <h2 id="data1" class="data1"></h2>
  
  </h2>
    
</body>

<script>
  var d = document.getElementById("data");
  var d1 = document.getElementById("data1");
  

  

  function hora (){
    var mesExt = new Array("Janeiro","Fevereiro","Março","Abril","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
    var tempo = new Date();
  var hora = tempo.getHours();
  var minuto = tempo.getMinutes();
  var sec = tempo.getSeconds();
  var mes = tempo.getMonth();
  var dia = tempo.getDate();
  var ano = tempo.getFullYear();
  

  d1.innerHTML =dia+"/"+mesExt[mes]+"/"+ano;


  if(hora<10){
     d.innerHTML ="0"+hora+":"+minuto+":"+sec;
     if(minuto<10){
       d.innerHTML ="0"+hora+":0"+minuto+":"+sec;
       if(sec<10){
          d.innerHTML ="0"+hora+":0"+minuto+":0"+sec;
       }
     }
  }
  

  }
  setInterval(hora,1000);

  

  
  </script>
</html>