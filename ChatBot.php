<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ChatBot.css">
    <script src="js/Chat.js"></script>
    <title> ChatBot </title>
</head>
<body>

<div class="box">
    <div style="text-align: center;" class="top">
        <h1>Dot Customer ChatBot</h1>
    </div>
    <div class="mid">
        <div class="chat">
            <h2>Type Your Query Below</h2>
            <p id="chatLog">How May I Help you?</p>
        </div>
    </div>
    <div class="input">
        <input type="text" id="userBox"onkeydown="if(event.keyCode == 13){ talk() }"placeholder="Type a Message...">
    </div>
</div>
</body>
</html>