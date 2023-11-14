<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministerio da Educação</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css" media="all">
        
    <script type="text/javascript" src="bibliotecas/chart.js"> </script>
    
</head>
<body onload="Data()" >

<marquee behavior="alternate" direction="">
<p>
   <b> Saiba mais sobre a educação de seu filho! </b>
        </p> </marquee>

        <!-- PRINCIPAL -->
<div class="principal">
        
        <div id="site">
            <div id="topo">
                <h1>Nome Da Escola</h1>
        
            </div>
       
            <div class="terminar">   
                <input type="submit" value="Terminar">
            </div>

             <!-- MENU -->

             <div class="menu" >
                <br>

              <ul>
                   <li ><button class="bt1" id="button1"  onclick="Grafico()">Gráfico das Turmas</button></li>
                  <li><button class="bt1" id="button2"  onclick="Administrador()">Administrador</button></li>
                  <li><button class="bt1" id="button3"  onclick="Informacao()" >Informações</button></li>
                   <li ><button class="bt1" id="button4"  onclick="AdNota()" >Adicionar Notas</button></li>
                   <li ><button class="bt1" id="button5"  onclick="Messagem()">Mensangens</button></li>
                   <li><h2 id="hora" onload="Data()"></h2><br><h2 id="data"></h2></li>
                 
             </ul>
        

            </div> 

                <!--   ADMINISTRADOR   -->
                
        <div id="conteudo"  >
                <br><br>
                <b id="btAdmi" hidden>
                <ul id="ad">
                    <li><img class="img1" src="imagem/img/alunos.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/prof.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/ferramenta.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/dinheiro.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/anucio.png" alt=""></li> 
                </ul>

                <ul class="lbt" id="ad1">
                  <li><button class="bt1" onclick="BtAluno()" id="aluno">Cadastrar Alunos</button></li>
                  <li><button class="bt1" onclick="BtProfessor()" id="professor">Cadastrar Professores</button></li>
                   <li><button class="bt1" onclick="BtFerramenta()" id="ferramenta">Alterações dos Dados</button></li>
                  <li><button class="bt1" onclick="BtFinanca()" id="financa">Pagamento</button></li>
                  <li><button class="bt1" onclick="BtAnuncio()" id="anuncio">Adicionar Anúncio</button></li>

                </ul>
                
                </b>


                <!-- INFORMACAO  -->

                 
                <b id="btInforma" hidden>
                <ul id="Inf">
                    <li><img class="img1" src="imagem/img/aluno.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/professor.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/alunos.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/dinheiro.png" alt=""></li>
                   
                </ul>

                <ul class="lbtInf" id="ad1">
                  <li><button class="bt1" onclick="InfAluno()" id="btInfAluno">Aluno</button></li>
                  <li><button class="bt1" onclick="InfProf()" id="btInfProf">Professor</button></li>
                  <li><button class="bt1" onclick="InfTurma()" id="btInfTurma">Turmas</button></li>
                  <li><button class="bt1" onclick="InfFinanca()" id="btInfFinanca">Situação Financeira</button></li>
                 

                </ul>
                
                </b>


                  <!-- MESSAGENS  -->
                 
                <b id="btMessagem" hidden>
                <ul id="Messagem">
                    <li><img class="img1" src="imagem/img/alunoMsg.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/profMsg.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/turmaMsg.png" alt=""></li>
                    <li><img class="img1" src="imagem/img/ministerioMsg.png" alt=""></li>
                   
                </ul>

                <ul class="lbtMessagem" id="ad1">
                  <li><button class="bt1" onclick="InfAluno()" id="btInfAluno">Aluno</button></li>
                  <li><button class="bt1" onclick="InfProf()" id="btInfProf">Professor</button></li>
                  <li><button class="bt1" onclick="InfTurma()" id="btInfTurma">Turmas</button></li>
                  <li><button class="bt1" onclick="InfFinanca()" id="btInfFinanca">Ministério</button></li>
                 

                </ul>
                
                </b>


            
          
          

            <!-- FORMULARIO DO GRAFICO  -->

             <form id="form2" hidden>
             <canvas id="myChart"></canvas>

             <a class="linkLuanda" href="">Ver</a>

             </form> 

            <!-- FORMULARIO DO ALUNO -->
    
  
            <form class="formAluno" id="formAluno" hidden >

              <h2 class="labCadastroAluno">Cadastro do Aluno</h2>

              <input class="inputAlunoN" type="text" placeholder="sala">
              <select class="inputAlunoSelect"> <option>1ª classe</option> <option>2ª classe</option> </select>
              <select class="inputAlunoSelect"> <option>manhã</option> <option>tarde</option> </select>
              <select class="inputAlunoSelect"> <option>curso</option> <option>tarde</option> </select>
        
              <input class="inputAlunoN" type="text" placeholder="ano letivo" >
              <input class="inputAlunoN" type="text" placeholder="nª">
              <input class="inputAluno" type="text" placeholder="nome completo do aluno">
              <input class="inputAlunoN" type="text" placeholder="processo">
        
              <input class="inputAlunoB" type="text" placeholder="nº BI">
              <input class="inputAlunoB" type="date" placeholder="nascimento"><br><br>

              <h2 class="dadosEnc"> Dados do  Encarregado </h2>
                <br>


             <!-- FORMULARIO DO ENCARREGADO -->

             <input class="inputAlunoE" type="text" placeholder="nome do encarregado">
             <input class="inputAlunoEB" type="text" placeholder="nº BI">
             <input class="inputAlunoE" type="text" placeholder="contacto encarregado">
             <input class="inputAlunoEB" type="text" placeholder="contacto aluno"><br><br>
             <input class="btCadastrar" type="submit" value="Cadastrar">
            </form>


         <!-- FORMULARIO DO PROFESSOR -->

        <form class="formProfessor" id="formProfessor" hidden >

             <h2 class="labCadastroAluno">Cadastro do Professor</h2>
             <input class="inputProf" type="text" placeholder="nome completo do professor">
             <input class="inputNasc" type="date" placeholder="nascimento">
             <input class="inputProfBi" type="text" placeholder="nº BI">
             <select title="escolher o seu nivel academico" name="tipoLicenciatura" class="inputAlunoN1" ><option>Tecnico(a) Medio</option><option>Frequencia Universitaria</option><option>Mestre</option><option>Licenciado(a)</option> <option>Doutor(a)</option></select >
             <select class="inputAlunoN1"> <option>professor</option> <option>coordenador</option> </select>
             <select class="inputAlunoN1"> <option>curso</option> <option>curso</option> </select>
             <input class="inputProfBi" type="text" placeholder="disciplina">
             <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
             <input class="inputTurma" type="date" placeholder="turma">
             <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>

             <input class="inputProfBi" type="text" placeholder="disciplina">
             <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
             <input class="inputTurma" type="date" placeholder="turma">
             <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>

             <input class="inputProfBi" type="text" placeholder="disciplina">
             <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
             <input class="inputTurma" type="date" placeholder="turma">
             <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>
             <input class="inputProf" type="text" placeholder="contactos">
          
            <input class="btCadastrar" type="submit" value="Cadastrar">

        </form>



         <!-- FORMULARIO DA FINANCA  -->
  
        <form class="formFinanca" id="formFinanca" hidden >
              <br><br><br>
              <input class="inputFinanca" type="text" placeholder="entre com nome ou com ID">
              <button class="btPesq"><img class="imgPesq" src="imagem/img/pesq.png" alt=""></button><br><br>
              <pre>
      <b class="dados">
   Nome: 
       
   ID:
       
   Classe:
       
   Turma:
       
   Turno:
       
   Ultimo mês pago:
     </pre>
       <select class="inputmes"> <option>janeiro</option> <option>fevereiro</option> </select>
      </b><br>

      <input class="btCadastrar" type="submit" value="Pagamento">
       </form>



       <!-- FORMULARIO DO ANUNCIO  -->
  
         <form class="formAnuncio" id="formAnuncio" hidden >
           <div class="barra">
              Cor de fundo:<input type="color" class="cor">    Cor de texto:<input type="color" class="cor"> <input class="file" type="file">
    
              <select class="inputcor"> <option>turma</option> <option>publico</option> </select>
           </div>
           <br>

            <textarea name="" id="" cols="88" rows="25"></textarea>
           <br><br>
           <input class="btCadastrar" type="submit" value="Publicar">
        </form>


       <!-- FORMULARIO DAS ALTERACAO  -->
  
        <form class="formFinanca" id="formFerramenta" hidden >
        
             <input class="inputFinanca" type="text" placeholder="entre com nome ou com ID">
             <button class="btPesq"><img class="imgPesq" src="imagem/img/pesq.png" alt=""></button><br><br>

            <div class="busca" hidden>
               <input class="inputProf" type="text" placeholder="nome completo do professor">
               <input class="inputNasc" type="date" placeholder="nascimento">
               <input class="inputProfBi" type="text" placeholder="nº BI">
               <select title="escolher o seu nivel academico" name="tipoLicenciatura" class="inputAlunoN1" ><option>Tecnico(a) Medio</option><option>Frequencia Universitaria</option><option>Mestre</option><option>Licenciado(a)</option> <option>Doutor(a)</option></select >
               <select class="inputAlunoN1"> <option>professor</option> <option>coordenador</option> </select>
               <select class="inputAlunoN1"> <option>curso</option> <option>curso</option> </select>
               <input class="inputProfBi" type="text" placeholder="disciplina">
               <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
               <input class="inputTurma" type="date" placeholder="turma">
               <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>

               <input class="inputProfBi" type="text" placeholder="disciplina">
               <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
               <input class="inputTurma" type="date" placeholder="turma">
               <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>

               <input class="inputProfBi" type="text" placeholder="disciplina">
               <select class="inputAlunoN1"> <option>Classe</option> <option>curso</option> </select>
               <input class="inputTurma" type="date" placeholder="turma">
               <select class="inputAlunoN1"> <option>turno</option> <option>curso</option> </select>
               <input class="inputProf" type="text" placeholder="contactos">
          
               <input class="btCadastrar" type="submit" value="Alterar">
            </div>
        </form>



         <!-- FORMULARIO DA INFORMACAO DO ALUNO  -->
          
        <form class="formInfAluno" id="formInfAluno" hidden >
              <br><br><br>
              <input class="inputFinanca" type="text" placeholder="entre com nome ou com ID">
              <button class="btPesq"><img class="imgPesq" src="imagem/img/pesq.png" alt=""></button><br><br>
              <pre class="preInf">
      <b class="dados">
   Nome: 
       
   ID:                    Nascimento:         
       
   Classe:                Turma:           Turno:

   Faltas:
       
   Telefone:

   Encarregado:

   Telefone:

   Municipio:             Morada:

   Ultimo mês pago:

      </b>
     </pre>

     <img src="imagem/img/aluno.png" alt="" class="imgInfAluno">

       </form>

       
         <!-- FORMULARIO DA INFORMACAO DO PROFESSOR  -->
          
        <form class="formInfProf" id="formInfProf" hidden >
              <br><br><br>
              <input class="inputFinanca" type="text" placeholder="entre com nome ou com ID">
              <button class="btPesq"><img class="imgPesq" src="imagem/img/pesq.png" alt=""></button><br><br>
              <pre class="preInfP">
      <b class="dados">
   Nome: 
       
   ID:                   Nascimento:

   Cargo:                Faltas:
       
   Classe:               Turma:              Turno:

   Classe:               Turma:              Turno:

   Classe:               Turma:              Turno:
       
   Telefone:

   Municipio:            Morada:

  

      </b>
     </pre>

     <img src="imagem/img/professor.png" alt="" class="imgInfProf">

       </form>


         <!-- FORMULARIO DA INFORMACAO DAS TURMAS  -->
          
        <form class="formInfTurma" id="formInfTurma" hidden >
           
             <input type="submit" value="Pesquisar" class="Pesquisar">
                <div class="divInf">

                 <select >
                     <option >Classe</option>
                 </select>

                  <select >
                     <option >Turma</option>
                 </select>

                 <select >
                     <option >Turno</option>
                 </select>
                

                </div>
               <table id="tabela">
                 <tr>
                      <th id="thNum">Nª</th>
                      <th id="thD">ID</th>
                      <th id="thNom">Nome</th>
                      <th id="thD">Disciplina 1</th>
                      <th id="thD">Discciplina 2</th>
                      <th id="thD">Disciplina 3</th>
                      <th id="thD">Discciplina 4</th>
                       <th id="thD">Discciplina 5</th>
                      <th id="thD">Disciplina 6</th>
                      <th id="thD">Discciplina 7</th>
                  </tr>
                  <tr>
                      <td id="n">1</td>
                      <td id="n">192039478</td>
                      <td id="n">Celestino Fragoso</td>
                      <td>12</td>
                      <td>15</td>
                      <td>10</td>
                      <td>19</td>
                      <td>12</td>
                      <td>11</td>
                      <td>12</td>
                  </tr>

               </table>

       </form>



          <!-- FORMULARIO DA INFORMACAO DAS FINANCAS  -->
          
        <form class="formInfFinanca" id="formInfFinanca" hidden >

                <input type="submit" value="Pesquisar" class="Pesquisar">
                <div class="divInf">

                 <select >
                     <option >Mês</option>
                 </select>

                  <select >
                     <option >Classe</option>
                 </select>

                 <select >
                     <option >Turno</option>
                 </select>
                

                </div>
           
          <!-- FORMULARIO DO GRAFICO  -->

              
             <canvas id="myChart1"></canvas>
             <a class="linkLuanda1" href="">Ver</a>

       </form>


         <!-- FORMULARIO ADICIONAR NOTAS  -->
          
        <form class="formAdNota" id="formAdNota" hidden >

         <input class="inputAdNota" type="text" placeholder="entre com nome ou com ID">
              <button class="btPesqAd"><img class="imgPesq" src="imagem/img/pesq.png" alt=""></button>
           
             <input type="submit" value="Pesquisar" class="PesquisarAdNota">
                <div class="divAdNota">

                 <select >
                     <option >Classe</option>
                 </select>

                  <select >
                     <option >Turma</option>
                 </select>

                 <select >
                     <option >Turno</option>
                 </select>
                

                </div>
               <table id="tabela">
                
                  <tr>
                      <th id="thNum">Nª</th>
                      <th id="thNom">Nome</th>
                      <th id="thD">Disciplina 1</th>
                      <th id="thD">Discciplina 2</th>
                      <th id="thD">Disciplina 3</th>
                      <th id="thD">Discciplina 4</th>
                       <th id="thD">Discciplina 5</th>
                      <th id="thD">Disciplina 6</th>
                      <th id="thD">Discciplina 7</th>
                  </tr>
                  <tr>
                      <td id="n">1</td>
                      <td id="n">Celestino Fragoso</td>
                      <td>12</td>
                      <td>15</td>
                      <td>10</td>
                      <td>19</td>
                      <td>12</td>
                      <td>11</td>
                      <td>12</td>
                  </tr>

               </table>

       </form>




    </div>  



    
       


            <div class="not" id="not"></div><br>

            <div id="rodape" ><h2>Rodapé</h2></div>

            <img src="imagem/book.png" alt="" class="imgQuadro" id="imgQuadro" >
                
               
            
        </div>
    
