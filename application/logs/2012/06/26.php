<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-26 08:58:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-26 08:58:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 09:15:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\test.php [ 12 ]
2012-06-26 09:15:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\test.php [ 12 ]
--
#0 C:\wamp\www\balance\application\classes\controller\test.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\bal...', 12, Array)
#1 [internal function]: Controller_Test->action_index()
#2 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 09:15:45 --- ERROR: View_Exception [ 0 ]: The requested view includes/header_view could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-26 09:15:45 --- STRACE: View_Exception [ 0 ]: The requested view includes/header_view could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\balance\system\classes\kohana\view.php(137): Kohana_View->set_filename('includes/header...')
#1 C:\wamp\www\balance\system\classes\kohana\view.php(30): Kohana_View->__construct('includes/header...', NULL)
#2 C:\wamp\www\balance\application\classes\controller\defaulttemplate.php(22): Kohana_View::factory('includes/header...')
#3 [internal function]: Controller_DefaultTemplate->before()
#4 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-26 09:16:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Test::getRanking() ~ APPPATH\classes\controller\defaulttemplate.php [ 29 ]
2012-06-26 09:16:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Test::getRanking() ~ APPPATH\classes\controller\defaulttemplate.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 09:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/google-code-prettify/prettify.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/google-code-prettify/prettify.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/application.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/application.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/google-code-prettify/prettify.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/google-code-prettify/prettify.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/application.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/application.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styles.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 09:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styles.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 09:26:05 --- ERROR: ErrorException [ 8 ]: Object of class Model_Type could not be converted to int ~ APPPATH\views\listado_view.php [ 20 ]
2012-06-26 09:26:05 --- STRACE: ErrorException [ 8 ]: Object of class Model_Type could not be converted to int ~ APPPATH\views\listado_view.php [ 20 ]
--
#0 C:\wamp\www\balance\application\views\listado_view.php(20): Kohana_Core::error_handler(8, 'Object of class...', 'C:\wamp\www\bal...', 20, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\classes\controller\test.php(12): Kohana_View->render()
#4 [internal function]: Controller_Test->action_index()
#5 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 09:40:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\listado_view.php [ 28 ]
2012-06-26 09:40:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\listado_view.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 10:03:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH\views\main_view.php [ 42 ]
2012-06-26 10:03:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH\views\main_view.php [ 42 ]
--
#0 C:\wamp\www\balance\application\views\main_view.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\bal...', 42, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\classes\controller\main.php(15): Kohana_View->render()
#4 [internal function]: Controller_Main->action_index()
#5 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 10:10:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\main_view.php [ 64 ]
2012-06-26 10:10:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\main_view.php [ 64 ]
--
#0 C:\wamp\www\balance\application\views\main_view.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\bal...', 64, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\classes\controller\main.php(16): Kohana_View->render()
#4 [internal function]: Controller_Main->action_index()
#5 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 10:19:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH\views\includes\operacion_form_view.php [ 8 ]
2012-06-26 10:19:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH\views\includes\operacion_form_view.php [ 8 ]
--
#0 C:\wamp\www\balance\application\views\includes\operacion_form_view.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\bal...', 8, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\views\main_view.php(37): Kohana_View->render()
#4 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#5 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#6 C:\wamp\www\balance\application\classes\controller\main.php(18): Kohana_View->render()
#7 [internal function]: Controller_Main->action_index()
#8 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-26 11:05:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\main_view.php [ 2 ]
2012-06-26 11:05:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\main_view.php [ 2 ]
--
#0 C:\wamp\www\balance\application\views\main_view.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\bal...', 2, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\classes\controller\main.php(21): Kohana_View->render()
#4 [internal function]: Controller_Main->action_index()
#5 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 11:06:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\main_view.php [ 2 ]
2012-06-26 11:06:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\main_view.php [ 2 ]
--
#0 C:\wamp\www\balance\application\views\main_view.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\bal...', 2, Array)
#1 C:\wamp\www\balance\system\classes\kohana\view.php(61): include('C:\wamp\www\bal...')
#2 C:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\bal...', Array)
#3 C:\wamp\www\balance\application\classes\controller\main.php(21): Kohana_View->render()
#4 [internal function]: Controller_Main->action_index()
#5 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 12:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 12:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 14:00:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 35 ]
2012-06-26 14:00:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:07:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 44 ]
2012-06-26 14:07:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:07:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 44 ]
2012-06-26 14:07:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:15:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\main.php [ 51 ]
2012-06-26 14:15:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:15:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\main.php [ 51 ]
2012-06-26 14:15:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:15:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH\classes\controller\main.php [ 51 ]
2012-06-26 14:15:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ')' ~ APPPATH\classes\controller\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:16:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 48 ]
2012-06-26 14:16:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:27:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Main::$per_page ~ APPPATH\classes\controller\main.php [ 29 ]
2012-06-26 14:27:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Main::$per_page ~ APPPATH\classes\controller\main.php [ 29 ]
--
#0 C:\wamp\www\balance\application\classes\controller\main.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\bal...', 29, Array)
#1 [internal function]: Controller_Main->action_entries()
#2 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 14:27:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Main::$per_page ~ APPPATH\classes\controller\main.php [ 29 ]
2012-06-26 14:27:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Main::$per_page ~ APPPATH\classes\controller\main.php [ 29 ]
--
#0 C:\wamp\www\balance\application\classes\controller\main.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\bal...', 29, Array)
#1 [internal function]: Controller_Main->action_entries()
#2 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 14:31:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Entry::count() ~ APPPATH\classes\controller\main.php [ 63 ]
2012-06-26 14:31:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Entry::count() ~ APPPATH\classes\controller\main.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:41:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 58 ]
2012-06-26 14:41:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 14:41:26 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\main.php [ 68 ]
2012-06-26 14:41:26 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\main.php [ 68 ]
--
#0 C:\wamp\www\balance\application\classes\controller\main.php(68): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\bal...', 68, Array)
#1 [internal function]: Controller_Main->action_entries()
#2 C:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 15:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/ajax_loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 15:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/ajax_loader.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 15:46:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH\views\parts\entries_view.php [ 2 ]
2012-06-26 15:46:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH\views\parts\entries_view.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 17:20:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 35 ]
2012-06-26 17:20:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\defaulttemplate.php [ 35 ]
--
#0 D:\wamp\www\balance\application\classes\controller\defaulttemplate.php(35): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\wamp\www\bal...', 35, Array)
#1 D:\wamp\www\balance\application\classes\controller\main.php(14): Controller_DefaultTemplate->setPageTitle('Home')
#2 [internal function]: Controller_Main->action_index()
#3 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-26 17:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/add_entry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-26 17:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/add_entry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 17:36:12 --- ERROR: Kohana_Exception [ 0 ]: The ammout property does not exist in the Model_Entry class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-06-26 17:36:12 --- STRACE: Kohana_Exception [ 0 ]: The ammout property does not exist in the Model_Entry class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\wamp\www\balance\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('ammout', '150')
#1 D:\wamp\www\balance\application\classes\controller\main.php(119): Kohana_ORM->__set('ammout', '150')
#2 [internal function]: Controller_Main->action_add_entry()
#3 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-26 17:36:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Main::$active_user ~ APPPATH\classes\controller\main.php [ 122 ]
2012-06-26 17:36:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Main::$active_user ~ APPPATH\classes\controller\main.php [ 122 ]
--
#0 D:\wamp\www\balance\application\classes\controller\main.php(122): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\wamp\www\bal...', 122, Array)
#1 [internal function]: Controller_Main->action_add_entry()
#2 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 17:38:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\includes\nav_view.php [ 12 ]
2012-06-26 17:38:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\includes\nav_view.php [ 12 ]
--
#0 D:\wamp\www\balance\application\views\includes\nav_view.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\bal...', 12, Array)
#1 D:\wamp\www\balance\system\classes\kohana\view.php(61): include('D:\wamp\www\bal...')
#2 D:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\bal...', Array)
#3 D:\wamp\www\balance\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\balance\application\views\main_view.php(1): Kohana_View->__toString()
#5 D:\wamp\www\balance\system\classes\kohana\view.php(61): include('D:\wamp\www\bal...')
#6 D:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\bal...', Array)
#7 D:\wamp\www\balance\application\classes\controller\main.php(31): Kohana_View->render()
#8 [internal function]: Controller_Main->action_index()
#9 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-26 17:56:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: accounts ~ APPPATH\views\parts\accounts_view.php [ 9 ]
2012-06-26 17:56:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: accounts ~ APPPATH\views\parts\accounts_view.php [ 9 ]
--
#0 D:\wamp\www\balance\application\views\parts\accounts_view.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\bal...', 9, Array)
#1 D:\wamp\www\balance\system\classes\kohana\view.php(61): include('D:\wamp\www\bal...')
#2 D:\wamp\www\balance\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\bal...', Array)
#3 D:\wamp\www\balance\application\classes\controller\main.php(116): Kohana_View->render()
#4 [internal function]: Controller_Main->action_accounts()
#5 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-26 18:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3003 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 18:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3003 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 18:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 3003 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 18:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 3003 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 18:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL delete_entry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 18:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL delete_entry was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 18:32:51 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\main.php [ 10 ]
2012-06-26 18:32:51 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 D:\wamp\www\balance\application\classes\controller\main.php(10): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\wamp\www\bal...', 10, Array)
#1 [internal function]: Controller_Main->before()
#2 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 18:33:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH\classes\controller\main.php [ 14 ]
2012-06-26 18:33:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH\classes\controller\main.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 18:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 18:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 18:45:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\login.php [ 31 ]
2012-06-26 18:45:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\login.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-26 18:54:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Login::$input ~ APPPATH\classes\controller\login.php [ 26 ]
2012-06-26 18:54:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Login::$input ~ APPPATH\classes\controller\login.php [ 26 ]
--
#0 D:\wamp\www\balance\application\classes\controller\login.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\wamp\www\bal...', 26, Array)
#1 [internal function]: Controller_Login->action_check_credentials()
#2 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 18:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/index/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/modernizr-2.5.3.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/libs/less-1.3.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-datepicker.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-26 18:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: login/js/plugins.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-26 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-26 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-26 19:56:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH\classes\controller\login.php [ 26 ]
2012-06-26 19:56:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH\classes\controller\login.php [ 26 ]
--
#0 D:\wamp\www\balance\application\classes\controller\login.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\bal...', 26, Array)
#1 [internal function]: Controller_Login->action_check_credentials()
#2 D:\wamp\www\balance\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#3 D:\wamp\www\balance\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\balance\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\balance\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-26 20:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-26 20:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/kersten/public_html/balance/index.php(109): Kohana_Request->execute()
#1 {main}