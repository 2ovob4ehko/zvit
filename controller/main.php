<?
if(!isset($_COOKIE['login'])){
  if(!isset($_GET['view']) && !isset($_GET['action'])){
    header('Location: '.base_url().'?view=author');
  }else if(isset($_GET['view'])){
    if($_GET['view']=='author'){
      include ('views/author_view.php');
    }else
    if($_GET['view']=='regist'){
      include ('views/regist_view.php');
    }
  }else if(isset($_GET['action'])){
    if($_GET['action']=='author'){
      $valid=$users->checkPass(strip_tags($_POST['login']),strip_tags($_POST['pass']));
      if($valid){
        setcookie('login',strip_tags($_POST['login']),time()+3600*8);
        setcookie('id',$valid,time()+3600*8);
        header('Location: '.base_url());
      }else{
        header('Location: '.base_url().'?view=author&error=Не вірно введений логін чи пароль');
      }
    }else if($_GET['action']=='regist'){
      $result=$users->getByLogin(strip_tags($_POST['login']));
      if($result->num_rows==0){
        $users->create(strip_tags($_POST['login']),strip_tags($_POST['pass']));
        header('Location: '.base_url().'?view=author');
      }else{
        header('Location: '.base_url().'?view=regist&error=Такий логін вже використовується');
      }
    }
  }
}else{
  if(isset($_GET['action'])){
    if($_GET['action']=='delcookie'){
      setcookie('login',"",time()-3600);
      setcookie('id',"",time()-3600);
      setcookie('firm',"",time()-3600);
      header('Location: '.base_url());
    }
  }else if(isset($_GET['render'])){
    include ('controller/zvit.php');
  }else{
    include ('controller/workspace.php');
  }
}


?>