</div>
</body>




         <!--  GRAFICO DAS TURMAS GERAL -->

<script>
     
        var ctx = document.getElementById('myChart').getContext('2d');
        
  
        var chart = new Chart(ctx, {
            // O tipo de grafico
            type: 'line',

            // Os dados do grafico

           
            data:{
                labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7','T8','T9','T10','T11', 'T12', 'T13', 'T14', 'T15', 'T16', 'T17','T18','T19','T20'],
                
                datasets: [{
                    label: 'Reclamações',
                
                    borderColor: 'red',
                   data: [0,20,60,2,50,8,1,2,9,0,32,14,7,3,9,0,6,18,3,7],
                    borderWidth: 3,
                   
                },
                {

                  
                    label: 'Elogios',
                
                    borderColor: 'lime',
                    data: [  0, 9, 3, 12, 25, 35, 10,10, 4, 15, 2, 2, 3, 0,0, 7, 5, 20,11,10],
                    borderWidth: 3,
                    
                }
                ]
            },

            // Configuracao do grafico

            options: {
               
            title:{
                text:'GRÁFICO DAS TURMAS',
                display:1,
                fontSize:20,
                
            },
            
            layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 110
            }
        }
    
           
               
            }
        });
        
        
    </script>



 <!--  GRAFICO FINANCA -->

    <script>
     
        var ctx = document.getElementById('myChart1').getContext('2d');
        
  
        var chart = new Chart(ctx, {
            // O tipo de grafico
            type: 'bar',

            // Os dados do grafico

           
            data:{
                labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7','T8','T9','T10','T11', 'T12', 'T13', 'T14', 'T15', 'T16', 'T17','T18','T19','T20'],
                
                datasets: [{
                    label: 'Não Pago',
                
                    borderColor: 'red',
                   data: [0,20,60,2,50,8,1,2,9,0,32,14,7,3,9,0,6,18,3,7],
                    borderWidth: 3,
                   
                },
                {

                  
                    label: 'Pago',
                
                    borderColor: 'lime',
                    data: [  0, 9, 3, 12, 25, 35, 10,10, 4, 15, 2, 2, 3, 0,0, 7, 5, 20,11,10],
                    borderWidth: 3,
                    
                }
                ]
            },

            // Configuracao do grafico

            options: {
               
            title:{
                text:'GRÁFICO FINANCEIRO',
                display:1,
                fontSize:20,
                
            },
            
            layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 40
            }
        }
    
           
               
            }
        });
        
        
    </script>



   
   

  

