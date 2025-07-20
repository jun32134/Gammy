<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['message'])) {
    $userMessage = strtolower(trim($data['message']));

    switch ($userMessage) {
        case 'hello':
            $reply = 'Hello, how can I help you?';
            break;
        case 'how are you':
            $reply = 'I am just a bot, but I am here to help you!';
            break;
        case 'what is your name':
            $reply = 'My name is GammyBot!';
            break;
        case 'how to use gammymenu':
            $reply = 'Once you click GammyMenu, you have 2 options "pay to play" and "free to play". Choose one of them, and then you will have a list of games displayed.';
            break;
        case 'how to use gammytrendrec':
            $reply = 'To use GammyTrendRec, it will show each 3 types of categories which is "Most player played", "Best Selling games" and "New Releases games".';
            break;
        case 'how to use gammyuserrec':
            $reply = 'To use GammyUserRec, you just have to answer all the questions that we provided, after that it will come out a list of games based on your answers.';
            break;
        case 'explain pay to play':
            $reply = 'Pay to Play is basically the games that you need to pay in order to play. ';
            break;
        case 'explain free to play':
            $reply = 'Free to Play is basically the games that you dont have to pay in order to play, it is completely free.';
            break;
        case 'explain most played games':
            $reply = 'Most played games is basically just to show which games has the most player playing, it has rating of 10 to 7, 10 is the best and 7 is the worst.';
            break;
        case 'explain best selling games':
            $reply = 'Best selling games is the games where alot of people buy the games, it has rating of 10 to 7, 10 is the best and 7 is the worst. ';
            break;
        case 'explain new releases games':
            $reply = 'New releases games is the games that gain alot of players when is just releases few months only, it has rating of 10 to 8, 10 is the best and 8 is the worst. ';
            break;
        case 'how your day':
            $reply = 'As a bot, I don’t have days, but how yours?';
            break;
        case 'how the weather':
            $reply = 'I can’t check the weather, but I hope it’s pleasant!';
            break;
        case 'how are you created':
            $reply = 'I am created using html, css, javascript for front end, php, sql for backend and machine learning using python. ';
            break;
        case 'why are you created':
            $reply = 'I am created to bring more people to gaming and also dont let those people play too much games bored of gaming.';
            break;
        case 'im good':
            $reply = 'thats good to hear, glad you having a good day :D';
            break;
        case 'im having a bad day':
            $reply = 'oh no im so sorry to hear that, but im not a therapist so i cant help you but i hope you will feel better soon :D';
            break;
        default:
            $reply = 'I am not sure how to respond to that.';
    }

    echo json_encode(['reply' => $reply]);
} else {
    echo json_encode(['reply' => 'No message received.']);
}