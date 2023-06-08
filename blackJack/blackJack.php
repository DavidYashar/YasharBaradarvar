<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blackJack.css">
    <script src="blackJack.js"></script>
    <title>BlackJack</title>
</head>
<body>
    <h2>Dealer: <span id="dealer-sum"></span></h2>
    <div id="dealer-cards">
    <img id="hidden" src="cards/BACK.png">
    
    </div>
     

    <h2>You: <span id="your-sum"></span></h2>
    <div id="your-cards"></div>

    <br>
    <button id="hit">HIT</button>
    <button id="stay">STAY</button>

    <p id="results"></p>

    <a href="../index.php"><button>Return </button></a>
</body>
</html>