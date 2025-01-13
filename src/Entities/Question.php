<?php


class Question {
    private array $answers ;
    private string $tiltledQuestion;

    public function __construct(string $tiltledQuestion)
    {
        $this->answers = [] ;
        $this->tiltledQuestion = $tiltledQuestion ;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

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

    public function addAnswer(Answer $answer): self
    {
        $this->answers[] = $answer;
        return $this;
    }

}



