Feature: I want to see three web pages and main menu

  Scenario: Red page
    Given I am on homepage
     Then I should see "Red, red, red"
      And I should see "Main menu"

  Scenario: Green page
    Given I am on "/green.html"
     Then I should see "Green, green, green"
      And I should see "Main menu"

  Scenario: Blue page
    Given I am on "/blue.html"
     Then I should see "Blue, blue, blue"
      And I should see "Main menu"