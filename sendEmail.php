<?php

require 'vendor/autoload.php'; // 确保这个路径与实际安装的 Composer autoload 路径相符

use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

// 函数：验证和清洁输入
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// 初始化变量
$name = $email = $phoneNumber = $review = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? test_input($_POST['name']) : "";
    $email = isset($_POST['email']) ? test_input($_POST['email']) : "";
    $phoneNumber = isset($_POST['phonenumber']) ? test_input($_POST['phonenumber']) : "";
    $review = isset($_POST['reviewbox']) ? test_input($_POST['reviewbox']) : "";


 // 数据验证
 if (empty($name)) {
    $errors[] = "Name is required.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}
if (!preg_match("/^\d{1,15}$/", $phoneNumber)) {
    $errors[] = "Invalid phone number. Phone number should be up to 15 digits.";
}
if (empty($review)) {
    $errors[] = "Review cannot be empty.";
}

 // 检查错误数组
 if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>";
    }
    return; // 结束脚本
}

    // AWS SES 配置
    $SesClient = new SesClient([
        'version'     => 'latest',
        'region'      => 'ap-southeast-2',
    ]);

    $sender_email = 'ichoice666@gmail.com'; // 替换为您在 AWS SES 中验证过的发件人邮箱
    $recipient_emails = ['ichoice666@gmail.com']; // 收件人邮箱

    // 构建邮件内容
    $subject = 'New Review from ' . $name;
    $plaintext_body = "Name: $name \nEmail: $email \nPhone Number: $phoneNumber \nReview: $review";
    $html_body = "<h1>New Review</h1><p><strong>Name:</strong> $name</p><p><strong>Email:</strong> $email</p><p><strong>Phone Number:</strong> $phoneNumber</p><p><strong>Review:</strong> $review</p>";
    $char_set = 'UTF-8';

    try {
        $result = $SesClient->sendEmail([
            'Destination' => [
                'ToAddresses' => $recipient_emails,
            ],
            'ReplyToAddresses' => [$email],
            'Source' => $sender_email,
            'Message' => [
                'Body' => [
                    'Html' => [
                        'Charset' => $char_set,
                        'Data' => $html_body,
                    ],
                    'Text' => [
                        'Charset' => $char_set,
                        'Data' => $plaintext_body,
                    ],
                ],
                'Subject' => [
                    'Charset' => $char_set,
                    'Data' => $subject,
                ],
            ],
        ]);
        echo "<p style='color: green;'>Successfully in leaving reviews!</p>"; // 邮件发送成功的消息
    } catch (AwsException $e) {
        echo "<p style='color: red;'>Sorry, unsuccessfully in leaving reviews! Please try again! Error message: </p>" . $e->getAwsErrorMessage() . "\n";
    }
}
?>


