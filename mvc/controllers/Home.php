<?php
class Home extends Controller
{
    public $CategoryModel;
    public $ProductModel;
    public function __construct()
    {
        $this->CategoryModel = $this->model("CategoryModels");
        $this->ProductModel = $this->model("ProductModels");
    }
    public function index()
    {
        $request = new Request;
        $data = $request->getFields();
        if ($data)    
            var_dump($data);
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
        ]);
    }
}
?>