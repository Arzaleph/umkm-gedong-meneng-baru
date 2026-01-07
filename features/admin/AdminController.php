<?php
require_once "core/Controller.php";
require_once "core/Helpers.php";
require_once "AdminModel.php";

class AdminController extends Controller {

    private $model;

    public function __construct() {
        $this->model = new AdminModel();
    }

    private function authGuard() {
        if (!isAdmin()) {
            redirect("/admin/login");
        }
    }

    public function store() {
        $this->authGuard();
    
        $fotoName = null;
        if (!empty($_FILES["foto"]["name"])) {
            $fotoName = time() . "_" . $_FILES["foto"]["name"];
            $target = "public/uploads/" . $fotoName;
            
            if (!is_dir("public/uploads")) {
                mkdir("public/uploads", 0777, true);
            }
            
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
        }
    
        $data = [
            "nama" => $_POST["nama"],
            "kategori" => $_POST["kategori"],
            "deskripsi" => $_POST["deskripsi"],
            "alamat" => $_POST["alamat"],
            "kontak" => $_POST["kontak"],
            "foto" => $fotoName
        ];
    
        $this->model->storeUmkm($data);
        redirect("/admin/dashboard");
    }

    protected function view($path, $data = []) {
        extract($data);
    
        $isAdminPage = true; 
    
        require_once "shared/layouts/header.php";
        require_once "shared/components/navbar.php"; 
        
        require_once $path;
    
        echo "</body></html>";
    }

    public function login() {
        if (isAdmin()) redirect("/admin/dashboard");
        require_once "views/login.php";
    }

    public function auth() {
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";
        $admin = $this->model->findAdmin($username);

        if (!$admin || !password_verify($password, $admin["password"])) {
            $_SESSION["error"] = "Username atau password salah!";
            redirect("/admin/login");
        }

        $_SESSION["admin"] = ["id" => $admin["id"], "username" => $admin["username"]];
        redirect("/admin/dashboard");
    }

    public function dashboard() {
        $this->authGuard();
        $umkm = $this->model->getAllUmkm();
        $this->view("features/admin/views/dashboard.php", ["umkm" => $umkm]);
    }
    
    public function create() {
        $this->authGuard();
        $this->view("features/admin/views/umkm_create.php");
    }
    
    public function edit() {
        $this->authGuard();
        $id = $_GET["id"] ?? null;
        $umkm = $this->model->getUmkmById($id);
        $this->view("features/admin/views/umkm_edit.php", ["umkm" => $umkm]);
    }

    public function update() {
        $this->authGuard();

        $id = $_POST["id"];
        $old = $this->model->getUmkmById($id);

        $fotoName = $old["foto"];

        if (!empty($_FILES["foto"]["name"])) {
            $fotoName = time() . "_" . $_FILES["foto"]["name"];
            $target = "public/uploads/" . $fotoName;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $target);

            if (!empty($old["foto"]) && file_exists("public/uploads/" . $old["foto"])) {
                unlink("public/uploads/" . $old["foto"]);
            }
        }

        $data = [
            "nama" => $_POST["nama"],
            "kategori" => $_POST["kategori"],
            "deskripsi" => $_POST["deskripsi"],
            "alamat" => $_POST["alamat"],
            "kontak" => $_POST["kontak"],
            "foto" => $fotoName
        ];

        $this->model->updateUmkm($id, $data);
        redirect("/admin/dashboard");
    }

    public function delete() {
        $this->authGuard();

        $id = $_GET["id"];
        $old = $this->model->getUmkmById($id);

        if (!empty($old["foto"]) && file_exists("public/uploads/" . $old["foto"])) {
            unlink("public/uploads/" . $old["foto"]);
        }

        $this->model->deleteUmkm($id);
        redirect("/admin/dashboard");
    }
}