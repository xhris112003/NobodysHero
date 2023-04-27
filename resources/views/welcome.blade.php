<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap"
    />
  </head>
  <body>
    <div class="desktop-1">
      <div class="nav">
        <div class="enlaces">
          <a id="body" href="/" class="blanco-imagotipo-2-1"> </a>
          <div class="div-1pot"></div>
          <img
            class="blanco-isotipo-1-icon"
            alt=""
            src="https://i.postimg.cc/dVW6m4tf/860181a7-1034-4639-bdbe-073ad35fc752-1682602417377739608.png"
          />

          <div class="a">
            <a class="p" href="{{ route('nosotros') }}">
              <div class="quines-somos">Quiénes somos</div>
            </a>
          </div>
          <div class="a1">
            <a class="p1" href="{{ route('work') }}">
              <div class="trabaja-con-nosotros">Trabaja con nosotros</div>
              <div class="svg-16evwnrje9jvffbouuc-ef"></div>
            </a>
          </div>
          <div class="a2">
            <a class="noticias">Noticias</a>
          </div>
        </div>
      </div>
      <div class="body" >
        <b class="nobodoys-hero">Nobodoy’s Hero</b>
        <b class="disponible-19-de">DISPONIBLE 19 DE MAYO</b>
        <div class="p2">
          <div class="para-saber-mas">
            Para saber mas informacion clica aqui
          </div>
        </div>
        <button class="athemed-icon-button" onclick="scrollToSection()">
          <img
            class="divthemed-icon-button-icon"
            alt=""
            src="https://i.postimg.cc/W30fngyJ/c0975c32-4b3f-455f-a2a6-f3bcbc1efe9d-1682602417377840008.png"
          />

          <b class="ver-ahora">Ver ahora</b>
        </button>
      </div>
      <div class="body1" id="nuestro-juego">
        <div class="nuestro-juego-wrapper">
          <b class="nuestro-juego">Nuestro juego</b>
        </div>
        <div class="andrew-y-tyler-son-dos-hermano-parent">
          <div class="andrew-y-tyler">
            Andrew y Tyler son dos hermanos muy unidos por su
          </div>
          <div class="andrew-y-tyler">
            destino, en esta aventura estará en tu poder decidi
          </div>
          <div class="andrew-y-tyler">
            sus caminos y prepararlos paratodo lo que se les
          </div>
          <div class="andrew-y-tyler">viene encima.</div>
        </div>
        <div class="nobodys-hero-tittle-1-wrapper">
          <img
            class="nobodys-hero-tittle-1"
            alt=""
            src="https://i.postimg.cc/zGXZGtc2/67ea11ec-13f8-4f85-9f38-0c4ffb1256fb-1682602417377939238.png"
          />
        </div>
      </div>
      <div class="divfooter-inner">
        <div class="divcontent-center">
          <div class="divfooter-row">
            <div class="divfooter-col-inner">
              <div class="ullist-unstyled">
                <div class="seguridad">SEGURIDAD</div>
                <div class="legal">LEGAL</div>
                <div class="aviso-de-privacidad">AVISO DE PRIVACIDAD</div>
                <div class="trminos-de-servicio">TÉRMINOS DE SERVICIO</div>
                <div class="asistencia-al-jugador">ASISTENCIA AL JUGADOR</div>
                <div class="verificar-en-lnea">Verificar en línea</div>
                <div class="accesibilidad">Accesibilidad</div>
                <img
                  class="blanco-isotipo-1-icon1"
                  alt=""
                  src="https://i.postimg.cc/gkFTnSnq/10bafa86-37a5-40a2-9760-c0bebdf2a05a-1682602417378040045.png"
                />
              </div>
            </div>
          </div>
          <div class="divfooter-row1">
            <div class="little-glitch-inc">
              © 2023 Little Glitch, Inc. Todos los derechos reservados.
            </div>
            <div class="a3">
              <a class="ir-al-inicio"  onclick="scrollToSection2()">Ir al inicio</a>
              <img class="svg-icon" alt="" src="./public/svg.svg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    function scrollToSection() {
      var section = document.getElementById("nuestro-juego");

      section.scrollIntoView({behavior: "smooth"});

    }
    function scrollToSection2() {
        var section2 = document.getElementById("body");
        section2.scrollIntoView({behavior: "smooth"});
    }


  </script>
</html>
