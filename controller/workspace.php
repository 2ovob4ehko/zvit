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
  }else if($_GET['tab']=='createdoc'){
    //Отримати дані від форми створення документу (період, стан, головний документ, додатки)
    $main_blank=$_POST['main_blank'];
    //$sub_blank=$_POST['sub_blank'];
    $json=new stdClass();
    $json->title=array();
    $json->year=$_POST['year'];
    $json->period=$_POST['period'];
    $json->stan=$_POST['stan'];
    $json->number=$_POST['number'];
    array_push($json->title,$blanks->getById($main_blank)->fetch_object()->code);

    echo json_encode($json);
  }else if($_GET['tab']=='blank'){
    $data=array(
      'myfirm' => $firms->getByIdF($_COOKIE['firm']),
      'year'   => $_GET['year'],
      'period' => $_GET['period'],
      'stan'   => $_GET['stan'],
      'number' => $_GET['number']
    );
    $json=new stdClass();
    $json->title=$_GET['title'];
    $json->data=requireToVar('blank_view/'.$_GET['title'].'.php',$data);
    echo json_encode($json);
  }else if($_GET['tab']=='changefirm'){
    setcookie('firm',strip_tags($_POST['firm']),time()+3600*8);
    header('Location: '.base_url());
  }else if($_GET['tab']=='filelist'){
    //Назва: Список файлів
    //Відобразити список раніше створених документів
    //Створені документи записуються в таблицю Файлів: код бланку, період, стан, рік, дата та час створення, підприємство, реальна назва файлу. Є кнопка Оновити список файлів, яка дивиться в папку файлів і шукає файли підприємства по коду. Порівнює їх по іншим даним з тими, що вже є в таблиці. Якщо файл співпадає - то дані таблиці не змінюються, якщо такого файла не було - від додається в таблицю, якщо файла немає, а в таблиці він є - то з таблиці запис видаляється.
    //Зі списком файлів можна робити маніпуляції: Видаляти, при цьому файл звіту також видаляється; Копіювати, при цьому потрібно вибрати в який період він копіюється; Відкрити, при цьому звіт відкривається повністю з додатками. Експортувати, команда виконує дію подібну до "Зберегти як..."
    $firm=$firms->getById($_COOKIE['firm']);
    $f=$firm->fetch_object();

    $files=glob("xml/*".$f->tin."*.xml");

    $data=array(
      'list' => $files,
      'blanks' => $blanks
    );
    $json=new stdClass();
    $json->title="Список файлів";
    $json->data=requireToVar('views/filelist_view.php',$data);
    echo json_encode($json);
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
