<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>juego</title>
  </head>
  <body>
    <section>
        <div class="contenedor response">
            <p id="response" class="centrar"></p>
        </div>
    </section>
    <section>
        <div class="contenedor form">
            <form class="" action="enlace.php" method="post" onsubmit="">
                <button type="button" name="button" id="piedra" onclick="selected_option(0);"> PIEDRA </button>
                <button type="button" name="button" id="papel" onclick="selected_option(1);"> PAPEL </button>
                <button type="button" name="button" id="tijera" onclick="selected_option(2);"> TIJERAS </button>
                <button type="button" name="button" id="lagarto" onclick="selected_option(3);"> LAGARTO </button>
                <button type="button" name="button" id="spock" onclick="selected_option(4);"> SPOCK </button>
            </form>
        </div>
    </section>
  </body>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/selected_option.js"></script>
</html>
