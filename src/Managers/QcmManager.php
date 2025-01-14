<?php



final class QcmManager
{
    public function generateDisplay(Qcm $qcm): string
    {
        ob_start()

?>
        <section>
            <form action="" method="post">
                <h1><?= $qcm->getThemeName() ?></h1>

                <?php
                /**
                 * @var Question $question
                 */
                foreach($qcm->getQuestions() as $index => $question): ?>

                    <article>
                        <h2><?= $question->getTitle() ?></h2>

                        <?php
                        /**
                         * @var Answer $answer
                         */
                        foreach($question->getAnswers() as $answer): ?>

                            <div>
                                <input type="radio" name="question<?= $index ?>">
                                <p><?= $answer->getTitle() ?></p>
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
}
