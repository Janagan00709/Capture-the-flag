<pre>
<?php 
include_once 'Register_database.php';

print_r($_POST);

if (empty($_POST['team_name']))  {
    header("Location: registration.html");
    
    if (empty($_POST['team_id']))  {
        header("Location:  registration.html");
        
        if (empty($_POST['member1']))  {
            header("Location:  registration.html");
            
            if (empty($_POST['Department']))  {
                header("Location:  registration.html");
                
                if (empty($_POST['year']))  {
                    header("Location:  registration.html");
                    
                    if (empty($_POST['team_name']))  {
                            header("Location:  registration.html");
}

}
}
}
    }
}
    

Databases::make_conn();

Databases::insert_data($_POST['team_name'],$_POST['team_id'],$_POST['member1'],$_POST['member2'],$_POST['member3'],$_POST['Department'],$_POST['Year'],$_POST['phone']);


$cookie_name = "team_id";
$cookie_value = $_POST['team_id'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


header("Location: login.html");

?>
</pre>