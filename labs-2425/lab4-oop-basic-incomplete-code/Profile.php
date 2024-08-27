<?php
/**
 * This class is intenionally written as incomplete, students should be able to provide the missing properties and methods to this class
 */
class Profile
{
    protected $first_name;
    protected $middle_name;
    protected $last_name;
    protected $email;
    protected $contact_number;
    protected $address;
    protected $favorite_quote;

    function __construct($last_name, $first_name, $middle_name) {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
    }

    public function getCompleteName($format = '{last}, {first} {middle}')
    {
        $full_name = $format;
        $full_name = str_replace('{last}', $this->getLastName(), $full_name);
        $full_name = str_replace('{first}', $this->getFirstName(), $full_name);
        $full_name = str_replace('{middle}', $this->getMiddleName(), $full_name);
        return $full_name;
    }


    // NAME
    protected function getLastName()
    {
        return $this->last_name;
    }

    protected function getFirstName() {
        // TO DO
        return $this->first_name;
    }

    protected function getMiddleName() {
        // TO DO
        return $this->middle_name;
    }


    // FAVORITE QUOTE
    public function getFavoriteQuote() {
        // TO DO
        return $this->favorite_quote;
    }

    public function setFavoriteQuote($quote)
    {
        $this->favorite_quote = $quote;
    }


    // EMAIL
    public function getEmail() {
        // TO DO
        return $this->email;
    }

    public function setEmail($email) {
        // TO DO
        $this->email = $email;
    }


    // ADDRESS
    public function getAddress() {
        // TO DO
        return $this->address;
    }

    public function setAddress($address) {
        // TO DO
        $this->address = $address;
    }

}