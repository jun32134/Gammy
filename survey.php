<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="survey.css">
    <link rel="icon" href="img/icon.png" type="img/png">
    <title>RECOMMENDATIONS</title>
</head>
<body>
    <header class="homepage">
        <div class="title">
            <p class="head"><i class="fa-solid fa-rotate-left"></i><a href="home.php">  GO BACK</a></p>
        </div>
    </header>
    <div class="menu">
        <h1><i class="fa-solid fa-square-poll-vertical"></i>  GAMMY USER RECOMMENDATIONS</h1>
        <p>WHATS YOUR FAVOURITE TYPE OF GAMES?</p>
        <form id="surveyform">
            <label for="choose1"></label>
            <div class="radio-group">
                <label for="sg">PLAY AGAINST REAL PLAYER GAMES</label>
                <input type="radio" name="choose1" id="sg" value="sg">
                <label for="sp">SINGLE PLAYER GAMES</label>
                <input type="radio" name="choose1" id="sp" value="sp">
                <label for="cwf">CHILL WITH FRIENDS</label>
                <input type="radio" name="choose1" id="cwf" value="cwf">
            </div>
            <button type="button" class="submit-button" onclick="submitsurvey()">NEXT</button>
        </form>
    </div>
    <script src="survey.js"></script>
</body>
</html>
