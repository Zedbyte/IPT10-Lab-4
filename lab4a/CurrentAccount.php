<?php 

require_once('Account.php');

class CurrentAccount extends Account {
    public $account_no;
    public $balance;

    public function withdraw() {return false;}
}