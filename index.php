<?phpinclude_once('startup.php');include_once('model.php');// Установка параметров, подключение к БД, запуск сессии.startup();$title = 'Главная';// Извлечение статей.$articles = articles_all();// создание introforeach ($articles as $key => $article)	$articles[$key]['intro'] = articles_intro($article);// Внутренний шаблон.$content = view_include('theme/v_index.php', array('articles' => $articles));include ('view.php');