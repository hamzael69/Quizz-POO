<?php

final class QuestionRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }
  
    public function findAll(): array
    {
        $query = "SELECT * FROM question";
        $stmt = $this->pdo->query($query);
        $questionDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($questionDatas as $questionData) {
            $question[] = QuestionMapper::mapToObject($questionData);
        }
        return $question;
    }
    public function find(int $themeId): array
    {
        $query = "SELECT * FROM question WHERE idTheme = :idTheme";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['idTheme' => $themeId]);
        $questionDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($questionDatas as $questionData) {
            $question[] = QuestionMapper::mapToObject($questionData);
        }
        return $question;
    }
}