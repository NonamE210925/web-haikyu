<?php

/**
 * Index Page Controller
 * @category  Controller
 */
class IndexController extends BaseController
{
	function __construct()
	{
		parent::__construct();
		$this->tablename = "user";
	}
	/**
	 * Index Action 
	 * @return null
	 */
	function index()
	{
		if (user_login_status() == true) {
			$this->redirect(HOME_PAGE);
		} else {
			$db = $this->GetModel();

			// Ambil data dari tabel about untuk ID tertentu, misalnya ID 1
			$about_id_1 = $db->where("id", 1)->getOne("about");
			$about_id_2 = $db->where("id", 2)->getOne("about");
			$about_id_3 = $db->where("id", 3)->getOne("about");
			$about_id_4 = $db->where("id", 4)->getOne("about");
			$about_id_5 = $db->where("id", 5)->getOne("about");
			$about_id_6 = $db->where("id", 6)->getOne("about");

			// Ambil data dari tabel cover_video
			$cover_video = $db->get("cover_video");

			// Ambil data dari tabel karakter
			$karakter = $db->get("karakter");

			// Ambil data dari tabel quotes
			$quotes = $db->get("quotes");

			// Ambil data dari tabel teams
			$teams = $db->get("teams");

			// Ambil data dari tabel video dengan join pada cover_video
			$db->join("cover_video", "video.id_cover = cover_video.id", "INNER");
			$video_fields = array(
				"video.video",
				"video.episod",
				"video.id",
				"video.id_cover",
				"cover_video.judul AS cover_video_judul",
				"cover_video.caption AS cover_video_caption",
				"cover_video.gambar AS cover_video_gambar",
				"cover_video.tumbler AS cover_video_tumbler", // tambahkan ini
				"cover_video.id AS cover_video_id"
			);
			$videos = $db->get("video", null, $video_fields);

			// Siapkan data untuk dikirim ke tampilan
			$data = array(
				"about_id_1" => $about_id_1,
				"about_id_2" => $about_id_2,
				"about_id_3" => $about_id_3,
				"about_id_4" => $about_id_4,
				"about_id_5" => $about_id_5,
				"about_id_6" => $about_id_6,
				"cover_video" => $cover_video,
				"karakter" => $karakter,
				"quotes" => $quotes,
				"teams" => $teams,
				"videos" => $videos
			);

			$this->render_view("index/index.php", $data, "main_layout.php");
		}
	}
	private function login_user($username, $password_text, $rememberme = false)
	{
		$db = $this->GetModel();
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$db->where("username", $username)->orWhere("email", $username);
		$tablename = $this->tablename;
		$user = $db->getOne($tablename);
		if (!empty($user)) {
			//Verify User Password Text With DB Password Hash Value.
			//Uses PHP password_verify() function with default options
			$password_hash = $user['password'];
			$this->modeldata['password'] = $password_hash; //update the modeldata with the password hash
			if (password_verify($password_text, $password_hash)) {
				unset($user['password']); //Remove user password. No need to store it in the session
				set_session("user_data", $user); // Set active user data in a sessions
				//if Remeber Me, Set Cookie
				if ($rememberme == true) {
					$sessionkey = time() . random_str(20); // Generate a session key for the user
					//Update user session info in database with the session key
					$db->where("id", $user['id']);
					$res = $db->update($tablename, array("login_session_key" => hash_value($sessionkey)));
					if (!empty($res)) {
						set_cookie("login_session_key", $sessionkey); // save user login_session_key in a Cookie
					}
				} else {
					clear_cookie("login_session_key"); // Clear any previous set cookie
				}
				$redirect_url = get_session("login_redirect_url"); // Redirect to user active page
				if (!empty($redirect_url)) {
					clear_session("login_redirect_url");
					return $this->redirect($redirect_url);
				} else {
					return $this->redirect(HOME_PAGE);
				}
			} else {
				//password is not correct
				return $this->login_fail("Username or password not correct");
			}
		} else {
			//user is not registered
			return $this->login_fail("Username or password not correct");
		}
	}
	/**
	 * Display login page with custom message when login fails
	 * @return BaseView
	 */
	private function login_fail($page_error = null)
	{
		$this->set_page_error($page_error);
		$this->render_view("index/login.php");
	}
	/**
	 * Login Action
	 * If Not $_POST Request, Display Login Form View
	 * @return View
	 */
	function login($formdata = null)
	{
		// $this->render_view("index/login.php");
		if ($formdata) {
			$modeldata = $this->modeldata = $formdata;
			$username = trim($modeldata['username']);
			$password = $modeldata['password'];
			$rememberme = (!empty($modeldata['rememberme']) ? $modeldata['rememberme'] : false);
			$this->login_user($username, $password, $rememberme);
		} else {
			// $this->set_page_error("Invalid request");
			$this->render_view("index/login.php");
		}
	}
	/**
	 * Insert new record into the user table
	 * @param $formdata array from $_POST
	 * @return BaseView
	 */
	function register($formdata = null)
	{
		if ($formdata) {
			$request = $this->request;
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$fields = $this->fields = array("username", "password", "email", "foto", "user_role_id"); //registration fields
			$postdata = $this->format_request_data($formdata);
			$cpassword = $postdata['confirm_password'];
			$password = $postdata['password'];
			if ($cpassword != $password) {
				$this->view->page_error[] = "Your password confirmation is not consistent";
			}
			$this->rules_array = array(
				'username' => 'required',
				'password' => 'required',
				'email' => 'required|valid_email',
				'foto' => 'required',
				'user_role_id' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'username' => 'sanitize_string',
				'email' => 'sanitize_string',
				'foto' => 'sanitize_string',
				'user_role_id' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$password_text = $modeldata['password'];
			//update modeldata with the password hash
			$modeldata['password'] = $this->modeldata['password'] = password_hash($password_text, PASSWORD_DEFAULT);
			//Check if Duplicate Record Already Exit In The Database
			$db->where("username", $modeldata['username']);
			if ($db->has($tablename)) {
				$this->view->page_error[] = $modeldata['username'] . " Already exist!";
			}
			//Check if Duplicate Record Already Exit In The Database
			$db->where("email", $modeldata['email']);
			if ($db->has($tablename)) {
				$this->view->page_error[] = $modeldata['email'] . " Already exist!";
			}
			if ($this->validated()) {
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if ($rec_id) {
					$this->login_user($modeldata['email'], $password_text);
					return;
				} else {
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New User";
		return $this->render_view("index/register.php");
	}
	/**
	 * Logout Action
	 * Destroy All Sessions And Cookies
	 * @return View
	 */
	function logout($arg = null)
	{
		Csrf::cross_check();
		session_destroy();
		clear_cookie("login_session_key");
		$this->redirect("");
	}
}
