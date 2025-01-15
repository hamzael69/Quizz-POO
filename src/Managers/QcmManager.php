<?php
final class QcmManager
{

    private $qcmRepository;
    private $questionRepository;
    private $answerRepository;

    public function __construct()
    {
        $this->qcmRepository = new QcmRepository();
        $this->questionRepository = new QuestionRepository();
        $this->answerRepository = new AnswerRepository();
    }

    public function getQcmWithQuestionAndAnswers(int $themeId)
    {

        $qcm = $this->qcmRepository->find($themeId);

        $questions = $this->questionRepository->find($themeId);

        foreach ($questions as $question) {
            $answers = $this->answerRepository->find($question->getId());
            foreach ($answers as $answer) {
                $question->setAnswers($answers);
            }
            $qcm->setQuestions($questions);
        }

        return $qcm;
    }


    public function generateDisplay(Qcm $qcm): string
    {
        ob_start()

?>
        <section>
            <form action="../process/calcul-score-quiz.php" method="post">
                <h1><?= $qcm->getThemeName() ?></h1>

                <?php
                /**
                 * @var Question $question
                 */
                foreach ($qcm->getQuestions() as $index => $question): ?>

                    <article>
                        <h2><?= $question->getTitle() ?></h2>

                        <?php
                        /**
                         * @var Answer $answer
                         */
                        foreach ($question->getAnswers() as $answer): ?>

                            <div>
                                <input type="radio" name="question_<?= $index ?>" value="<?= $answer->getIsCorrect() ?>" data-correct="<?= $answer->getIsCorrect() ?>">
                                <p><?= $answer->getTextReponse() ?></p>
                            </div>

                        <?php endforeach ?>
                    </article>

                <?php endforeach ?>

                <div>
                    <input type="submit" value="Valider">
                </div>
            </form>
        </section>

<?php
        return ob_get_clean();
    }


    // Traitement des réponses après soumission du formulaire
    public function handleQuizSubmission(array $userAnswers): void
    {
        session_start();
        $score = 0;

        foreach($userAnswers as $userAnswer)
        {
            if($userAnswer === "1"){
                $score += 1;
            }
        }

        $_SESSION['score'] = $score; 
    }
}
