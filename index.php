<?PHP
ob_start();
$db = mysql_connect('localhost','simple','simple');
mysql_select_db('simple',$db);
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
$GLOBALS[LOCALE][RU][PHONE] = 'Номер телефона:';
$GLOBALS[LOCALE][EN][PHONE] = 'Phone number:';
$GLOBALS[LOCALE][RU][DESCRIPTION] = 'Немного о себе:';
$GLOBALS[LOCALE][EN][DESCRIPTION] = 'A little about yourself:';
$GLOBALS[LOCALE][RU][NEW_PASSWORD] = 'Новый пароль:';
$GLOBALS[LOCALE][EN][NEW_PASSWORD] = 'New password:';
$GLOBALS[LOCALE][RU][PASSWORD_VERIFY] = 'Повторите пароль:';
$GLOBALS[LOCALE][EN][PASSWORD_VERIFY] = 'Verify password:';
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
$GLOBALS[LANG] = strtoupper(substr($_SERVER[HTTP_ACCEPT_LANGUAGE],0,2)) == 'EN'?'EN':'RU';
if(strlen($_GET['lang'])==2&&($_GET['lang'] == 'EN'||$_GET['lang'] == 'RU'))
{
  setcookie('lang',$_GET['lang']);
  $GLOBALS[LANG] = $_GET['lang'];
}
elseif(strlen($_COOKIE['lang'])==2&&($_COOKIE['lang'] == 'EN'||$_COOKIE['lang'] == 'RU'))
{
  $GLOBALS[LANG] = $_COOKIE['lang'];
}
function htmlPage($title,$body)
{
  $css.='body{background-color: #929292;}';
  $css.=' #body{display: inline-block;background-color: #DBDBDB;}';
  $css.=' #container{text-align: center;width: 100%;height: 100%;}';
  $css.=' textarea{width: 100%;resize: vertical;}';
  $css.=' input[type="submit"]{width: 100%;}';
  $css.=' #tab a{display: table-cell;width: 50%;text-decoration: none;color: #FFF;color: #000;}';
  $css.=' #tab .shadow{background-color: #929292;color: #FFF;}';
  $css.=' #tab{width: 100%;display: table;}';
  $css.=' #tab div{display: table-row;}';
  return '<HTML><HEAD><TITLE>'.htmlspecialchars($title).'</TITLE><STYLE>'.$css.'</STYLE></HEAD><BODY><TABLE id="container"border="0"><TR><TD><DIV id="body">'.$body.'</DIV></TD></TR></TABLE></BODY></HTML>';
}
function form($title,$action,$body,$submit)
{
  $action = $action=='signup'?'signup':'login';
  $title = strlen($title)>0?('<TR><TD colspan="2">'.htmlspecialchars($title).'</TD></TR>'):'';
  return '<FORM action="index.php" method="post"><TABLE>'.$title.$body.'<TR><TD colspan="2"><INPUT type="submit" value="'.htmlspecialchars($submit).'"></TD></TR></TABLE></FORM>';
}
function signUpForm()
{
  $body = '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][NAME].'</TD><TD><INPUT type="text" name="name"></TD></TR>';
  for($i = 1;$i <= 31;$i++)
  {
    $day.='<OPTION value="'.$i.'">'.$i.'</OPTION>';
  }
  for($i = 1;$i <= 12;$i++)
  {
    $month.='<OPTION value="'.$i.'">'.$GLOBALS[LOCALE][$GLOBALS[LANG]][MONTH][$i].'</OPTION>';
  }
  for($i = date('Y');$i >= date('Y')-150;$i--)
  {
    $year.='<OPTION value="'.$i.'">'.$i.'</OPTION>';
  }
  $body.='<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][DATE_BORN].'</TD><TD><SELECT name="day">'.$day.'</SELECT><SELECT name="month">'.$month.'</SELECT><SELECT name="year">'.$year.'</SELECT></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][LOCATION].'</TD><TD><INPUT type="text" name="location"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][STATUS].'</TD><TD><INPUT type="text" name="status"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][EDUCATION].'</TD><TD><INPUT type="text" name="education"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][EXPIRIENCE].'</TD><TD><INPUT type="text" name="expirience"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][EMAIL].'</TD><TD><INPUT type="text" name="email"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][PHONE].'</TD><TD><INPUT type="text" name=phone"></TD></TR>';
  $body.= '<TR><TD colspan="2">'.$GLOBALS[LOCALE][$GLOBALS[LANG]][DESCRIPTION].'<BR><TEXTAREA name="location" rows="8"></TEXTAREA></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][NEW_PASSWORD].'</TD><TD><INPUT type="password" name="password"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][PASSWORD_VERIFY].'</TD><TD><INPUT type="password" name="password_verify"></TD></TR>';
  return form($GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP],'signup',$body,$GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP_BUTTON]);
}
function logInForm()
{
  $body = '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][EMAIL].'</TD><TD><INPUT type="text" name="email"></TD></TR>';
  $body.= '<TR><TD>'.$GLOBALS[LOCALE][$GLOBALS[LANG]][PASSWORD].'</TD><TD><INPUT type="password" name="password"></TD></TR>';
  return form(null,'login',$body,$GLOBALS[LOCALE][$GLOBALS[LANG]][LOGIN_BUTTON]);
}
function tabForm()
{
  $signup = $_GET['view']=='signup'?'active':'shadow';
  $login = $_GET['view']!='signup'?'active':'shadow';
  return '<DIV id="tab" border=1><DIV><A class="'.$signup.'" href="index.php?view=signup">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP_TITLE]).'</A><A class="'.$login.'" href="index.php?view=login">'.htmlspecialchars($GLOBALS[LOCALE][$GLOBALS[LANG]][LOGIN]).'</A></DIV></DIV>';
}
$_GET['view']=='signup'?print(htmlPage($GLOBALS[LOCALE][$GLOBALS[LANG]][SIGNUP_TITLE],tabForm().signUpForm())):print(htmlPage($GLOBALS[LOCALE][$GLOBALS[LANG]][LOGIN],tabForm().logInForm()));
ob_flush();
?>