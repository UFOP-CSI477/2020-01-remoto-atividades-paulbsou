@extends('principal')

@section('conteudo')

<div class="caption">
    <div class="container">
      <div class="row">
        <div class="col" style="padding:30px">
        <img id="JuStella" width="80%" src="{{asset('imagens/JuStella.jpg')}}" alt="Ju e Stella"></img>
        </div>

        <div class="col" style="padding:30px">
        <h1 class>Quem somos:</h1>
        <p>Somos Ju e Stella, casal, amigas, parceiras e apaixonadas por fotografia.
          Fotografia que nos conecta, nos completa e, através da qual nos expressamos.
          Nosso trabalho é capturar os momentos mais incríveis e especiais da sua vida e
          transportá-los para dentro de uma imagem, que poderá te emocionar para sempre.
          Entendemos que momentos como nascimento de um filho, o dia de seu casamento,
          a hora dos parabéns, é único e cheio de emoções.
          Mas, não são apenas momentos, são histórias que merecem o melhor registro.
          Esperamos que com esse registro não consigamos apenas eternizar esses momentos,
          mas também tocar o seu coração sempre que olharem para estas imagens.
          Estas somos nós, divertidas, dedicadas e prontas para conhecermos a sua história.
          <br><br>
          Seja bem-vinde!
        </p>
        </div>
      </div>
    </div>
</div>

  <!--******************************************************************************-->

  <div class="caption">
    <div id="redessociais">
      <ul>
        <li>
          <a href="https://www.instagram.com/justellafotografia2/" target="_blank"><img width="3%"
              src="../imagens/instagram.png"></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=5531986442858&text=Hey, que bom te ver por aqui! Vamos fazer um orçamento?"
            target="_blank"><img width="3%" src="../imagens/whatsapp.png">
        </li>
        <li>
            <a href="https://www.facebook.com/justellafotografia" target="_blank"><img width="3%" src="../imagens/facebook.png"></a>
        </li>
      </ul>
    </div>
  </div>
 <!--******************************************************************************-->
  <hr>
 <!--******************************************************************************-->
  <div class="caption">
      <section id="imginicio">
        <a href="{{route('portfolio.retratos')}}"><img src="{{asset('imagens/Retrato.jpg')}}" alt="Retrato" style="width:20%"> </a>
        <a href="{{route('portfolio.familias')}}"><img src="{{asset('imagens/Familia.jpg')}}" alt="Familia" style="width:20%"> </a>
        <a href="{{route('portfolio.casais')}}"><img src="{{asset('imagens/Casais.jpg')}}" alt="Casais" style="width:20%"> </a>
      </section>
  </div>
 <!--******************************************************************************-->
  <hr>
 <!--******************************************************************************-->
  <div class="caption">
    <div class="grid-container" id="workshop">

      <div class="grid-item" id="workshopitem">
        <p id="workshopitem"> Ao longo dos anos de Fotografia posso afirmar que os momentos de maior gratidão que já
          vivi foram dentro de Workshops. Poder compartilhar do que aprendi e sigo aprendendo desse universo da
          fotografia e também compartilhar da vida com pessoas que sonham com o mesmo que eu: se expressar através da
          Fotografia e fazer disso suas vidas.<br>
          Venha aprender conosco!
        </p>
      </div>

      <div class="grid-item" id="workshopitem">
        <h1 class>Workshops e Cursos</h1>
        <h4 class>
          <li>Contagem / MG <br></li>
          <li>Belo Horizonte / MG <br></li>
          <li>João Monlevade / MG<br></li>
        </h4>
      </div>
    </div>
  </div>

 <!--******************************************************************************-->
  <div class="caption">
    <div class="grid-container" id="faleconosco">

        <div class="grid-item" id="faleconoscoitem">
            <h1 class>Quer falar conosco?</h1>
            <h4 class> Manda mensagem pra gente! &#10024</h4>
        </div>

        <div class="grid-item" id="faleconoscoitem">
            <form action="{{route('cliente.store')}}" id="formcliente" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome" id="labelNome"><b>Nome</b> </label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email" id="labelEmail"><b> E-mail:</b> </label><br>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="whatsapp" id="labelWhatsapp"> <b>WhatsApp:</b> </label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="mensagem" id="labelMensagem"> <b>Mensagem:</b> </label>
                    <textarea type="text" name="mensagem" placeholder="Mensagem" id="mensagem" class="form-control" required></textarea>
                </div>

                <div class="text-center">
                    <input type="submit" value="Enviar" class="btn btn-lg btn-dark ">
                    <input type="reset" value="Limpar" class="btn btn-lg btn-dark ">
                </div>
                </form>
        </div>
    </div>
  </div>

@endsection
