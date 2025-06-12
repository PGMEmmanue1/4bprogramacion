<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir la librería Chart.js para el gráfico -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <style>
        body{
            background-color: black;
        }
        .pokeImg{
            width: 250px;
            height: 250px;
            position:absolute;
        }
        button{
            width: 50px;
            height: 50px;
            background-color: rgb(255, 255, 255);
            border-color: rgb(0, 0, 0);
            border-radius: 10px;
            position: absolute;
            top: 580px;
            left: 180px;
        }
    </style>

    <img src="pokemon.jpg" width="1200px">
    <input type="text" placeholder="greninja" id="pokeName" class="placeholder">
    <img src="pokebola.jpg" alt="pokebola" id="pokeImg" class="pokeImg">

    <button onclick="fetchpokemon()" class="button">OK</button>

    <div class="grafica">
        <canvas id="miCanvas"></canvas>
    </div>

    <script>
        const fetchpokemon = () => {
            const pokeNameInput = document.getElementById("pokeName");
            let pokeName = pokeNameInput.value;
            pokeName = pokeName.toLowerCase();
            const url = `https://pokeapi.co/api/v2/pokemon/${pokeName}`;
            fetch(url).then((res) => {
                if (res.status != "200") {
                    console.log(res);
                } 
                else {
                    return res.json();
                }
            }).then((data) => {
                if (data) {
                    console.log(data);
                    let pokeImg = document.getElementById("pokeImg");
                    pokeImg.src = data.sprites.front_default;
                    let element1 = document.getElementById("pokeHeight");
                    element1.innerHTML = `Height: ${data.height}`;
                    let element2 = document.getElementById("pokeWe");
                    element2.innerHTML = `Weight: ${data.weight}`;
                    let element3 = document.getElementById("pokeorder");
                    element3.innerHTML = `Order: ${data.order}`;
                    let element4 = document.getElementById("pokeId");
                    element4.innerHTML = `Id: ${data.id}`;
                    let element5 = document.getElementById("pokeItem");
                    element5.innerHTML = `Item: ${data.held_items[0].item.name}`;
                    let element6 = document.getElementById("pokeType");
                    element6.innerHTML = `Type: ${data.types[0].type.name}`;
                    let element7 = document.getElementById("pokeMove1");
                    element7.innerHTML = `Move 1: ${data.moves[0].move.name}`;
                    let element8 = document.getElementById("pokeMove2");
                    element8.innerHTML = `Move 2: ${data.moves[1].move.name}`;
                    let element9 = document.getElementById("pokeMove3");
                    element9.innerHTML = `Move 3: ${data.moves[2].move.name}`;
                    let element10 = document.getElementById("pokeMove4");
                    element10.innerHTML = `Move 4: ${data.moves[3].move.name}`;
                    const miCanvas = document.getElementById("miCanvas").getContext("2d");

                    if (window.miCanvas != undefined) {
                        window.miCanvas.destroy();
                    }

                    window.miCanvas = new Chart(miCanvas, {
                        type: "bar",
                        data: {
                            labels: ["HP", "Attack", "Defense", "Special-A", "Special-D", "Speed"],
                            datasets: [{
                                data: [
                                    data.stats[0].base_stat,
                                    data.stats[1].base_stat,
                                    data.stats[2].base_stat,
                                    data.stats[3].base_stat,
                                    data.stats[4].base_stat,
                                    data.stats[5].base_stat
                                ],
                            }]
                        }
                    });
                    // Código de las imágenes termina aquí
                }
            });
        }
    </script>
</body>
</html>