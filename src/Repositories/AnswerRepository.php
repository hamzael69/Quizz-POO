<?php

final class AnswerRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array
    {
        $query = "SELECT * FROM answer";
        $stmt = $this->pdo->query($query);
        $answerDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $answer = []; // Initialize the array

        foreach ($answerDatas as $answerData) {
            $answer[] = AnswerMapper::mapToObject($answerData);
        }

        return $answer;
    }

    public function find(int $answerId): array
    {
        $query = "SELECT * FROM answer WHERE idQuestion = :idQuestion";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['idQuestion' => $answerId]);
        $answerDatas = $stmt->fetchAll(PDO::FETCH_ASSOC); // Use fetchAll to get all matching rows

        $answer = []; // Initialize the array

        foreach ($answerDatas as $answerData) {
            $answer[] = AnswerMapper::mapToObject($answerData);
        }

        return $answer;
    }
}
