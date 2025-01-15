<?php


final class QuestionMapper 
{
    public static function mapToObject(array $data): Question {
        return new Question(
            $data['id'],
            $data['questionName'],
            $data['idTheme']
        );
    }
}

