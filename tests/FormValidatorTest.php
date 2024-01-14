// tests/FormValidatorTest.php

namespace tests;

use PHPUnit\Framework\TestCase;
require_once "../FormValidator.php";

class FormValidatorTest extends TestCase {
    public function testValidInput() {
        $validator = new FormValidator();
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phoneNumber' => '1234567890',
            'review' => 'Great place!'
        ];

        $result = $validator->validate($data);
        $this->assertEmpty($result); // 没有错误
    }

    public function testInvalidEmail() {
        $validator = new FormValidator();
        $data = [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'phoneNumber' => '1234567890',
            'review' => 'Great place!'
        ];

        $result = $validator->validate($data);
        $this->assertArrayHasKey('email', $result); // 应该包含 email 错误
    }

}
