<?php

final class Qcm
{
    private int $id;
    private string $themeName;
    private array $questions;

    public function __construct(int  $id, string $themeName)
    {
        $this->id = $id;
        $this->themeName = $themeName;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
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
