<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Guardiões do Rio - Colecionando Ecossistemas </title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: rgb(161, 255, 184);
        }

        .menu-btn {
            font-size: 30px;
            cursor: pointer;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1001; 
            color: white;
            background-color: #000000;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar {
            width: 250px;
            background-color: #000; 
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: -250px; 
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            transition: left 0.3s ease;
            z-index: 1000;
        }

        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            color: white;
            display: block;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #333;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .main-content {
            margin-left: 0;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s ease;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card-container {
            perspective: 1000px; 
            width: 30%;
            max-width: 250px;
            margin: 25px;
        }

        .card {
            width: 100%;
            height: 300px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .card:hover {
            transform: rotateY(180deg); 
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden; 
        }
        .card-front img {  
            width: 100%;  
            height: 200px; 
}

        .card-front {
            background-color: rgb(234, 234, 234);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-front img {
            width: 80%;
        }

        .card-front h2 {
            margin: 15px 0;
            font-size: 1.5em;
            color: #333;
        }

        .card-back {
            background-color: white; /* Parte de trás do card em branco */
            display: flex;
            justify-content: center;
            align-items: center;
            transform: rotateY(180deg); /* Parte de trás está invertida */
        }

        .card-back p {
            font-size: 1.2em;
            color: #333;
            text-align: center;
        }

        @media (max-width: 768px) {
            .card-container {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .card-container {
                width: 90%;
            }
        }

        .sidebar.open {
            left: 0;
        }

        .main-content.menu-open {
            margin-left: 250px;
        }
    </style>
</head>
<body>


    <div class="menu-btn" id="menu-btn">
        &#9776;
    </div>

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <a href="index.html">Página 1</a>
        <a href="#section2">Página 2</a>
    </div>
    
    <div class="main-content" id="main-content">
        <div class="box">
            <div class="card-container" id="section1">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi1.webp" alt="Imagem 1">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi2.jpg" alt="Imagem 2">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/cap3.jpg" alt="Imagem 3">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi4.jpg" alt="Imagem 4">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi5.webp" alt="Imagem 5">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi6.jpg" alt="Imagem 6">
                        <h2>Capivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        menuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            mainContent.classList.toggle('menu-open');
        });
    </script>

</body>
</html>
