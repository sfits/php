<?phpinclude_once('startup.php');include_once('model.php');// Установка параметров, подключение к БД, запуск сессии.startup();$title = 'Новая статья';// Обработка отправки формы.if (isset($_POST)){	if (articles_new($_POST['title'], $_POST['content']))	{		header('Location: editor.php');		die();	}		$art['title'] = $_POST['title'];	$art['content'] = $_POST['content'];}else{	$art['title'] = '';	$art['content'] = '';}// Внутренний шаблон.$content = view_include('theme/v_new.php', $art);include ('view.php');