<?php


class Question
{
    private array $answers;
    private string $titledQuestion;

    // C'est le construct qui permets de créer l'objet Question en mettant directement le parametre titled  
    /** Mettre en parametre l'intitulé de la question */
    public function __construct(string $titledQuestion)
    {
        $this->answers = [];
        $this->titledQuestion = $titledQuestion;
    }


    // Permets d'afficher la variable $answers de partout
    public function getAnswers(): array
    {
        return $this->answers;
    }



    // La fonction setAnswers permets de modifier la variable $answers dans tout les documents et permets de vérifier que la valeur qu'on ajoute est bien un objet Answer
    public function setAnswers(array $answers): self
    {
        foreach ($answers as $answer) {
            if (!$answer instanceof Answer) {
                throw new Exception("Il faut que le tableau soit composé de reponses uniquement");
            }
        }

        $this->answers = $answers;

        return $this;
    }





    // Sert a rien pour l'instant


    // public function addAnswer(Answer $answer): self
    // {
    //     $this->answers[] = $answer;
    //     return $this;
    // }

}
