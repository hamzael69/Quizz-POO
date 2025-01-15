<?php

final class Question
{   
    private int $id;
    private int $idTheme;
    private string $title;
    private string $explainationAnswer;
    private array $answers;

    public function __construct(int $id, string $title,int $idTheme)
    {   
        $this->id = $id;
        $this->title = $title;
        $this->idTheme = $idTheme;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getExplainationAnswer(): string
    {
        return $this->explainationAnswer;
    }

    public function setExplainationAnswer(string $explainationAnswer): self
    {
        $this->explainationAnswer = $explainationAnswer;
        return $this;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }


    public function setAnswers(array $answers): self
    {
        foreach ($answers as $answer) {
            if (!$answer instanceof Answer) {
                throw new Exception('Il doit y avoir que des réponses dans le tableau de questions');
            }
        }

        $this->answers = $answers;
        return $this;
    }
}
