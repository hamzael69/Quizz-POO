<?php
include_once '../utils/autoloader.php';
require_once '../utils/db.php';

// On crée une instance qcm vide
// $qcm = new Qcm("Renaud", 1);


// // On crée une instance Question vide
// $question1 = new Question("Combien de litres de Ricard par jour? ");

// // On crée le tableau des réponses possible de la question 1
// $answers1 = [
//     new Answer('1', true),
//     new Answer('2')
// ];

// // On associe le tableau de réponses à la question correspondante
// $question1->setAnswers($answers1);
// $question1->setExplainationAnswer('La réponse correcte est "1 Litre de Ricard".');

// // On crée une deuxieme instance de Question vide
// $question2 = new Question ("Qu'est qui s'est explosé dans ses fenêtres  ?");

// // On crée le tableau des réponses possible à la question 2
// $answers2 = [
//     new Answer('Un 747', true),
//     new Answer('Un oiseau')
// ];

// // On associe le tableau de réponses à la question correspondante
// $question2->setAnswers($answers2);
// $question2->setExplainationAnswer('"Un 747 s\'est explosé dans mes fenêtres"');

// // On crée le tableau des questions possible au quiz
// $questions = [
//     $question1,
//     $question2,
// ];

// // On associe le tableau de questions au quiz correspondant
// $qcm->setQuestions($questions);

// // var_dump($qcm->getQuestions()[0]);


// $manager = new QcmManager();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>

        <?= $manager->generateDisplay($qcm)?>
    </main>
</body>
</html>