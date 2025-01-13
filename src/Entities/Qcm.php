<?php

class Qcm {
    private array $questions ; 
    private string $theme ;
    
    public function __construct(string $theme)
    {
        $this->theme = $theme ;
        $this->questions = [] ;
        
    }


    public function getQuestions(): array
    {
        return $this->questions;
    }

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

    public function addQuestion(Question $question): self
    {
        $this->questions[] = $question;
        return $this;
    }

}