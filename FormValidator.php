class FormValidator {
    public function validate($data) {
        $errors = [];

        if (empty($data['name'])) {
            $errors['name'] = "Name is required.";
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        }

        if (!preg_match("/^\d{1,15}$/", $data['phoneNumber'])) {
            $errors['phoneNumber'] = "Invalid phone number. Phone number should be up to 15 digits.";
        }

        if (empty($data['review'])) {
            $errors['review'] = "Review cannot be empty.";
        }

        return $errors;
    }
}