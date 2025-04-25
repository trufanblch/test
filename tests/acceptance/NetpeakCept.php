<?php
use Codeception\Util\Locator;
use Codeception\Module\Asserts;
h
kfkfkf
  ghghh
  hhhg
  hhhh
  hhjb
  hhhj
  jfjfjfk
  hdhfj
  hdhfh
  hfhfj
  hdjdjf
  jfjfj
  


  ghifjfkfkfm
  jdjrkdonrrbfi

$I = new AcceptanceTester($scenario);
$I->wantTo('see start page, go to Career page, interact with resume page and go to Courses page');
$I->amOnPage('/');


////Check button "I want to work" on the page and click
$I->see('Я хочу работать в Netpeak', '/html/body/div[5]/div/div/div[2]/div/a');
$I->click(Locator::contains('/html/body/div[5]/div/div/div[2]/div/a','Я хочу работать в Netpeak'));
$I->amOnUrl('https://career.netpeak.group/hiring/');


//Check button "Upload Resume" on the page, attach wrong file test.png
//and see that error message appeared kljlkjk kljlkj
  f
  g
    fn
    ggv
    gg
    hh
    hh
    jj
    jj
    
    h
    g
     ghht
    ggv
    ffg
    gggg
    sddd
    ddsddc
    jjj
    
    ррр
    
$I->see('Загрузить резюме', '#upload');
$I->attachFile("input[type='file']", 'test.png');
$I->wait(5);
$I->see('Ошибка: данные файла не были переданы.', '#up_file_name label.control-label');

fff
fff
  fff

  ggg
  fgg
  fff
  
//Create Random variables for Name, LastName and Email
$randomName = $I->executeJS("return Math.random().toString(36).substring(2,12);");
$randomLastname = $I->executeJS("return Math.random().toString(36).substring(2,12);");
$randomEmail = $I->executeJS("var chars = 'abcdefghijklmnopqrstuvwxyz'; return chars[Math.floor(Math.random()*26)] + Math.random().toString(36).substring(2,11) + '@domain.com';");
f
  f
  f
  f
  f
  ffff
  fggg
  ggggg
  fsssfg
  ggggee
  ffcdset
  ffghtexft

  dffffghr
  kfmfmkf
//Fill fields in "personal data" block using random variables and press button "submit" resume
$I->fillField('#inputName', "$randomName");
$I->fillField('#inputLastname', "$randomLastname");
$I->fillField('#inputEmail', "$randomEmail");
$I->fillField('#inputPhone', "+380938003287");
$I->selectOption('form select[name=by]','1969');
$I->selectOption('form select[name=bm]','12');
$I->selectOption('form select[name=bd]','25');
$I->click(Locator::contains('#submit','Отправить анкету'));
$I->wait(3);

// Check color of warning fields changed to red
$color = $I->executeJS("return jQuery('div p.warning-fields.help-block').css('color');");
$I->assertEquals( $color, 'rgb(255, 0, 0)' );

// Check for button "Courses", click and see that you are on "Courses" page
$I->see('Интернатура', '#main-menu li.blog a');
$I->click(Locator::contains('#main-menu li.blog a','Интернатура'));
$I->amOnUrl('https://school.netpeak.group/');
