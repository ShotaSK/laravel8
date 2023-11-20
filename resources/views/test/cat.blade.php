<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>test</title>
    </head>
    <style>
        @import url("https://fonts.googleleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --card-color: #0f0c18;
    --border-color: #dd191d ;
}

body {
    font-family: "Poppins", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
    background-color: #000;
}

.container {
    width: 600px;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.container .effect {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background-color: var(--border-color);
    filter: blur(30px);
    transition: 2s ease-in-out;
}

.container .effect::before {
    content: "";
    position: absolute;
    width: 120%;
    height: 120%;
    background-color: #000;
    filter: blur(10px);
    transform: scale(0.5);
    transition: 2s ease-in-out;
}

.container .background {
    position: absolute;
    width: 100%;
    height: 100%;
    background: url(../css/imon/background-bg.jpg) center / cover;
    mix-blend-mode: multiply;
}

.container .card {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 70%;
    border-radius: 20px;
    cursor: pointer;
    transition: 1s ease-in-out;
    overflow: hidden;
    z-index: 10;
    background-color: var(--card-color);
}

.card::after {
    position: absolute;
    content: "";
    width: 50%;
    height: 150%;
    background-color: var(--border-color);
    animation: spin 6s linear infinite;
    box-shadow: 0 0 10px var(--border-color);
    transition: 1.5s linear;
}

@keyframes spin {
    0% {
        transform: rotate(0);
    }
    100%{
        transform: rotate(360deg);
    }
}

.card::before {
    content: "";
    position: absolute;
    inset: 4px;
    background-color: var(--card-color);
    z-index: 10;
    border-radius: 10px;
}

.card:hover {
    box-shadow: 0 0 5px #ab47bc, 0 0 30px #ec407a, 0 0 100px#dd191d;
}

.card:hover::after {
    animation-play-state: paused;
    width: 200%;
}

.card:hover + .effect {
    transform: scale(1.5);
}

.card:hover + .effect::before {
    transform: scale(1.5);
    transition-delay: 1s;
}

.card .card-content {
    width: 100%;
    height: 100%;
    z-index: 20;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    text-align: center;
    padding: 10px 20px;
}

.card-content img {
    width: 90%;
    object-fit: contain;
    filter: drop-shadow(0 10px 10px #000);
}

.card-content button {
    position: relative;
    width: 150px;
    height: 50px;
    background-color: var(--border-color);
    font-family: inherit;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: 0.5s ease;
    border: none;
    margin-top: 5px;
}

.card-content button::after {
    position: absolute;
    content: "";
    width: 20px;
    height: 20px;
    background-color: var(--card-color);
    top: 0;
    left: 0;
    transform: translate(-50%,-50%) rotate(45deg);
    z-index: 1;
}

.card-content button::before {
    position: absolute;
    content: "";
    width: 20px;
    height: 20px;
    background-color: var(--card-color);
    top: 0;
    left: 0;
    transform: translate(-50%,-50%) rotate(45deg);
    z-index: 2;
}

.card-content button:hover {
    transform: scale(0.95);
}



    </style>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <img src={{$cat}} alt="" />
                    <h1>cat of Patdanai 65122420026</h1>
                    <button><a href="#">Click</a></button>
                </div>
            </div>
            <div class="effect"></div>
            <div class="background"></div>
        </div>
    </body>
</html>