<script>

    var form2 = document.getElementById("form2");
    var bt = document.getElementById("button1");
    var bt1 = document.getElementById("button2");
    var bt2 = document.getElementById("button3");
    var bt3 = document.getElementById("button4");
    var bt4 = document.getElementById("button5");
    var conteudo = document.getElementById("conteudo");
    var linha = document.getElementById("not");
    var lbHora = document.getElementById("hora");
    var lbData = document.getElementById("data");
    var quadro = document.getElementById("imgQuadro");


    // BOTAO ADMINISTRADOR

    
    var btsAdm = document.getElementById("btAdmi");
    var btAluno = document.getElementById("aluno");
    var formAluno = document.getElementById("formAluno");
    var formProfessor = document.getElementById("formProfessor");
    var btProfessor = document.getElementById("professor");
    var formFinanca = document.getElementById("formFinanca");
    var btfinanca = document.getElementById("financa");
    var formAnuncio = document.getElementById("formAnuncio");
    var btAnuncio = document.getElementById("anuncio");
    var formFerramenta = document.getElementById("formFerramenta");
    var btFerramenta = document.getElementById("ferramenta");
   

    // BOTAO INFORMACAO 

    var btsInforma = document.getElementById("btInforma");

    var formInfAluno = document.getElementById("formInfAluno");
    var btInfAluno = document.getElementById("btInfAluno");

    var formInfProf = document.getElementById("formInfProf");
    var btInfProf = document.getElementById("btInfProf");

    var formInfTurma = document.getElementById("formInfTurma");
    var btInfTurma = document.getElementById("btInfTurma");

    var formInfFinanca = document.getElementById("formInfFinanca");
    var btInfFinanca = document.getElementById("btInfFinanca");


