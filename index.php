<?php
$bad_word = $_GET ? $_GET['word'] : '';
$paragraph = '
<strong>- 0. Prologue -</strong><br/>
<br/>
[The Daily Quest has arrived.] <br/>
<br/>
A clear and articulate female voice spoke to him. <br/>
This was not a video game.  Nor was it a dream. <br/>
The voice spoke to him, only in his head.  On top of that, an informative quest screen floated in front of him, waiting for his access. <br/>
‘Can’t be… today too?’ <br/>
With a heavy heart, he opened the quest and read its contents. <br/>
<br/>
ring~ ring~ <br/>
<br/>
Daily Quest: The Preparation To Become Powerful <br/><br/>
Do 100 Push-ups: <br/>
( Incomplete ) (0/100) <br/>
______________________ <br/><br/>
Do 100 Sit-ups: <br/>
( Incomplete ) (0/100) <br/>
______________________ <br/><br/>
Do 100 Squats: <br/>
( Incomplete ) (0/100) <br/>
______________________ <br/><br/>
Run 10 kilometers: <br/>
( Incomplete ) (0/10) <br/><br/>
* Warning : Failing to complete the Daily Quest will result in a Penalty Quest. <br/>
He cursed as he verified its contents. <br/>
“ Goddammit, how many days has it been! ”';
$paragraph_censored = str_replace($bad_word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Bad Words</title>
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <h3>Censura una parola:</h3>
    <form method="GET">
        <input type="text" placeholder="Inserisci la parola" name="word">
        <button type="submit">Invia</button>
    </form><br />
    <span>
        Il paragrafo è lungo: <?php echo strlen(trim($paragraph_censored)) ?> parole.
    </span>
    <br />
    <hr />
    <h4>Paragrafo originale:</h4>
    <p><?php echo $paragraph ?></p>
    <hr />
    <h4>Paragrafo censurato:</h4>
    <p><?php echo $paragraph_censored ?></p>
</body>

</html>