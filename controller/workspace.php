<?
if(isset($_GET['tab'])){
  if($_GET['tab']=='settings'){
    $data=array(
      'myfirms' => $firms->getByUser($_COOKIE['id'])
    );
    $json=new stdClass();
    $json->title="Персональні параметри";
    $json->data=requireToVar('views/settings_view.php',$data);
    echo json_encode($json);
  }else if($_GET['tab']=='firmdata'){
    $data=array(
      'firm' => $firms->getById(strip_tags($_GET['id'])),
      'faceList' => $faces->getAll(),
      'taxList' => $taxes->getAll(),
      'pensList' => $pensions->getAll(),
      'kvedList' => $kveds->getAll()
    );
    echo requireToVar('views/firmdata_view.php',$data);
  }else if($_GET['tab']=='newfirm'){
    $firms->create($_COOKIE['id'],1,741,693,'1111111111','ФОП Петренко Петро Петрович','Черкаська','Черкаси','вул. Гагаріна 1, кв. 7',464,'Петренко Петро Петрович','1111111111');
  }else if($_GET['tab']=='savefirm'){
    $data=array(
      'id' => $_POST['id'],
    	'face' => $_POST['face'],
    	'tax' => $_POST['tax'],
    	'pension' => $_POST['pension'],
    	'tin' => $_POST['tin'],
    	'tinpdv' => $_POST['tinpdv'],
    	'name' => $_POST['name'],
    	'zipcode' => $_POST['zipcode'],
    	'state' => $_POST['state'],
    	'city' => $_POST['city'],
    	'address' => $_POST['address'],
    	'telcode' => $_POST['telcode'],
    	'tel' => $_POST['tel'],
    	'fax' => $_POST['fax'],
    	'email' => $_POST['email'],
    	'kved' => $_POST['kved'],
    	'bfio' => $_POST['bfio'],
    	'btin' => $_POST['btin'],
    	'cfio' => $_POST['cfio'],
    	'ctin' => $_POST['ctin']
    );
    $firms->update($data);
  }else if($_GET['tab']=='delfirm'){
    $firms->deleteById(strip_tags($_GET['id']));
  }else if($_GET['tab']=='selectfirm'){
    $myfirms=$firms->getByUser($_COOKIE['id']);
    echo '<option value=""></option>';
    if(!empty($_COOKIE['firm'])){
      $selectedFirm=$_COOKIE['firm'];
    }else{
      $selectedFirm='';
    }
    while($firm=$myfirms->fetch_object()){
      echo '<option value="'.$firm->id.'"';
      if($firm->id==$selectedFirm){echo 'selected';}
      echo '>'.$firm->name.' - '.$firm->tin.'</option>';
    }
  }else if($_GET['tab']=='create'){
    //Назва: Створити
    //відобразити форму створення нового документу
    //По аналогії з Sonata. З лівої сторони список категорій сортування (установи, спрямування збору). При натисненні робиться сортування бланків за категоріями і відображається в Правій частині. В правій частині вибирається період та тип документу. Нижче в списку "Крапок і галочок" відмічається тільки один головний документ, після чого відображається список його додатків і можна вибрати їх. При натисненні створити - повинен запуститися JavaScript, який створить вкладки з вибраним звітом та його додатками.
    $firm=$firms->getById($_COOKIE['firm']);
    $f=$firm->fetch_object();
    $data=array(
      'categs' => $categories->tree(0),
      'blank' => $blanks->tree(0,0,$f->face)
    );
    $json=new stdClass();
    $json->title="Створення документу";
    $json->data=requireToVar('views/create_view.php',$data);
    echo json_encode($json);
  }else if($_GET['tab']=='zvitlist'){
    $firm=$firms->getById($_COOKIE['firm']);
    $f=$firm->fetch_object();
    $data=array(
      'blank' => $blanks->tree(0,strip_tags($_GET['id']),$f->face)
    );
    echo requireToVar('views/zvitlist_view.php',$data);
  }else if($_GET['tab']=='changefirm'){
    setcookie('firm',strip_tags($_POST['firm']),time()+3600*8);
    header('Location: '.base_url());
  }
}else{
  if(!empty($_COOKIE['firm'])){
    $myfirm=$firms->getById($_COOKIE['firm']);
    if($myfirm->num_rows>0){
      $f=$myfirm->fetch_object();
    }
  }
  $myfirms=$firms->getByUser($_COOKIE['id']);
  include ('views/workspace_view.php');
}

function requireToVar($file,$data=array()){
    extract($data);
    ob_start();
    require($file);
    return ob_get_clean();
}

?>
