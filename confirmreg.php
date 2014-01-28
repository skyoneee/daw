<?PHP
require_once("./servidor/loginRegister/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        echo "ya esta confirmado";
   }
}

?>
