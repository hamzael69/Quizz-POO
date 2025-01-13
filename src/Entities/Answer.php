<?php

class Answer{
    private bool $isTrue ;
    private string $allAnswers ;


    public function __construct(bool $isTrue, string $allAnswers){

    $this->isTrue = $isTrue ;
    $this->allAnswers = $allAnswers ;

    }
        public function getAllAnswers(): string {
            return $this->allAnswers;
        }
        public function setAllAnswers(string $allAnswers): self
    {
        $this->allAnswers = $allAnswers;
        return $this;
    }
    
}

