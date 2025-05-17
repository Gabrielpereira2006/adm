<?php

namespace App\adms\Controllers\users;

use App\adms\Views\Services\LoadViewService;

/**
 * Controller cadastrar usuário
 *
 * @author Cesar <cesar@celke.com.br>
 */
class CreateUser
{
    /** @var array|null $dataForm Recebe os dados do formulário */
    private array|string|null $dataForm;

    /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data = null;
    
    public function index(): void
    {

        // Receber os dados do formulário
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        var_dump($this->dataForm);
        
        // Carregar a VIEW
        $loadView = new LoadViewService("adms/Views/users/create", $this->data);
        $loadView->loadView();

    }
}