// BOTAO ADICIONAR NOTAS 


    var formAdNota = document.getElementById("formAdNota");
   
   

  // BOTAO MESSAGEM 

    var btsMessagem = document.getElementById("btMessagem");

    var formInfAluno = document.getElementById("formInfAluno");
    var btInfAluno = document.getElementById("btInfAluno");

    var formInfProf = document.getElementById("formInfProf");
    var btInfProf = document.getElementById("btInfProf");

    var formInfTurma = document.getElementById("formInfTurma");
    var btInfTurma = document.getElementById("btInfTurma");

    var formInfFinanca = document.getElementById("formInfFinanca");
    var btInfFinanca = document.getElementById("btInfFinanca");


    

// BOTAO GRAFICO

function Grafico(){
     formAdNota.hidden = 1;
    formInfTurma.hidden = 1;
   // formAdNotaAluno.hidden = 1;
   // formAdNotaTurma.hidden = 1;
    formInfFinanca.hidden = 1;
    formInfProf.hidden = 1;
    formFinanca.hidden = 1;
    formInfAluno.hidden = 1;
    formFerramenta.hidden = 1;
    btsInforma.hidden = 1;
    formProfessor.hidden = 1;
    formAluno.hidden = 1;
    formAnuncio.hidden = 1;
    btsMessagem.hidden = 1;
    btsAdm.hidden = 1;
    quadro.hidden = 1;
    linha.hidden = 1;
    form2.hidden = 0;
    conteudo.hidden = 0;
    bt.style.background = "#1a9d3c";
    bt2.style.background = "hsl(172, 88%, 35%)";
    bt1.style.background = "hsl(172, 88%, 35%)";
    bt3.style.background = "hsl(172, 88%, 35%)";
    bt4.style.background = "hsl(172, 88%, 35%)";
    btAluno.style.background = "hsl(172, 88%, 35%)";
    btProfessor.style.background = "hsl(172, 88%, 35%)";
    btfinanca.style.background = "hsl(172, 88%, 35%)";
    btAnuncio.style.background = "hsl(172, 88%, 35%)";
    btFerramenta.style.background = "hsl(172, 88%, 35%)";
     
      
}


