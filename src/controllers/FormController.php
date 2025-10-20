<?php
class FormController extends Controller
{
    private function _render_page(): void
    {
        $data = [
            'page' => 'Home page',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'form.php');
    }

    public function action_render()
    {
        $this->_render_page();
    }

    public function action_saveform()
    {
        $action = Utils::getVar("action");

        if ($action == "saveform") {
            $lastname = Utils::getVar("lastname");
            $firstname = Utils::getVar("firstname");
            $middlename = Utils::getVar("middlename");
            $age = Utils::getVar("age");
            $bio = Utils::getVar("bio");
            $errors = [];

            if (preg_match('/[^A-Za-z\s-]/', $lastname) || empty($lastname)) {
                $errors[] = "Last name contains non-English characters or is empty.";
            }
            if (preg_match('/[^A-Za-z\s-]/', $firstname) || empty($firstname)) {
                $errors[] = "First name contains non-English characters or is empty.";
            }
            // if (preg_match('/[^A-Za-z\s-]/', $middlename) || empty($middlename)) {
            //     $errors[] = "Middle name contains non-English characters or is empty.";
            // }

            if (!empty($errors)) {
                $errorString = "<ul>";
                foreach ($errors as $error) {
                    $errorString .= "<li>$error</li>";
                }
                $errorString .= "</ul>";
                echo "<p>Error:</p>" . $errorString;
            } else {
                echo "<p>Success!</p>";
            }
        }

        $this->_render_page();
    }
}
?>