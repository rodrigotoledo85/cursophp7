<?php

require_once("config.php");

/*busca usuario pelo id 
$usuario = new Usuario();
$usuario->loadbyId(3);
echo $usuario;
*/

/*busca uma lista de usuario */
$lista = Usuario::getList();
echo json_encode($lista);


/*busca uma lista de usuarios por parte da descricao do login 
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*verificar se login e senha estao corretos e mostrar usuario 
$usuario = new Usuario();
$usuario->login("Rodrigo", "php7isthebest");
echo ($usuario);
*/

/*inserir usuario com stored procedure 
//com o metodo construtor
$usuario = new Usuario("master", "123");
//sem o metodo construtor
//$usuario->setDeslogin("admin");
//$usuario->setDessenha("useradmin");

$usuario->insert();
echo $usuario;
*/

/*atualizar dados do usuario por id 
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->update("samuel", "negonego");
echo $usuario;
*/

/*deletar usuario 
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;
*/

?>