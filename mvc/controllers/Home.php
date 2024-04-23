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
        // $request = new Request;
        // $data = $request->getFields();
        echo "<pre></pre>";
        $return = $this->CategoryModel->findAll(["*"] , ["ID" => "1"], "ID");
        // print_r($return);
        // $return = json_decode($return, true);
        $data = $this->CategoryModel->getdata();
        $this->view("layouts/client_layout", [
            "page" => "home/index",
            "title" => "Trang chủ",
            "data" => $data
        ]);
    }
}
?>