// BOTAO ADMINISTRADOR  

function Administrador(){
    
    formAdNota.hidden = 1;
    formInfAluno.hidden = 1;
    formInfFinanca.hidden = 1;
    formInfTurma.hidden = 1;
    formInfProf.hidden = 1;
    btsAdm.hidden = 0;
    btsMessagem.hidden = 1;
    quadro.hidden = 0;
    linha.hidden = 0;
    form2.hidden = 1;
    conteudo.hidden = 0;
    btsInforma.hidden = 1;
    bt1.style.background = "#1a9d3c";
    bt.style.background = "hsl(172, 88%, 35%)";
    bt2.style.background = "hsl(172, 88%, 35%)";
    bt3.style.background = "hsl(172, 88%, 35%)";
    bt4.style.background = "hsl(172, 88%, 35%)";
    btInfAluno.style.background = "hsl(172, 88%, 35%)";
    btInfProf.style.background = "hsl(172, 88%, 35%)";
    btInfTurma.style.background = "hsl(172, 88%, 35%)";
    btInfFinanca.style.background = "hsl(172, 88%, 35%)";

}

function BtAluno(){

    formInfTurma.hidden = 1;
    formInfFinanca.hidden = 1;
    formInfProf.hidden = 1;
    formInfAluno.hidden = 1;
    formFerramenta.hidden = 1;
    formFinanca.hidden = 1;
    formAluno.hidden = 0;
    formProfessor.hidden = 1;
    formAnuncio.hidden = 1;
    btAluno.style.background = "#1a9d3c";
    btProfessor.style.background = "hsl(172, 88%, 35%)";
    btfinanca.style.background = "hsl(172, 88%, 35%)";
    btAnuncio.style.background = "hsl(172, 88%, 35%)";
    btFerramenta.style.background = "hsl(172, 88%, 35%)";
    btInfAluno.style.background = "hsl(172, 88%, 35%)";
    btInfProf.style.background = "hsl(172, 88%, 35%)";
    btInfTurma.style.background = "hsl(172, 88%, 35%)";

}

