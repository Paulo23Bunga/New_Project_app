<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/MinisterioEducacao.css" type="text/css" media="all">
    <script src="bibliotecas/jquery-3.5.1.min.js"></script>
  <form id="principal"><h1 class="pri" >MINISTÉRIO DA EDUCAÇÃO</h1></form>  
</head>
<body onload="slide1()">
 
<!-- formulario em html -->

<fieldset id="usuario"> <legend><b> Cadastramento das Escolas</b></legend>
    <label for="">Nome Da Escola: </label>
    <input type="text" name="nome" maxlength="30"size=" 30"  id="nome" placeholder="insira aqui o nome da escola"><br><br>
    <label for="">Numero Da Escola: </label>
    <input type="text" name="numero" maxlength="30"size=" 30" id="numero" placeholder="insira aqui o numero da escola"><br><br>
    <label for="">Senha:       </label>
    <input type="password" nome="senha"maxlength="10" id="senha" placeholder="insira aqui a senha completa"><br><br>
    <label for="">Email:</label>
    <input type="email" nome="email" size="30"maxlength="30" id="email" placeholder="insira aqui  o seu email"><br></br>
    <label for="">Contactos:</label>
    <input type="text" nome="contacto" size="30"maxlength="30" id="contacto" placeholder="insira aqui o seu contacto"><br><br>
    <label for="">Data de Cadastro: </label>
    <input type="date" id="data"><br>

<!-- FORMULARIO DO SLIDE -->

    
    <a href="" class="linkPrev"><img class="imgPrev" src="imagem/prev.png"></a><a href="" class="linkNext"><img class="imgNext" src="imagem/next.png"></a>  
   <img class="imgSlide" id="imgSlide">
    
    
    


    </fieldset>

    <fieldset id="ensino"> <legend><b>Tipos de Ensino</b></legend>
    <h2 class="nEscola"></h2><br>
    <h1 id="totalEsc">TOTAL DE ESCOLAS</h1>
    <select name="" id="" title="Escolha Tipo de Ensino">
        <option value="">Privado</option>
        <option value="">Publica</option>
        <option value="">Comparticipada</option>
    </select>

    </fieldset>


