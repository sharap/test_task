<?PHP
ob_start();
$GLOBALS[LOCALE][EN][SIGNUP_TITLE] = 'Registration';
$GLOBALS[LOCALE][RU][SIGNUP_TITLE] = 'Регистрация';
$GLOBALS[LOCALE][EN][SIGNUP] = 'Please input your data for next step registration:';
$GLOBALS[LOCALE][RU][SIGNUP] = 'Пожалуйста, введите свои регистрационные данные:';
$GLOBALS[LOCALE][RU][NAME] = 'ФИО:';
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
$GLOBALS[LOCALE][RU][PASSWORD] = 'Новый пароль:';
$GLOBALS[LOCALE][EN][PASSWORD] = 'New password:';
$GLOBALS[LOCALE][RU][PASSWORD_VERIFY] = 'Повторите пароль:';
$GLOBALS[LOCALE][EN][PASSWORD_VERIFY] = 'Verify password:';
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
  $css = '';
  return '<HTML><HEAD><TITLE>'.htmlspecialchars($title).'</TITLE><STYLE>'.$css.'</STYLE></HEAD><BODY>'.$body.'</BODY></HTML>';
}
ob_flush();
?>