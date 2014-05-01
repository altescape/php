<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 22:22
 */

namespace DesignPatterns\DependancyInjection;


class Author {

    private $first_name;
    private $last_name;
    private $rank;

    function __construct($first_name, $last_name, $rank)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

} 