<fieldset id="ensino"> <legend><b> Provincia</b></legend> 
<select title="Seleciona a sua provincia">
<option>escolher municipio</option> 
    <option>todos municipios</option>
      <optgroup label='Luanda'>
        <option>viana</option>
        <option>cazenga</option>
        <option>luanda</option>
        <option>kilamba kiaxi</option>
        <option>belas</option>
        <option>icolo bengo</option>
        <option>cacuaco</option>
        <option>talatona</option>
        <option>Quissama</option>
      </optgroup>
      <optgroup label='Bengo'>
        <option>ambriz</option>
        <option>bula atumba</option>
        <option>dande</option>
        <option>dembos</option>
        <option>nambuangongo</option>
        <option>pango aluquem</option>
      </optgroup>
      <optgroup label='Benguela'>
        <option>balombo</option>
        <option>baia farta</option>
        <option>benguela</option>
        <option>lobito</option>
        <option>bocoio</option>
        <option>catumbela</option>
        <option>caimbambo</option>
        <option>chongoroi</option>
        <option>cubal</option>
        <option>ganda</option>
      </optgroup>
      <optgroup label='Bié'>
        <option>andulo</option>
        <option>camacupa</option>
        <option>catabola</option>
        <option>chinguar</option>
        <option>chitembo</option>
        <option>cuemba</option>
        <option>cunhinga</option>
        <option>cuito</option>
        <option>nharea</option>
      </optgroup>
      <optgroup label='Cabinda'>
        <option>belize</option>
        <option>buco-zau</option>
        <option>cabinda</option>
        <option>cacongo</option>
      </optgroup>
      <optgroup label='Cuando Cubango'>
        <option>calai</option>
        <option>cuangar</option>
        <option>cuchi</option>
        <option>cuito cuanavale</option>
        <option>dirico</option>
        <option>mavinga</option>
        <option>menongue</option>
        <option>nancova</option>
        <option>rivungo</option>
      </optgroup>
      <optgroup label='Cuanza Norte'>
        <option>ambaca</option>
        <option>banga</option>
        <option>bolongongo</option>
        <option>cambambe</option>
        <option>cazengo</option>
        <option>golungo alto</option>
        <option>gonguembo</option>
        <option>lucala</option>
        <option>Quiculungo</option>
        <option>samba caju</option>
      </optgroup>
      <optgroup label='Cuanza Sul'>
        <option>amboim</option>
        <option>cassongue</option>
        <option>cela</option>
        <option>conda</option>
        <option>ebo</option>
        <option>libolo</option>
        <option>mussende</option>
        <option>porto amboim</option>
        <option>Quibala</option>
        <option>quilenda</option>
        <option>sumbe</option>
        <option>seles</option>
      </optgroup>
      <optgroup label='Cunene'>
        <option>cahama</option>
        <option>cuanhama</option>
        <option>curoca</option>
        <option>cuvelai</option>
        <option>namacunde</option>
        <option>ombadja</option>
      </optgroup>
      <optgroup label='Huila'>
        <option>caconda</option>
        <option>cacula</option>
        <option>caluquembe</option>
        <option>chiange</option>
        <option>chibia</option>
        <option>chicomba</option>
        <option>chipindo</option>
        <option>cuvango</option>
        <option>humpata</option>
        <option>jamba</option>
        <option>lubango</option>
        <option>matala</option>
        <option>quilengues</option>
        <option>quipungo</option>
      </optgroup>
      <optgroup label='Lunda Norte'>
        <option>cambulo</option>
        <option>capenda-camulemba</option>
        <option>caugunla</option>
        <option>cuango</option>
        <option>cuilo</option>
        <option>lovua</option>
        <option>lubalo</option>
        <option>lucapa</option>
        <option>xa-muteba</option>
      </optgroup>
      <optgroup label='Lunda Sul'>
        <option>cacolo</option>
        <option>dala</option>
        <option>muconda</option>
        <option>saurimo</option>
      </optgroup>
      <optgroup label='Malanje'>
        <option>cacuso</option>
        <option>calandula</option>
        <option>cambundi-catembo</option>
        <option>cangandala</option>
        <option>caombo</option>
        <option>cuaba-nzoji</option>
        <option>cunda-dia-baze</option>
        <option>luquembo</option>
        <option>malanje</option>
        <option>marimba</option>
        <option>massango</option>
        <option>mucari</option>
        <option>quela</option>
        <option>quirima</option>
      </optgroup>
      <optgroup label='Moxico'>
        <option>camanongue</option>
        <option>leua</option>
        <option>lua</option>
        <option>luacano</option>
        <option>luchazes</option>
        <option>cameia</option>
        <option>moxico</option>
      </optgroup>
      <optgroup label='Namibe'>
        <option>bibala</option>
        <option>camucuio</option>
        <option>mocamedes</option>
        <option>tombua</option>
        <option>virei</option>
      </optgroup>
      <optgroup label='Huambo'>
        <option>bailundo</option>
        <option>cachiungo</option>
        <option>caala</option>
        <option>ecunha</option>
        <option>huambo</option>
        <option>londuimbali</option>
        <option>longonjo</option>
        <option>mungo</option>
        <option>chicala-choloanga</option>
        <option>chinjenje</option>
        <option>ucuma</option>
      </optgroup>
      <optgroup label='Uige'>
        <option>alto-cauale</option>
        <option>ambuila</option>
        <option>bembe</option>
        <option>buengas</option>
        <option>bungo</option>
        <option>damba</option>
        <option>milunga</option>
        <option>mucaba</option>
        <option>negage</option>
        <option>puri</option>
        <option>quimbele</option>
        <option>quitexe</option>
        <option>sanza-pombo</option>
        <option>songo</option>
        <option>uige</option>
        <option>zombo</option>
      </optgroup>
      <optgroup label='Zaire'>
        <option>cuimba</option>
        <option>mbanza-congo</option>
        <option>noqui</option>
        <option>nezeto</option>
        <option>soyo</option>
        <option>tomboco</option>
      </optgroup>
    </select>

</fieldset><br><br>


<input type="submit" value="Cadastrar" id="botao"><a class="linkEstatistica" href="GraficoMinisterio.php">Ver Estatistica Geral de Ensino</a>



</form>
  

<script>


   var vetor = new Array("itel.jpg","k.jpg","k1.jpg","or.jpg")
   var n=0;
     function slide1(){
   
       if(n==4){
        n = 0;
      }
    
    $("#imgSlide")
       .attr("src","imagem/slide/"+vetor[n]);
        $("h2").text(vetor[n]);
        n++;
  
      }

      setInterval(slide1,3000);

  
  

 
</script>

</html>