function BtProfessor(){

    formInfTurma.hidden = 1;
    formInfProf.hidden = 1;
    formInfAluno.hidden = 1;
    formFerramenta.hidden = 1;
    formFinanca.hidden = 1;
    formAluno.hidden = 1;
    formAnuncio.hidden = 1;
    formProfessor.hidden = 0;
    btProfessor.style.background = "#1a9d3c";
    btAluno.style.background = "hsl(172, 88%, 35%)";
    btfinanca.style.background = "hsl(172, 88%, 35%)";
    btAnuncio.style.background = "hsl(172, 88%, 35%)";
    btFerramenta.style.background = "hsl(172, 88%, 35%)";
    btInfAluno.style.background = "hsl(172, 88%, 35%)";
    btInfProf.style.background = "hsl(172, 88%, 35%)";
    btInfTurma.style.background = "hsl(172, 88%, 35%)";
}


function BtFinanca(){

 formInfTurma.hidden = 1;   
 formInfProf.hidden = 1;
 formInfAluno.hidden = 1;
 formFerramenta.hidden = 1;
 formAluno.hidden = 1;
 formFinanca.hidden = 0;
 formProfessor.hidden = 1;
 formAnuncio.hidden = 1;
 btfinanca.style.background = "#1a9d3c";
 btProfessor.style.background = "hsl(172, 88%, 35%)";
 btAluno.style.background = "hsl(172, 88%, 35%)";
 btAnuncio.style.background = "hsl(172, 88%, 35%)";
 btFerramenta.style.background = "hsl(172, 88%, 35%)";
 btInfAluno.style.background = "hsl(172, 88%, 35%)";
 btInfProf.style.background = "hsl(172, 88%, 35%)";
 btInfTurma.style.background = "hsl(172, 88%, 35%)";
}

function BtAnuncio(){
 
 formInfTurma.hidden = 1;
 formInfProf.hidden = 1;
 formInfAluno.hidden = 1;
 formFerramenta.hidden = 1;
 formAnuncio.hidden = 0;
 formAluno.hidden = 1;
 formFinanca.hidden = 1;
 formProfessor.hidden = 1;
 btAnuncio.style.background ="#1a9d3c";
 btfinanca.style.background = "hsl(172, 88%, 35%)";
 btProfessor.style.background = "hsl(172, 88%, 35%)";
 btAluno.style.background = "hsl(172, 88%, 35%)";
 btFerramenta.style.background = "hsl(172, 88%, 35%)";
 btInfAluno.style.background = "hsl(172, 88%, 35%)";
 btInfProf.style.background = "hsl(172, 88%, 35%)";
 btInfTurma.style.background = "hsl(172, 88%, 35%)";

}

