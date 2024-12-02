<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage("/wp-login.php");
        $I->fillField("#user_login", "rana");
        $I->fillField("#user_pass","Pass1234@");
        $I->click("#wp-submit");

    }

    
    public function tryToTest1(AcceptanceTester $I)
    {
        $I->wantToTest("I want to input an HTML '<h1>Samsul</h1>' tag into the 'Full Name' field on the user form and check for a warning 'Full Name consist of only letters and dots.' message for this field.");
        $I->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
        $I->wait(.5);
        $I->fillField("input#qa_test_fullname", "<h1>Samsul</h1>");
        $I->fillField("input#qa_test_nickname", "Rana");
        $I->fillField("input#qa_test_address", "paik");
        $I->fillField("input#qa_test_dob_d", '32');
        $I->selectOption('select#qa_test_dob_m', "7");  // December
        $I->fillField('input#qa_test_dob_y', "2008");
        $I->fillField("input#qa_test_email", 'wasir@admin.com');
        $I->fillField("input#qa_test_web", 'https://wasir.com');
        $I->click('//input[@type="submit"]');
        $I->see("Full Name consist of only letters and dots.");
        $I->wait(1);
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantToTest("I want to input an HTML '<h1>Samsul</h1>' tag into the 'Full Name' field on the user form and check for a warning 'Full Name consist of only letters and dots.' message for this field.");
        $I->amOnPage("/wp-admin/options-general.php?page=qa-test-settings");
        $I->wait(.5);
        $I->fillField("input#qa_test_fullname", "<h1>Samsul</h1>");
        $I->fillField("input#qa_test_nickname", "Rana");
        $I->fillField("input#qa_test_address", "paik");
        $I->fillField("input#qa_test_dob_d", '32');
        $I->selectOption('select#qa_test_dob_m', "7");  // December
        $I->fillField('input#qa_test_dob_y', "2008");
        $I->fillField("input#qa_test_email", 'wasir@admin.com');
        $I->fillField("input#qa_test_web", 'https://wasir.com');
        $I->click('//input[@type="submit"]');
        $I->see("Full Name consist of only letters and dots.");
        $I->wait(1);
    }
}
