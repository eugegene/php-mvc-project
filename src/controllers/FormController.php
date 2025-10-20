<?php
class FormController extends Controller
{
    private function _render_page(): void
    {
        $data = [
            'page' => 'Головна сторінка',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Гість'),
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
                $errors[] = "Прізвище містить неанглійські символи або порожнє.";
            }
            if (preg_match('/[^A-Za-z\s-]/', $firstname) || empty($firstname)) {
                $errors[] = "Ім'я містить неанглійські символи або порожнє.";
            }
            if (preg_match('/[^A-Za-z\s-]/', $middlename) || empty($middlename)) {
                $errors[] = "По батькові містить неанглійські символи або порожнє.";
            }

            if (!empty($errors)) {
                $errorString = "<ul>";
                foreach ($errors as $error) {
                    $errorString .= "<li>$error</li>";
                }
                $errorString .= "</ul>";
                echo "<p>Помилка:</p>" . $errorString;
            } else {
                echo "<p>Успішно!</p>";
            }
        }

        $this->_render_page();
    }
}
?>