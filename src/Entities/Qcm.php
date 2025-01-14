<?php

final class Qcm
{

    private string $name;
    private array $questions;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Cette fonction permet de récupérer les questions d'un quiz
     * @return array
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * Permets d'associer un tableau de question à un quiz
     * @param array $questions
     * @return Qcm
     */
    public function setQuestions(array $questions): self
    {
        foreach ($questions as $question) {
            if (!$question instanceof Question) {
                throw new Exception('Il doit y avoir que des questions dans le tableau');
            }
        }

        $this->questions = $questions;
        return $this;
    }
}
