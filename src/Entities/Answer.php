<?php

final class Answer
{
    private int $id;
    private int $idQuestion;
    private string $textReponse;
    private bool $isCorrect;

    public function __construct(int $id ,int $idQuestion, string $textReponse, bool $isCorrect = false)
    {

        $this->id = $id;
        $this->idQuestion = $idQuestion;
        $this->textReponse = $textReponse;
        $this->isCorrect = $isCorrect;
    }

    public function getTextReponse(): string
    {
        return $this->textReponse;
    }
     public function getIsCorrect() {
        return $this->isCorrect;
    }
    public function getId() {
        return $this->id;
    }
}
