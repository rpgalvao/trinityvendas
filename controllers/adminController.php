<?php

class adminController extends Controller{

    public function index(){
        $dados = array();
        $cl = new Clientes();
        $vends = new Usuarios();
        $dados['clientes'] = $cl->getAllClients();
        $dados['vends'] = $vends->getVendedores();
        if(isset($_POST['acao'])){
            $vends = addslashes($_POST['vendedor']);
            $dados['clientes'] = $cl->getAllClients($vends);
        }

        $this->loadTemplate("admin", $dados);
    }

    public function cliente($id){
        $dados = array();
        $cl = new Clientes();
        $dados['info_cliente'] = $cl->getClienteById($id);
        $this->loadTemplate('admin_cliente', $dados);
    }
}

?>