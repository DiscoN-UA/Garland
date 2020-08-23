<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>
    <style>
    .block-light {
    margin-top: 50px;
    display: flex;
    justify-content: Space-around;
    flex-wrap: wrap;
}
    .box {
        border: 1px solid #dadada;
        border-radius: 50%;
        width: 75px;
        height: 75px;
        margin: 15px;
    }
    </style>
  </head>
  <body>
  <button id="star-stop">Старт / Стоп</button>
  <div id="block" class="block-light"></div>

  <script>
    let startStop = document.getElementById("star-stop");
    let block = document.getElementById("block");
    let clickStart = true;
    let interval;

  function createGarland() {
        let boxes = Math.floor(Math.random() * 100); // Создаем рандомное количество блоков (гирлянд)
        for(let i = 0; i <= boxes; i++) {
            let garland = document.createElement("div"); // Создаем гирлянду
            garland.className = "box";
            garland.style.backgroundColor = '#' + (Math.random().toString(16) + '000000').substring(2,8).toUpperCase(); // Рандомный цвет для гирлянды
            block.append(garland);
        }
    }

  function timer() {
            let garlandInBlock = document.getElementsByClassName("box");
            for(let i = 0; i < garlandInBlock.length; i++) {
                garlandInBlock[i].style.backgroundColor = '#' + (Math.random().toString(16) + '000000').substring(2,8).toUpperCase();
            }
        }

   function open_box() {
          if(clickStart){
            createGarland();
            interval = setInterval(timer, 1000); // Каждую секунду меняется цвет блока (гирлянды)
            clickStart = false;
            }
            else if(interval){
              clearInterval(interval);
              interval = undefined;
            }
              else {
                interval = setInterval(timer, 1000); // Каждую секунду меняется цвет блока (гирлянды)
              }
   }

   startStop.addEventListener("click", open_box, false);
  </script>
  </body>
</html>