function BtFerramenta(){

 formInfTurma.hidden = 1;
 formInfProf.hidden = 1;
 formInfAluno.hidden = 1;
 formFerramenta.hidden = 0;
 formAnuncio.hidden = 1;
 formAluno.hidden = 1;
 formFinanca.hidden = 1;
 formProfessor.hidden = 1;
 btFerramenta.style.background ="#1a9d3c";
 btfinanca.style.background = "hsl(172, 88%, 35%)";
 btProfessor.style.background = "hsl(172, 88%, 35%)";
 btAluno.style.background = "hsl(172, 88%, 35%)";
 btAnuncio.style.background = "hsl(172, 88%, 35%)";
 btInfAluno.style.background = "hsl(172, 88%, 35%)";
 btInfProf.style.background = "hsl(172, 88%, 35%)";
 btInfTurma.style.background = "hsl(172, 88%, 35%)";

}

// BOTAO INFORMAÇÕES

       function Informacao(){
          
        formAdNota.hidden = 1;
        conteudo.hidden = 0;
        quadro.hidden = 0;
        linha.hidden = 0;
        btsInforma.hidden = 0;
        btsMessagem.hidden = 1;
        btsAdm.hidden = 1;
        form2.hidden = 1;
        formFinanca.hidden = 1;
        formFerramenta.hidden = 1;
        formProfessor.hidden = 1;
        formAluno.hidden = 1;
        formAnuncio.hidden = 1;
        bt2.style.background = "#1a9d3c";
        bt3.style.background = "hsl(172, 88%, 35%)";
        bt1.style.background = "hsl(172, 88%, 35%)";
        bt4.style.background = "hsl(172, 88%, 35%)";
        bt.style.background = "hsl(172, 88%, 35%)";
        btAluno.style.background = "hsl(172, 88%, 35%)";
        btProfessor.style.background = "hsl(172, 88%, 35%)";
        btfinanca.style.background = "hsl(172, 88%, 35%)";
        btAnuncio.style.background = "hsl(172, 88%, 35%)";
        btFerramenta.style.background = "hsl(172, 88%, 35%)";
        btInfTurma.style.background = "hsl(172, 88%, 35%)"; 
        btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 
      
    

    }

    // BT INFORMACAO ALUNO 

    function InfAluno(){
       
      linha.hidden = 0; 
      formInfTurma.hidden = 1;
      formInfProf.hidden = 1;
      formInfFinanca.hidden = 1;
      formInfAluno.hidden = 0;
      quadro.hidden = 1;
      btInfAluno.style.background = "#1a9d3c";
      btInfProf.style.background = "hsl(172, 88%, 35%)";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 
      

    }


     // BT INFORMACAO PROFESSOR 

    function InfProf(){
      
      linha.hidden = 0;
      formInfTurma.hidden = 1;  
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 1;
      quadro.hidden = 1;
      formInfProf.hidden = 0;
      btInfProf.style.background = "#1a9d3c";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 

    }

     // BT INFORMACAO PROFESSOR 

      function InfTurma(){
      
      
      linha.hidden = 1;
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 1;
      formInfTurma.hidden = 0;
      quadro.hidden = 1;
      formInfProf.hidden = 1;
      btInfTurma.style.background = "#1a9d3c";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfProf.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 

    }


     // BT INFORMACAO FINANCA 

      function InfFinanca(){
      
      
      linha.hidden = 1;
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 0;
      formInfTurma.hidden = 1;
      quadro.hidden = 1;
      formInfProf.hidden = 1;
      btInfFinanca.style.background = "#1a9d3c";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfProf.style.background = "hsl(172, 88%, 35%)";

    }


    
    // BT INFORMACAO ALUNO 

    function InfAluno(){
       
      linha.hidden = 0; 
      formInfTurma.hidden = 1;
      formInfProf.hidden = 1;
      formInfFinanca.hidden = 1;
      formInfAluno.hidden = 0;
      quadro.hidden = 1;
      btInfAluno.style.background = "#1a9d3c";
      btInfProf.style.background = "hsl(172, 88%, 35%)";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 
      

    }


     // BT INFORMACAO PROFESSOR 

    function InfProf(){
      
      linha.hidden = 0;
      formInfTurma.hidden = 1;  
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 1;
      quadro.hidden = 1;
      formInfProf.hidden = 0;
      btInfProf.style.background = "#1a9d3c";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 

    }

     // BT INFORMACAO PROFESSOR 

      function InfTurma(){
      
      
      linha.hidden = 1;
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 1;
      formInfTurma.hidden = 0;
      quadro.hidden = 1;
      formInfProf.hidden = 1;
      btInfTurma.style.background = "#1a9d3c";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfProf.style.background = "hsl(172, 88%, 35%)";
      btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 

    }


     // BT INFORMACAO FINANCA 

      function InfFinanca(){
      
      
      linha.hidden = 1;
      formInfAluno.hidden = 1;
      formInfFinanca.hidden = 0;
      formInfTurma.hidden = 1;
      quadro.hidden = 1;
      formInfProf.hidden = 1;
      formInfProf.hidden = 1;
      btInfFinanca.style.background = "#1a9d3c";
      btInfTurma.style.background = "hsl(172, 88%, 35%)";
      btInfAluno.style.background = "hsl(172, 88%, 35%)";
      btInfProf.style.background = "hsl(172, 88%, 35%)";

    }


