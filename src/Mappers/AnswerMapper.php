<?php

final class AnswerMapper
{
    public static function mapToObject(array $answerDatas): Answer
    {
        return new Answer(
            $answerDatas['id'],
            $answerDatas['idQuestion'],
            $answerDatas['textReponse'],
            $answerDatas['isCorrect']
        );
    }
}
