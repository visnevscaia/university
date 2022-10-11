<?php
$errors                 = array();
$data                   = array();
 
if (empty($_POST['name']))
        $ errors ['name'] = 'Пожалуйста, введите имя учетной записи';
 
if (empty($_POST['passwd']))
                 $ errors ['passwd'] = 'Пожалуйста, введите ваш пароль';
 
// response if there are errors
if ( ! empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
} else {
        if ($_POST['name'] == "admin" && $_POST['passwd'] == "admin"){
                $data['success'] = true;
                $data['message'] = 'Success!';
        }else{
                $data['success'] = false;
                                 $ data ['errors'] = array ("login" => "Ошибка учетной записи или пароля");
        }
}
 
echo json_encode($data);



?>