<?php
namespace app\models;

Class ValidarRegistro extends CFormModel{
    
    public $nombre;
    public $email;
    public $password;
    public $repetir_password;
    
    public function rules(){
        
        
        return array(
            array(
                'nombre,email,password,repetir_password',
                'required',
                'mesage' => 'Este campo es requerido',
            ),
        );
    }
}
?>