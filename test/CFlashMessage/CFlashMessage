<?php
namespace Anax\CFlashMessage;
class CFlashMessageTest extends \PHPUnit_Framework_TestCase {
/**
* Test
*
* @return void
*
*/
public function testNoSession(){
$flash = new \Anax\CFlashMessage\CFlashMessage();
}
/**
* Test
*
* @return void
*
*/
public function testInfo(){
//create flash element
$flash = new \Anax\CFlashMessage\CFlashMessage();
//try to set default message
$flash->info();
//try get and remove from session
$exp = "<div class='infoMessage'>INFO<br>Default info message</div>";
$res = $flash->get();
$this->assertEquals($res, $exp, "Failed get correct message back");
//try with specific message
$flash->info("test message");
//try get without removing from session
$exp = "<div class='infoMessage'>INFO<br>test message</div>";
$res = $flash->get(false);
$this->assertEquals($res, $exp, "Failed get correct message back");
//try get and remove from session
$res = $flash->get();
$this->assertEquals($res, $exp, "Failed get correct message back");
$exp = null;
$res = $flash->get();
$this->assertEquals($res, $exp, "Should be null but is not");
}
/**
* Test
*
* @return void
*
*/
public function testError(){
//create flash element
$flash = new \Anax\CFlashMessage\CFlashMessage();
$message = "test message";
$flash->error($message);
$exp = "<div class='errorMessage'>ERROR<br>test message</div>";
$res = $flash->get(false);
$this->assertEquals($res, $exp, "Failed to set error message");
//try get and remove from session
$res = $flash->get();
$this->assertEquals($res, $exp, "Failed get correct message back");
$exp = null;
$res = $flash->get();
$this->assertEquals($res, $exp, "Should be null but is not");
}
/**
* Test
*
* @return void
*
*/
public function testWarning(){
//create flash element
$flash = new \Anax\CFlashMessage\CFlashMessage();
$message = "test message";
$flash->warning($message);
$exp = "<div class='warningMessage'>WARNING<br>test message</div>";
$res = $flash->get(false);
$this->assertEquals($res, $exp, "Failed to set warning message");
//try get and remove from session
$res = $flash->get();
$this->assertEquals($res, $exp, "Failed get correct message back");
$exp = null;
$res = $flash->get();
$this->assertEquals($res, $exp, "Should be null but is not");
}
/**
* Test
*
* @return void
*
*/
public function testSuccess(){
//create flash element
$flash = new \Anax\CFlashMessage\CFlashMessage();
$message = "test message";
$flash->success($message);
$exp = "<div class='successMessage'>SUCCESS<br>test message</div>";
$res = $flash->get(false);
$this->assertEquals($res, $exp, "Failed to set success message");
//try get and remove from session
$res = $flash->get();
$this->assertEquals($res, $exp, "Failed get correct message back");
$exp = null;
$res = $flash->get();
$this->assertEquals($res, $exp, "Should be null but is not");
}
}
