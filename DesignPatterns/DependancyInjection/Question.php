<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 22:24
 */

namespace DesignPatterns\DependancyInjection;


class Question {
    private $author;
    private $question;

    function __construct($question, Author $author)
    {
        $this->author = $author;
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

} 