// BOTAO ADICIONAR NOTAS

       function AdNota(){
           
        conteudo.hidden = 0;
        quadro.hidden = 1;
        linha.hidden = 1;
        btsInforma.hidden = 1;
        btsMessagem.hidden = 1;
        btsAdm.hidden = 1;
        form2.hidden = 1;
        formInfAluno.hidden = 1;
        formAdNota.hidden = 0;
        formFinanca.hidden = 1;
        formFerramenta.hidden = 1;
        formProfessor.hidden = 1;
        formInfProf.hidden = 1;
        formAluno.hidden = 1;
        formAnuncio.hidden = 1;
        formInfFinanca.hidden = 1;
        formInfTurma.hidden = 1;
        bt3.style.background = "#1a9d3c";
        bt1.style.background = "hsl(172, 88%, 35%)";
        bt4.style.background = "hsl(172, 88%, 35%)";
        bt2.style.background = "hsl(172, 88%, 35%)";
        bt.style.background = "hsl(172, 88%, 35%)";
        btAluno.style.background = "hsl(172, 88%, 35%)";
        btProfessor.style.background = "hsl(172, 88%, 35%)";
        btfinanca.style.background = "hsl(172, 88%, 35%)";
        btAnuncio.style.background = "hsl(172, 88%, 35%)";
        btFerramenta.style.background = "hsl(172, 88%, 35%)";
        btInfTurma.style.background = "hsl(172, 88%, 35%)"; 
        btInfFinanca.style.background = "hsl(172, 88%, 35%)"; 
        btInfAluno.style.background = "hsl(172, 88%, 35%)";
        btInfProf.style.background = "hsl(172, 88%, 35%)";
    

    }


// MESSAGEM

function Messagem(){

        btsMessagem.hidden = 0;
        formAdNota.hidden = 1;
        conteudo.hidden = 0;
        quadro.hidden = 0;
        linha.hidden = 0;
        btsInforma.hidden = 1;
        btsAdm.hidden = 1;
        form2.hidden = 1;
        formFinanca.hidden = 1;
        formFerramenta.hidden = 1;
        formProfessor.hidden = 1;
        formAluno.hidden = 1;
        formAnuncio.hidden = 1;

       bt4.style.background = "#1a9d3c";
       bt3.style.background = "hsl(172, 88%, 35%)";
        bt1.style.background = "hsl(172, 88%, 35%)";
        bt2.style.background = "hsl(172, 88%, 35%)";
        bt.style.background = "hsl(172, 88%, 35%)";
}



function Data(){
 
 var tempo = new Date();
 var mes1 = new Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Novembro","Dezembro");
 var hora = tempo.getHours();
 var minuto = tempo.getMinutes();
 var segundo = tempo.getSeconds();
 var dia = tempo.getDate();
 var mes = tempo.getMonth();
 var ano = tempo.getFullYear();

 lbHora.innerHTML = hora+":"+minuto+":"+segundo;
 lbData.innerHTML =dia+"/"+mes1[mes]+"/"+ano;

}

setInterval(Data,1000);

</script>




  
</html>