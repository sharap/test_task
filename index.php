<?PHP
ob_start();
srand(time()+rand(-1000000,1000000));
$db = mysql_connect('localhost','simple','simple');
mysql_select_db('simple',$db);
$GLOBALS[STIME] = 3600+time();
$GLOBALS[LOCALE][EN][SIGNUP_TITLE] = 'Registration';
$GLOBALS[LOCALE][RU][SIGNUP_TITLE] = 'Регистрация';
$GLOBALS[LOCALE][RU][SIGNUP_BUTTON] = 'Зарегистрироваться';
$GLOBALS[LOCALE][EN][SIGNUP_BUTTON] = 'Sign up';
$GLOBALS[LOCALE][EN][SIGNUP] = 'Please input your data for next step registration:';
$GLOBALS[LOCALE][RU][SIGNUP] = 'Пожалуйста, введите свои регистрационные данные:';
$GLOBALS[LOCALE][RU][NAME] = 'ФИО полностью:';
$GLOBALS[LOCALE][EN][NAME] = 'Full name:';
$GLOBALS[LOCALE][RU][DATE_BORN] = 'Дата рождения:';
$GLOBALS[LOCALE][EN][DATE_BORN] = 'Date born:';
$GLOBALS[LOCALE][RU][LOCATION] = 'Город:';
$GLOBALS[LOCALE][EN][LOCATION] = 'Town:';
$GLOBALS[LOCALE][RU][STATUS] = 'Семейное положение:';
$GLOBALS[LOCALE][EN][STATUS] = 'Marital status:';
$GLOBALS[LOCALE][RU][EDUCATION] = 'Образование:';
$GLOBALS[LOCALE][EN][EDUCATION] = 'Education:';
$GLOBALS[LOCALE][RU][EXPIRIENCE] = 'Опыт работы:';
$GLOBALS[LOCALE][EN][EXPIRIENCE] = 'Work experience:';
$GLOBALS[LOCALE][RU][EMAIL] = 'Адрес электронной почты (E-mail):';
$GLOBALS[LOCALE][EN][EMAIL] = 'E-mail:';
$GLOBALS[LOCALE][RU][EXIST_EMAIL] = 'Эта электронная почта уже используется';
$GLOBALS[LOCALE][EN][EXIST_EMAIL] = 'This email is already taken';
$GLOBALS[LOCALE][RU][PHONE] = 'Номер телефона:';
$GLOBALS[LOCALE][EN][PHONE] = 'Phone number:';
$GLOBALS[LOCALE][RU][DESCRIPTION] = 'Немного о себе:';
$GLOBALS[LOCALE][EN][DESCRIPTION] = 'A little about yourself:';
$GLOBALS[LOCALE][RU][NEW_PASSWORD] = 'Новый пароль:';
$GLOBALS[LOCALE][EN][NEW_PASSWORD] = 'New password:';
$GLOBALS[LOCALE][RU][VERIFY_PASSWORD] = 'Повторите пароль:';
$GLOBALS[LOCALE][EN][VERIFY_PASSWORD] = 'Verify password:';
$GLOBALS[LOCALE][RU][PASSWORD] = 'Пароль:';
$GLOBALS[LOCALE][EN][PASSWORD] = 'Password:';
$GLOBALS[LOCALE][RU][MONTH][1] = 'Январь';
$GLOBALS[LOCALE][EN][MONTH][1] = 'January';
$GLOBALS[LOCALE][RU][MONTH][2] = 'Февраль';
$GLOBALS[LOCALE][EN][MONTH][2] = 'February';
$GLOBALS[LOCALE][RU][MONTH][3] = 'Март';
$GLOBALS[LOCALE][EN][MONTH][3] = 'March';
$GLOBALS[LOCALE][RU][MONTH][4] = 'Апрель';
$GLOBALS[LOCALE][EN][MONTH][4] = 'April';
$GLOBALS[LOCALE][RU][MONTH][5] = 'Май';
$GLOBALS[LOCALE][EN][MONTH][5] = 'May';
$GLOBALS[LOCALE][RU][MONTH][6] = 'Июнь';
$GLOBALS[LOCALE][EN][MONTH][6] = 'June';
$GLOBALS[LOCALE][RU][MONTH][7] = 'Июль';
$GLOBALS[LOCALE][EN][MONTH][7] = 'July';
$GLOBALS[LOCALE][RU][MONTH][8] = 'Август';
$GLOBALS[LOCALE][EN][MONTH][8] = 'August';
$GLOBALS[LOCALE][RU][MONTH][9] = 'Сентябрь';
$GLOBALS[LOCALE][EN][MONTH][9] = 'September';
$GLOBALS[LOCALE][RU][MONTH][10] = 'Октябрь';
$GLOBALS[LOCALE][EN][MONTH][10] = 'October';
$GLOBALS[LOCALE][RU][MONTH][11] = 'Ноябрь';
$GLOBALS[LOCALE][EN][MONTH][11] = 'November';
$GLOBALS[LOCALE][RU][MONTH][12] = 'Декабрь';
$GLOBALS[LOCALE][EN][MONTH][12] = 'December';
$GLOBALS[LOCALE][RU][LOGIN] = 'Вход';
$GLOBALS[LOCALE][EN][LOGIN] = 'Authorization';
$GLOBALS[LOCALE][RU][LOGIN_BUTTON] = 'Войти';
$GLOBALS[LOCALE][EN][LOGIN_BUTTON] = 'Log in';
$GLOBALS[LOCALE][RU][LOGOUT] = 'Выйти';
$GLOBALS[LOCALE][EN][LOGOUT] = 'Log out';
$GLOBALS[LOCALE][RU][SERVER_ERROR] = "Ошибка!\n Что-то пошло не так.\n Повторите попытку позже.\n Приносим свои извинения\n за оказанные неудобства.";
$GLOBALS[LOCALE][EN][SERVER_ERROR] = "Error!\n Something went wrong.\n Repeat attempt later.\n We apologize for any\n rendered inconvenience.";
$GLOBALS[LOCALE][RU][ERROR] = 'Ошибка';
$GLOBALS[LOCALE][EN][ERROR] = 'Error';
$GLOBALS[LOCALE][RU][ANKETA] = 'Анкета';
$GLOBALS[LOCALE][EN][ANKETA] = 'Your personal data';
$GLOBALS[LANG] = strtoupper(substr($_SERVER[HTTP_ACCEPT_LANGUAGE],0,2)) == 'EN'?'EN':'RU';
if($_GET['lang'] == 'EN'||$_GET['lang'] == 'RU')
{
  setcookie('lang',$_GET['lang'],$GLOBALS[STIME]);
  $GLOBALS[LANG] = $_GET['lang'];
}
elseif($_COOKIE['lang'] == 'EN'||$_COOKIE['lang'] == 'RU')
{
  $GLOBALS[LANG] = $_COOKIE['lang'];
  setcookie('lang',$_COOKIE['lang'],$GLOBALS[STIME]);
}
function htmlPage($title,$body)
{
  $css.='body{background-color: #929292;}';
  $css.=' #body{display: inline-block;background-color: #DBDBDB;border: 1px solid #DBDBDB;max-width: 90%;}';
  $css.=' #container{text-align: center;width: 100%;height: 100%;}';
  $css.=' textarea{width: 100%;resize: vertical;}';
  $css.=' .error{background-color: #FF6969;}';
  $css.=' .error input{background-color: #FF6969;}';
  $css.=' input[type="submit"]{width: 100%;}';
  $css.=' #tab a{display: table-cell;width: 50%;text-decoration: none;color: #000;}';
  $css.=' #tab .shadow{background-color: #929292;color: #FFF;}';
  $css.=' #tab{width: 100%;display: table;}';
  $css.=' #tab div{display: table-row;}';
  $css.=' #exit{display: block;text-decoration: none;background-color: #929292;color: #FFF;}';
  $css.=' .right{width: 50%;}';
  return '<HTML><HEAD><TITLE>'.htmlspecialchars($title).'</TITLE><STYLE>'.$css.'</STYLE></HEAD><BODY><A href="index.php?'.(($_GET['view']=='signup'||$_GET['view']=='login')?'view='.$_GET['view'].'&':'').'lang=RU">Русский</A>&nbsp;<A href="index.php?'.(($_GET['view']=='signup'||$_GET['view']=='login')?'view='.$_GET['view'].'&':'').'lang=EN">English</A><TABLE id="container"border="0"><TR><TD><DIV id="body">'.$body.'</DIV></TD></TR></TABLE></BODY></HTML>';
}
function form($title,$action,$body,$submit)
{
  $action = $action=='signup'?'signup':'login';
  $title = strlen($title)>0?('<TR><TD colspan="2">'.htmlspecialchars($title).'</TD></TR>'):'';
  return '<FORM action="index.php" method="post"><TABLE>'.$title.$body.'<TR><TD colspan="2"><INPUT type="hidden" name="action" value="'.$action.'"><INPUT type="submit" value="'.htmlspecialchars($submit).'"></TD></TR></TABLE></FORM>';
}
function field($name,$password=false)
{
  if($_COOKIE[$name]=='~error') setcookie($name,null,0);
  return '<TR'.($_COOKIE[$name]=='~error'?' class="error"':'').'><TD>'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][strtoupper($name)]).'</TD><TD><INPUT type="'.($password?'password':'text').'" name="'.htmlspecialchars($name).'"'.(($_COOKIE[$name]!='~error'&&strlen($_COOKIE[$name])>0)?' value="'.htmlspecialchars($_COOKIE[$name]).'"':'').'></TD></TR>';
}
function signUpForm()
{
  $body = field('name');
  for($i = 1;$i <= 31;$i++)
  {
    if($_COOKIE[date]!='~error'&&intval($_COOKIE[day])==$i)
    {
      $day.='<OPTION selected value="'.$i.'">'.$i.'</OPTION>';
    } else
    {
      $day.='<OPTION value="'.$i.'">'.$i.'</OPTION>';
    }
  }
  if($_COOKIE[date]=='~error')
  {
    setcookie('day',null,0);
    setcookie('month',null,0);
    setcookie('year',null,0);
  }
  for($i = 1;$i <= 12;$i++)
  {
    
    if($_COOKIE[date]!='~error'&&intval($_COOKIE[month])==$i)
    {
      $month.='<OPTION selected value="'.$i.'">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][MONTH][$i]).'</OPTION>';
      setcookie('month',null,0);
    } else
    {
      $month.='<OPTION value="'.$i.'">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][MONTH][$i]).'</OPTION>';
    }
  }
  for($i = date('Y');$i >= date('Y')-150;$i--)
  {
    if($_COOKIE[date]!='~error'&&intval($_COOKIE[year])==$i)
    {
      $year.='<OPTION selected value="'.$i.'">'.$i.'</OPTION>';
      setcookie('year',null,0);
    } else
    {
      $year.='<OPTION value="'.$i.'">'.$i.'</OPTION>';
    }
  }
  $body.='<TR'.($_COOKIE[date]=='~error'?' class="error"':'').'><TD>'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][DATE_BORN]).'</TD><TD><SELECT name="day">'.$day.'</SELECT><SELECT name="month">'.$month.'</SELECT><SELECT name="year">'.$year.'</SELECT></TD></TR>';
  $body.= field('location');
  $body.= field('status');
  $body.= field('education');
  $body.= field('expirience');
  $body.= field('email');
  $body.= field('phone');
  $body.= '<TR><TD colspan="2">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][DESCRIPTION]).'<BR><TEXTAREA name="description" rows="8"></TEXTAREA></TD></TR>';
  $body.= field('new_password',true);
  $body.= field('verify_password',true);
  return form($GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP],'signup',$body,$GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP_BUTTON]);
}
function logInForm()
{
  $body = field('email');
  $body.= field('password',true);
  return form(null,'login',$body,$GLOBALS[LOCALE][$GLOBALS[LANG]][LOGIN_BUTTON]);
}
function tabForm()
{
  $signup = $_GET['view']=='signup'?'active':'shadow';
  $login = $_GET['view']!='signup'?'active':'shadow';
  return '<DIV id="tab" border=1><DIV><A class="'.$signup.'" href="index.php?view=signup">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP_TITLE]).'</A><A class="'.$login.'" href="index.php?view=login">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][LOGIN]).'</A></DIV></DIV>';
}
function errorServer()
{
  return tabForm().str_replace("\n",'<br>',htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][SERVER_ERROR]));
}
function genAid()
{
  return substr(md5(rand()),0,rand(10,32)).substr(dechex(rand(0,100000000)),0,rand(0,5)).substr(md5(time()),0,rand(10,32));
}
function anketa($name,$date_born,$location,$status,$education,$expirience,$phone,$email,$description,$lang)
{
  function show($name,$value,$lang) {
    return strlen($value)>0?('<TR><TD class="left">'.htmlspecialchars($GLOBALS[LOCALE][$lang][strtoupper($name)]).'</TD><TD class="right">'.htmlspecialchars($value).'</TD></TR>'):'';
  }
  $body = '<TABLE>';
  $body.=show('name',$name,$lang);
  $body.=show('date_born',$date_born,$lang);
  $body.=show('status',$status,$lang);
  $body.=show('education',$education,$lang);
  $body.=show('expirience',$expirience,$lang);
  $body.=show('phone',$phone,$lang);
  $body.=show('email',$email,$lang);
  $body.=strlen($description)>0?('<TR><TD class="left" colspan="2">'.htmlspecialchars($GLOBALS[LOCALE][$lang][DESCRIPTION]).'<BR>'.htmlspecialchars($description).'</TD></TR>'):'';
  $body.='<TR><TD colspan="2"><A id="exit" href="index.php?action=exit">'.htmlspecialchars($GLOBALS[LOCALE][$lang][LOGOUT]).'</A></TD></TR></TABLE>';
  return $body;
}
function signUp($mysql,$name,$day,$month,$year,$location,$status,$education,$expirience,$phone,$email,$description,$new_password,$verify_password,$lang)
{
  if($mysql!=false)
  {
    $name = substr($name,0,100);
    $day = intval($day);
    $month = intval($month);
    $year = intval($year);
    $location = substr($location,0,30);
    $status = substr($status,0,30);
    $education = substr($education,0,30);
    $expirience = substr($expirience,0,30);
    $phone = substr($phone,0,13);
    $email = substr($email,0,128);
    $description = substr($description,0,4096);
    $new_password = substr($new_password,0,50);
    $verify_password = substr($verify_password,0,50);
    $lang = $lang=='RU'?'RU':'EN';
    $verify = true;
    if(!eregi($lang=='RU'?'^[абвгдеёжзийклмнопрстуфхцчшщэюя]{2,15}[\\-]?[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]{2,15}\\ [абвгдеёжзийклмнопрстуфхцчшщэюя]{2,15}[\\-]?[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]{2,15}(\\ [абвгдеёжзийклмнопрстуфхцчшщъыьэюя]{2,15}[\\-]?[абвгдеёжзийклмнопрстуфхцчшщэюя]{2,15})?$':'^[a-z]{1,15}[`\'\\-]?[a-z]{3,15}\\ [a-z]{1,15}[`\'\\-]?[a-z]{3,15}(\\ [a-z]{1,15}[`\'\\-]?[a-z]{3,15})?$',$name))
    {
      $verify = false;
      setcookie('name','~error');
    } else
    {
      setcookie('name',$name);
    }
    if(!checkdate($month,$day,$year))
    {
      $verify = false;
      setcookie('date','~error');
    } else
    {
      setcookie('date',null,0);
      setcookie('day',$day);
      setcookie('month',$month);
      setcookie('year',$year);
    }
    if(!eregi($lang=='RU'?'^[абвгдеёжзийклмнопрстуфхцчшщэюя]{2,10}[\\-]?[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]{2,10}[\\-]?[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]{2,10}$':'^[a-z]{2,10}[\\-]?[a-z]{2,10}([\\-]?[a-z]{2,10})?$',$location)||strlen($location)==0)
    {
      $verify = false;
      setcookie('location','~error');
    } else
    {
      setcookie('location',$location);
    }
    if(!eregi('^[\+]?[0-9]{4,13}$',$phone)&&strlen()!=0)
    {
      $verify = false;
      setcookie('phone','~error');
    } else
    {
      setcookie('phone',$phone);
    }
    if(!eregi('^[a-z_]+[a-z0-9\-_\.]{1,62}[@]+[a-z_]+[a-z0-9\-_\.]{1,48}[\.]+[a-z]{2,16}$',$email))
    {
      $verify = false;
      setcookie('email','~error');
    } else
    {
      $mail = mysql_query('select email from users where email="'.mysql_real_escape_string($email).'"',$mysql);
      if(mysql_num_rows($mail)>0)
      {
        $verify = false;
        $setcookie('email',$GLOBALS[LOCALE][$lang][EXIST_EMAIL]);
      } else
      {
        setcookie('email',$email);
      }
    }
    if(strlen($new_password)==0)
    {
      $verify = false;
      setcookie('new_password','~error');
    } else
    {
      setcookie('new_password',$new_password);
    }
    if($new_password!=$verify_password)
    {
      $verify = false;
      setcookie('verify_password',$verify_password);
    } else
    {
      setcookie('verify_password',$verify_password);
    }
    if($verify)
    {
      setcookie('name',null,0);
      setcookie('email',null,0);
      setcookie('day',null,0);
      setcookie('month',null,0);
      setcookie('year',null,0);
      setcookie('date',null,0);
      setcookie('status',null,0);
      setcookie('description',null,0);
      setcookie('education',null,0);
      setcookie('new_password',null,0);
      setcookie('verify_password',null,0);
      setcookie('expirience',null,0);
      setcookie('phone',null,0);
      $aid = genAid();
      mysql_query('insert into users(name,date_born,location,status,education,expirience,phone,email,description,password,aid,errorauth,last_time,time_signup,lang) values("'.mysql_real_escape_string($name).'","'.mysql_real_escape_string($year.'-'.$month.'-'.$day).'","'.mysql_real_escape_string($location).'","'.mysql_real_escape_string($status).'","'.mysql_real_escape_string($education).'","'.mysql_real_escape_string($expirience).'","'.mysql_real_escape_string($phone).'","'.mysql_real_escape_string($email).'","'.mysql_real_escape_string($description).'","'.md5($new_password).'","'.$aid.'",0,'.time().','.time().',"'.mysql_real_escape_string($lang).'")',$mysql);
      $uid = mysql_result(mysql_query('select uid from users where email="'.mysql_real_escape_string($email).'"'),0);
      setcookie('uid','id'.$uid,$GLOBALS[STIME]);
      setcookie('aid',$aid,$GLOBALS[STIME]);
    }
    return $verify;
  } else
  {
    return false;
  }
}
function logIn($mysql,$email,$password)
{
  $email = substr($email,0,128);
  $password = substr($password,0,50);
  $verify = true;
  if(!eregi('^[a-z_]+[a-z0-9\-_\.]{1,62}[@]+[a-z_]+[a-z0-9\-_\.]{1,48}[\.]+[a-z]{2,16}$',$email))
  {
    $verify = false;
    setcookie('email','~error');
  } else
  {
    setcookie('email',$email);
  }
  if(strlen($password)==0)
  {
    $verify = false;
    setcookie('password','~error');
  } else
  {
    setcookie('password',$password);
  }
  if($verify)
  {
    $profile = mysql_query('select uid from users where email="'.mysql_real_escape_string($email).'" and password="'.md5($password).'"',$mysql);
    if(mysql_num_rows($profile)==1)
    {
      setcookie('password',null,0);
      setcookie('email',null,0);
      $profile = mysql_fetch_assoc($profile);
      $aid = genAid();
      mysql_query('update users set aid="'.mysql_real_escape_string($aid).'" where uid='.intval($profile[uid]));
      setcookie('uid','id'.$profile[uid],$GLOBALS[STIME]);
      setcookie('aid',$aid,$GLOBALS[STIME]);
    } else {
      $verify = false;
    }
  }
  return $verify;
}
if($db!=false)
{
  mysql_query('create table users(uid int auto_increment not null,name varchar(100) not null,date_born date not null,location varchar(30),status varchar(30),education varchar(30),expirience varchar(30),phone varchar(14),email varchar(100) not null,description text,password char(32),aid varchar(69) not null,errorauth int not null,last_time int unsigned not null,time_signup int unsigned not null,lang enum("RU","EN") not null,primary key(uid,email,aid))',$db);
  $view = false;
  if(intval(substr($_COOKIE['uid'],2))>0&&strlen(mysql_real_escape_string($_COOKIE['aid']))>=10)
  {
    mysql_query('update users set last_time='.time().(($_GET[lang]=='RU'||$_GET[lang]=='EN')?',lang="'.$_GET[lang].'"':'').' where uid='.intval(substr($_COOKIE['uid'],2)).' and aid="'.mysql_real_escape_string($_COOKIE['aid']).'"',$db);
    $profile = mysql_query('select * from users where uid='.intval(substr($_COOKIE['uid'],2)).' and aid="'.mysql_real_escape_string($_COOKIE['aid']).'"',$db);
    if(mysql_num_rows($profile)==1&&$_GET['action']!='exit')
    {
      $profile = mysql_fetch_assoc($profile);
      setcookie('uid','id'.$profile['uid'],$GLOBALS[STIME]);
      setcookie('aid',$profile['aid'],$GLOBALS[STIME]);
      $page = anketa($profile[name],$profile[date_born],$profile[location],$profile[status],$profile[education],$profile[expirience],$profile[phone],$profile[email],$profile[description],$profile[lang]);
      $title = $GLOBALS[LOCALE][$profile[lang]][ANKETA];
    } elseif(mysql_num_rows($profile)==1&&$_GET['action']=='exit')
    {
      mysql_query('update users set aid="" where uid='.intval(substr($_COOKIE['uid'],2)).' and aid="'.mysql_real_escape_string($_COOKIE['aid']).'"',$db);
      setcookie('uid',null,0);
      setcookie('aid',null,0);
      header('Location: index.php?view=login');
    } elseif($_POST[action]!='signup'&&$_POST[action]!='login')
    {
      $view = true;
    }
  } elseif($_POST[action]!='signup'&&$_POST[action]!='login')
  {
    $view = true;
  }
  if($view)
  {
    $page = tabForm().($_GET['view']=='signup'?signUpForm():logInForm());
    $title = $GLOBALS[LOCALE][$GLOBALS[LANG]][($_GET['view']=='signup'?'SIGNUP_TITLE':'LOGIN')];
  } else
  {
    switch($_POST['action'])
    {
      case('signup'):
        if(signUp($db,$_POST[name],$_POST[day],$_POST[month],$_POST[year],$_POST[location],$_POST[status],$_POST[education],$_POST[expirience],$_POST[phone],$_POST[email],$_POST[description],$_POST[new_password],$_POST[verify_password],$GLOBALS[LANG]))
        {
          header('Location: index.php');
        } else
        {
          header('Location: index.php?view=signup');
        }
        break;
      case('login'):
        if(logIn($db,$_POST[email],$_POST[password])) {
          header('Location: index.php');
        } else
        {
          header('Location: index.php?view=login');
        }
        break;
    }
  }
} else
{
  $page = errorServer();
}
print(htmlPage($title,$page));
print_r($_COOKIE);
ob_flush();
?>