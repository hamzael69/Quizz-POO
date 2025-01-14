<?php

class Qcm
{
    private array $questions;
    private string $theme;

    // Fonction construct pour créer l'objet Qcm avec un parametre a l'interieur 
    /** Mettre en parametre le theme du quizz */
    public function __construct(string $theme)
    {
        $this->theme = $theme;
        $this->questions = [];
    }

    // Fonction qui permets d'afficher la variable $questions de partout
    public function getQuestions(): array
    {
        return $this->questions;
    }


    // Fonction qui permets de modifier la variable $question pour s'en servir après
    public function setQuestions(array $questions): self
    {
        foreach ($questions as $question) {
            if (!$question instanceof Question) {
                throw new Exception("Il faut que le tableau soit composé de questions uniquement");
            }
        }

        $this->questions = $questions;

        return $this;
    }


    // Fonction qui permets d'ajouter une question au quizz
    public function addQuestion(Question $question): self
    {
        $this->questions[] = $question;
        return $this;
    }
}
