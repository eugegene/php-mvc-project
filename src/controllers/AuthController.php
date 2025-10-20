<?php
class AuthController extends Controller
{
    private $userModel;
    private $sessionModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->sessionModel = new SessionModel();
    }

    private function _render_page($error = ''): void
    {
        $data = [
            'page' => 'Autorisation',
            'error' => $error,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'auth/login.php');
    }

    public function action_render()
    {
        $this->_render_page();
    }

    public function action_login()
    {
        $username = Utils::getVar('username');
        $password = Utils::getVar('password');

        $user = $this->userModel->authenticate($username, $password);

        if ($user) {
            $token = $this->sessionModel->create($user['id']);
            setcookie('auth_token', $token, time() + 86400, '/');
            Application::generateHeader('index');
            exit;
        }

        $this->_render_page('Invalid username or password');
    }

    public function action_logout()
    {
        $token = Utils::getCookie('auth_token') ?? '';
        if ($token) {
            $this->sessionModel->delete($token);
            setcookie('auth_token', '', time() - 3600, '/');
        }
        Application::generateHeader('auth');
        exit;
    }

    public static function checkAuth(): bool
    {
        $token = Utils::getCookie('auth_token') ?? '';
        $sessionModel = new SessionModel();

        if (!$token || !$sessionModel->validate($token)) {
            Application::generateHeader('auth');
            return false;
        }

        return true;
    }
}
?>