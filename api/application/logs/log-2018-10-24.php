<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-24 00:05:51 --> {"username":"newUsername","password":"newPassword","roleId":1}
ERROR - 2018-10-24 00:06:09 --> {"username":"marko","password":"marko123"}
ERROR - 2018-10-24 00:06:09 --> {"username":"newUsername","password":"newPassword","roleId":2}
ERROR - 2018-10-24 00:06:29 --> {"username":"marko","password":"marko123"}
ERROR - 2018-10-24 00:06:41 --> test
ERROR - 2018-10-24 00:06:53 --> test
ERROR - 2018-10-24 00:07:07 --> test
ERROR - 2018-10-24 00:08:31 --> test123
DEBUG - 2018-10-24 00:08:55 --> UTF-8 Support Enabled
DEBUG - 2018-10-24 00:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-10-24 00:08:55 --> Config file loaded: /Users/markostojanovic/work/projects/timezones/api/application/config/jwt.php
DEBUG - 2018-10-24 00:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-10-24 00:08:55 --> Config file loaded: /Users/markostojanovic/work/projects/timezones/api/application/config/jwt.php
DEBUG - 2018-10-24 00:08:55 --> Config file loaded: /Users/markostojanovic/work/projects/timezones/api/application/config/rest.php
DEBUG - 2018-10-24 00:08:55 --> Config file loaded: /Users/markostojanovic/work/projects/timezones/api/application/config/testing/rest.php
ERROR - 2018-10-24 00:08:55 --> test123
DEBUG - 2018-10-24 00:08:55 --> Total execution time: 
ERROR - 2018-10-24 00:09:41 --> {"username":"marko","password":"marko123"}
ERROR - 2018-10-24 00:10:04 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Auth_test.php 38
ERROR - 2018-10-24 00:10:04 --> Severity: Error --> Uncaught CIPHPUnitTestExitException: exit() called in _exception_handler() function in /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php:662
Stack trace:
#0 /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php(662): exit__(1)
#1 [internal function]: _exception_handler(Object(ParseError))
#2 {main}
  thrown /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php 662
ERROR - 2018-10-24 00:10:28 --> {"username":"newUsername","password":"newPassword","roleId":3}
ERROR - 2018-10-24 00:11:32 --> ====action==== insert
ERROR - 2018-10-24 00:57:46 --> {"limit":"10","offset":"11"}
ERROR - 2018-10-24 01:09:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5, 5' at line 4 - Invalid query: SELECT `users`.`uuid`, `users`.`name`, `users`.`username`, `roles`.`name` as `role`, `roles`.`id` as `roleId`
FROM `users`
JOIN `roles` ON `roles`.`id` = `users`.`roleId`
 LIMIT -5, 5
ERROR - 2018-10-24 01:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18, 18' at line 4 - Invalid query: SELECT `users`.`uuid`, `users`.`name`, `users`.`username`, `roles`.`name` as `role`, `roles`.`id` as `roleId`
FROM `users`
JOIN `roles` ON `roles`.`id` = `users`.`roleId`
 LIMIT -18, 18
ERROR - 2018-10-24 01:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18, 18' at line 4 - Invalid query: SELECT `users`.`uuid`, `users`.`name`, `users`.`username`, `roles`.`name` as `role`, `roles`.`id` as `roleId`
FROM `users`
JOIN `roles` ON `roles`.`id` = `users`.`roleId`
 LIMIT -18, 18
ERROR - 2018-10-24 01:12:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18, 18' at line 4 - Invalid query: SELECT `users`.`uuid`, `users`.`name`, `users`.`username`, `roles`.`name` as `role`, `roles`.`id` as `roleId`
FROM `users`
JOIN `roles` ON `roles`.`id` = `users`.`roleId`
 LIMIT -18, 18
ERROR - 2018-10-24 01:47:49 --> c0d7de309fe04404b6767f7b3355640e
ERROR - 2018-10-24 01:48:20 --> c0d7de309fe04404b6767f7b3355640e
ERROR - 2018-10-24 12:02:33 --> register
ERROR - 2018-10-24 12:02:48 --> create
ERROR - 2018-10-24 12:26:34 --> register
ERROR - 2018-10-24 12:26:34 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 26
ERROR - 2018-10-24 12:26:34 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 30
ERROR - 2018-10-24 12:31:53 --> Unable to load the requested class: Seeder
ERROR - 2018-10-24 12:37:22 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`users`, CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `timezones`.`roles` (`id`)) - Invalid query: INSERT INTO `users` (`username`, `name`, `password`) VALUES ('testAdmin', 'testName', 'testPassword')
ERROR - 2018-10-24 12:38:07 --> register
ERROR - 2018-10-24 12:38:07 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 35
ERROR - 2018-10-24 12:38:07 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 39
ERROR - 2018-10-24 12:43:34 --> register
ERROR - 2018-10-24 12:43:34 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 26
ERROR - 2018-10-24 12:43:34 --> Severity: Notice --> Undefined property: stdClass::$token /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 30
ERROR - 2018-10-24 12:45:24 --> create
ERROR - 2018-10-24 12:45:24 --> register
ERROR - 2018-10-24 12:45:24 --> create
ERROR - 2018-10-24 12:46:37 --> Severity: error --> Exception: Too few arguments to function CI_DB_query_builder::limit(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/models/User_model.php on line 14 and at least 1 expected /Users/markostojanovic/work/projects/timezones/api/system/database/DB_query_builder.php 1259
ERROR - 2018-10-24 12:49:15 --> create
ERROR - 2018-10-24 12:49:15 --> register
ERROR - 2018-10-24 12:49:15 --> create
ERROR - 2018-10-24 12:50:17 --> register
ERROR - 2018-10-24 12:50:17 --> create
ERROR - 2018-10-24 12:53:17 --> register
ERROR - 2018-10-24 12:53:17 --> create
ERROR - 2018-10-24 12:54:24 --> username testAdmin passowrd testPassword
ERROR - 2018-10-24 12:56:10 --> {"uuid":"1fb2aaf10348436e97e9333c2c5b5e1f","username":"testAdmin","password":"$2y$10$NHGT\/gkvDPYsTiJqMmyI3u8KR93p8qpzlZ7dJscVd2y\/o4TIGUzOS","roleName":"admin"}
ERROR - 2018-10-24 13:03:22 --> create
ERROR - 2018-10-24 13:03:22 --> create
ERROR - 2018-10-24 13:03:23 --> Severity: Notice --> Undefined offset: 1 /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 140
ERROR - 2018-10-24 13:03:23 --> Severity: Notice --> Trying to get property of non-object /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 145
ERROR - 2018-10-24 13:08:18 --> create
ERROR - 2018-10-24 13:08:18 --> 4c7bc81f5f154e7383f08844e78f7190
ERROR - 2018-10-24 13:08:51 --> create
ERROR - 2018-10-24 13:08:51 --> 4c7bc81f5f154e7383f08844e78f7190
ERROR - 2018-10-24 13:11:28 --> create
ERROR - 2018-10-24 13:11:28 --> ce683a61ef8143b7b5f36228c4bb9060
ERROR - 2018-10-24 13:12:07 --> create
ERROR - 2018-10-24 13:12:07 --> create
ERROR - 2018-10-24 13:12:07 --> create
ERROR - 2018-10-24 13:12:07 --> 4e42170b3c314c1f94b18b1dac9bb91a
ERROR - 2018-10-24 16:55:20 --> ====== login ====== 
ERROR - 2018-10-24 16:57:46 --> ====== login ====== 
ERROR - 2018-10-24 17:20:58 --> ====== login ====== 
ERROR - 2018-10-24 17:20:58 --> ====== login ====== 
ERROR - 2018-10-24 17:22:19 --> ====== login ====== 
ERROR - 2018-10-24 17:22:19 --> ====== login ====== 
ERROR - 2018-10-24 17:22:19 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:23:07 --> ====== login ====== 
ERROR - 2018-10-24 17:23:07 --> ====== login ====== 
ERROR - 2018-10-24 17:23:08 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:23:30 --> ====== login ====== 
ERROR - 2018-10-24 17:23:31 --> ====== login ====== 
ERROR - 2018-10-24 17:23:31 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:24:06 --> ====== login ====== 
ERROR - 2018-10-24 17:24:06 --> ====== login ====== 
ERROR - 2018-10-24 17:24:06 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:24:19 --> ====== login ====== 
ERROR - 2018-10-24 17:24:19 --> ====== login ====== 
ERROR - 2018-10-24 17:24:19 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:24:37 --> ====== login ====== 
ERROR - 2018-10-24 17:24:37 --> ====== login ====== 
ERROR - 2018-10-24 17:24:38 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:25:35 --> ====== login ====== 
ERROR - 2018-10-24 17:25:35 --> ====== login ====== 
ERROR - 2018-10-24 17:25:35 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:26:20 --> ====== login ====== 
ERROR - 2018-10-24 17:26:20 --> ====== login ====== 
ERROR - 2018-10-24 17:26:21 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:27:08 --> ====== login ====== 
ERROR - 2018-10-24 17:27:08 --> ====== login ====== 
ERROR - 2018-10-24 17:27:08 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:27:16 --> ====== login ====== 
ERROR - 2018-10-24 17:27:16 --> ====== login ====== 
ERROR - 2018-10-24 17:27:16 --> Severity: error --> Exception: Too few arguments to function Users::index_delete(), 0 passed in /Users/markostojanovic/work/projects/timezones/api/application/vendor/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php on line 793 and exactly 1 expected /Users/markostojanovic/work/projects/timezones/api/application/controllers/Users.php 113
ERROR - 2018-10-24 17:27:40 --> ====== login ====== 
ERROR - 2018-10-24 17:27:41 --> ====== login ====== 
ERROR - 2018-10-24 17:28:39 --> ====== login ====== 
ERROR - 2018-10-24 17:28:39 --> ====== login ====== 
ERROR - 2018-10-24 17:28:39 --> create
ERROR - 2018-10-24 17:29:06 --> ====== login ====== 
ERROR - 2018-10-24 17:29:06 --> ====== login ====== 
ERROR - 2018-10-24 17:29:06 --> create
ERROR - 2018-10-24 17:30:10 --> ====== login ====== 
ERROR - 2018-10-24 17:30:11 --> ====== login ====== 
ERROR - 2018-10-24 17:30:11 --> create
ERROR - 2018-10-24 17:30:36 --> ====== login ====== 
ERROR - 2018-10-24 17:30:36 --> ====== login ====== 
ERROR - 2018-10-24 17:30:36 --> create
ERROR - 2018-10-24 17:31:19 --> ====== login ====== 
ERROR - 2018-10-24 17:31:20 --> ====== login ====== 
ERROR - 2018-10-24 17:31:20 --> create
ERROR - 2018-10-24 17:31:49 --> ====== login ====== 
ERROR - 2018-10-24 17:31:49 --> create
ERROR - 2018-10-24 17:34:44 --> ====== login ====== 
ERROR - 2018-10-24 17:34:44 --> ====== login ====== 
ERROR - 2018-10-24 17:34:44 --> ====== register ======
ERROR - 2018-10-24 17:34:44 --> create
ERROR - 2018-10-24 17:34:44 --> ====== delete ======
ERROR - 2018-10-24 17:39:01 --> ====== login ====== 
ERROR - 2018-10-24 17:39:01 --> ====== login ====== 
ERROR - 2018-10-24 17:39:01 --> ====== register ======
ERROR - 2018-10-24 17:39:01 --> create
ERROR - 2018-10-24 17:41:23 --> ====== login ====== 
ERROR - 2018-10-24 17:41:24 --> ====== login ====== 
ERROR - 2018-10-24 17:41:24 --> ====== register ======
ERROR - 2018-10-24 17:41:24 --> create
ERROR - 2018-10-24 17:51:09 --> Severity: Compile Error --> Constant expression contains invalid operations /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 7
ERROR - 2018-10-24 17:51:27 --> Severity: Compile Error --> Constant expression contains invalid operations /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 7
ERROR - 2018-10-24 17:52:16 --> Severity: Notice --> Undefined property: CI_Controller::$request /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 16
ERROR - 2018-10-24 17:53:24 --> Severity: Notice --> Undefined property: CI_Controller::$request /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 17
ERROR - 2018-10-24 18:01:27 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`users`, CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `timezones`.`roles` (`id`)) - Invalid query: INSERT INTO `users` (`username`, `name`, `password`, `uuid`) VALUES ('testUsername1', 'testName1', 'testPassword1', '39b10a55c108444fb6fa9a5ed33fa9d4')
ERROR - 2018-10-24 18:02:03 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`users`, CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `timezones`.`roles` (`id`)) - Invalid query: INSERT INTO `users` (`username`, `name`, `password`, `uuid`) VALUES ('testUsername1', 'testName1', 'testPassword1', '1d2028cc12204e3abfcd13ef476a2810')
ERROR - 2018-10-24 18:02:34 --> Severity: error --> Exception: syntax error, unexpected '$CI' (T_VARIABLE) /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 26
ERROR - 2018-10-24 18:02:34 --> Severity: Error --> Uncaught CIPHPUnitTestExitException: exit() called in _exception_handler() function in /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php:662
Stack trace:
#0 /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php(662): exit__(1)
#1 [internal function]: _exception_handler(Object(ParseError))
#2 {main}
  thrown /Users/markostojanovic/work/projects/timezones/api/system/core/Common.php 662
ERROR - 2018-10-24 18:02:43 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`users`, CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `timezones`.`roles` (`id`)) - Invalid query: INSERT INTO `users` (`username`, `name`, `password`, `uuid`) VALUES ('testUsername1', 'testName1', 'testPassword1', 'b62c44ff53324190bad518b22a96a7e9')
ERROR - 2018-10-24 18:03:38 --> Query error: Duplicate entry 'testUsername1' for key 'username' - Invalid query: INSERT INTO `users` (`username`, `name`, `password`, `roleId`, `uuid`) VALUES ('testUsername1', 'testName1', 'testPassword1', 1, 'f4d778e734994ee1907b2f28628153fe')
ERROR - 2018-10-24 18:04:03 --> create
ERROR - 2018-10-24 18:04:03 --> b26e7da5f62f43b4b4269f47489885e0
ERROR - 2018-10-24 18:04:03 --> ====== login ====== 
ERROR - 2018-10-24 18:04:03 --> ====== delete ======
ERROR - 2018-10-24 18:05:58 --> create
ERROR - 2018-10-24 18:05:58 --> 31a669a8fb254953b08f33cb35040598
ERROR - 2018-10-24 18:05:58 --> ====== login ====== 
ERROR - 2018-10-24 18:05:58 --> ====== delete ======
ERROR - 2018-10-24 18:06:03 --> create
ERROR - 2018-10-24 18:06:03 --> e6c6df1394a74360b1c9d73d035465f6
ERROR - 2018-10-24 18:06:03 --> ====== login ====== 
ERROR - 2018-10-24 18:06:03 --> ====== delete ======
ERROR - 2018-10-24 18:06:05 --> create
ERROR - 2018-10-24 18:06:05 --> 8606ca1af70a47b0915053c9741a815c
ERROR - 2018-10-24 18:06:05 --> ====== login ====== 
ERROR - 2018-10-24 18:06:05 --> ====== delete ======
ERROR - 2018-10-24 18:06:07 --> create
ERROR - 2018-10-24 18:06:07 --> 5c09ecf070754c7cb2f57233b73d4b4b
ERROR - 2018-10-24 18:06:07 --> ====== login ====== 
ERROR - 2018-10-24 18:06:07 --> ====== delete ======
ERROR - 2018-10-24 18:06:34 --> Severity: Notice --> Undefined variable: insertUser /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 45
ERROR - 2018-10-24 18:06:34 --> create
ERROR - 2018-10-24 18:06:34 --> 7a1dc92050e54acab15a0a9713408015
ERROR - 2018-10-24 18:06:34 --> ====== login ====== 
ERROR - 2018-10-24 18:06:34 --> ====== delete ======
ERROR - 2018-10-24 18:06:41 --> create
ERROR - 2018-10-24 18:06:41 --> 41d049b969f54cadb4d94586fc379621
ERROR - 2018-10-24 18:06:41 --> ====== login ====== 
ERROR - 2018-10-24 18:06:41 --> ====== delete ======
ERROR - 2018-10-24 18:09:36 --> ====== register ======
ERROR - 2018-10-24 18:09:36 --> create
ERROR - 2018-10-24 18:09:36 --> ====== login ====== 
ERROR - 2018-10-24 18:09:37 --> ====== register ======
ERROR - 2018-10-24 18:09:37 --> create
ERROR - 2018-10-24 18:09:37 --> ====== login ====== 
ERROR - 2018-10-24 18:09:37 --> create
ERROR - 2018-10-24 18:09:37 --> 880800bf91e6475bad3036f5d2ea35a8
ERROR - 2018-10-24 18:09:37 --> ====== login ====== 
ERROR - 2018-10-24 18:09:37 --> ====== delete ======
ERROR - 2018-10-24 18:09:56 --> ====== register ======
ERROR - 2018-10-24 18:09:56 --> create
ERROR - 2018-10-24 18:09:57 --> ====== login ====== 
ERROR - 2018-10-24 18:09:57 --> ====== register ======
ERROR - 2018-10-24 18:09:57 --> create
ERROR - 2018-10-24 18:09:57 --> ====== login ====== 
ERROR - 2018-10-24 18:09:57 --> create
ERROR - 2018-10-24 18:09:57 --> 0ad16a268dc545479e83f2af4c874476
ERROR - 2018-10-24 18:09:57 --> ====== login ====== 
ERROR - 2018-10-24 18:09:57 --> ====== delete ======
ERROR - 2018-10-24 18:10:09 --> ====== register ======
ERROR - 2018-10-24 18:10:09 --> create
ERROR - 2018-10-24 18:10:09 --> ====== login ====== 
ERROR - 2018-10-24 18:10:09 --> ====== register ======
ERROR - 2018-10-24 18:10:09 --> create
ERROR - 2018-10-24 18:10:09 --> ====== login ====== 
ERROR - 2018-10-24 18:10:09 --> create
ERROR - 2018-10-24 18:10:09 --> c68013eb5ec94633a6d0c560ae4c13c7
ERROR - 2018-10-24 18:10:09 --> ====== login ====== 
ERROR - 2018-10-24 18:10:10 --> ====== delete ======
ERROR - 2018-10-24 18:10:19 --> ====== register ======
ERROR - 2018-10-24 18:10:19 --> create
ERROR - 2018-10-24 18:10:19 --> ====== login ====== 
ERROR - 2018-10-24 18:10:19 --> ====== register ======
ERROR - 2018-10-24 18:10:19 --> create
ERROR - 2018-10-24 18:10:19 --> ====== login ====== 
ERROR - 2018-10-24 18:10:19 --> create
ERROR - 2018-10-24 18:10:19 --> 9a9292f0c9164f2c8983b36f17cd1740
ERROR - 2018-10-24 18:10:19 --> ====== login ====== 
ERROR - 2018-10-24 18:10:20 --> ====== delete ======
ERROR - 2018-10-24 18:10:50 --> ====== register ======
ERROR - 2018-10-24 18:10:50 --> create
ERROR - 2018-10-24 18:10:50 --> ====== login ====== 
ERROR - 2018-10-24 18:10:50 --> ====== register ======
ERROR - 2018-10-24 18:10:50 --> create
ERROR - 2018-10-24 18:10:50 --> ====== login ====== 
ERROR - 2018-10-24 18:10:50 --> create
ERROR - 2018-10-24 18:10:50 --> e1f18aeec1aa4dbd852e951f63ae2829
ERROR - 2018-10-24 18:10:50 --> ====== login ====== 
ERROR - 2018-10-24 18:10:51 --> ====== delete ======
ERROR - 2018-10-24 18:14:26 --> ====== register ======
ERROR - 2018-10-24 18:14:26 --> create
ERROR - 2018-10-24 18:14:26 --> ====== login ====== 
ERROR - 2018-10-24 18:14:26 --> ====== register ======
ERROR - 2018-10-24 18:14:26 --> create
ERROR - 2018-10-24 18:14:26 --> ====== login ====== 
ERROR - 2018-10-24 18:14:26 --> Severity: 4096 --> Object of class stdClass could not be converted to string /Users/markostojanovic/work/projects/timezones/api/system/database/DB_driver.php 1477
ERROR - 2018-10-24 18:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 - Invalid query: INSERT INTO `timezones` (`name`, `city`, `differenceGMT`, `userId`) VALUES ('Timezone New', 'Athens', '+2', )
ERROR - 2018-10-24 18:14:27 --> create
ERROR - 2018-10-24 18:14:27 --> de9d856783b24478b5d58d535ad4a281
ERROR - 2018-10-24 18:14:27 --> ====== login ====== 
ERROR - 2018-10-24 18:14:27 --> ====== delete ======
ERROR - 2018-10-24 18:14:36 --> ====== register ======
ERROR - 2018-10-24 18:14:36 --> create
ERROR - 2018-10-24 18:14:37 --> ====== login ====== 
ERROR - 2018-10-24 18:14:37 --> ====== register ======
ERROR - 2018-10-24 18:14:37 --> create
ERROR - 2018-10-24 18:14:37 --> ====== login ====== 
ERROR - 2018-10-24 18:14:37 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`timezones`, CONSTRAINT `timezones_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `timezones`.`users` (`id`) ON DELETE SET NULL) - Invalid query: INSERT INTO `timezones` (`name`, `city`, `differenceGMT`, `userId`) VALUES ('Timezone New', 'Athens', '+2', '48')
ERROR - 2018-10-24 18:14:37 --> create
ERROR - 2018-10-24 18:14:37 --> 15b86f7e71e049d2a1cd6e419e6b9487
ERROR - 2018-10-24 18:14:37 --> ====== login ====== 
ERROR - 2018-10-24 18:14:37 --> ====== delete ======
ERROR - 2018-10-24 18:15:09 --> ====== register ======
ERROR - 2018-10-24 18:15:09 --> create
ERROR - 2018-10-24 18:15:09 --> ====== login ====== 
ERROR - 2018-10-24 18:15:09 --> ====== register ======
ERROR - 2018-10-24 18:15:09 --> create
ERROR - 2018-10-24 18:15:09 --> ====== login ====== 
ERROR - 2018-10-24 18:15:09 --> create
ERROR - 2018-10-24 18:15:09 --> d6dbd7b39fbe45ecbb8f272162709394
ERROR - 2018-10-24 18:15:09 --> ====== login ====== 
ERROR - 2018-10-24 18:15:10 --> ====== delete ======
ERROR - 2018-10-24 18:18:43 --> ====== register ======
ERROR - 2018-10-24 18:18:43 --> create
ERROR - 2018-10-24 18:18:43 --> ====== login ====== 
ERROR - 2018-10-24 18:18:43 --> ====== register ======
ERROR - 2018-10-24 18:18:43 --> create
ERROR - 2018-10-24 18:18:43 --> ====== login ====== 
ERROR - 2018-10-24 18:18:43 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`timezones`, CONSTRAINT `timezones_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `timezones`.`users` (`id`) ON DELETE SET NULL) - Invalid query: INSERT INTO `timezones` (`name`, `city`, `differenceGMT`, `userId`) VALUES ('Timezone New', 'Athens', '+2', 56)
ERROR - 2018-10-24 18:18:43 --> create
ERROR - 2018-10-24 18:18:43 --> ea7ca5d5a3ed4f5993f2febad29ff09d
ERROR - 2018-10-24 18:18:43 --> ====== login ====== 
ERROR - 2018-10-24 18:18:43 --> ====== delete ======
ERROR - 2018-10-24 18:19:46 --> ====== register ======
ERROR - 2018-10-24 18:19:46 --> create
ERROR - 2018-10-24 18:19:47 --> ====== login ====== 
ERROR - 2018-10-24 18:19:47 --> ====== register ======
ERROR - 2018-10-24 18:19:47 --> create
ERROR - 2018-10-24 18:19:47 --> ====== login ====== 
ERROR - 2018-10-24 18:19:47 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`timezones_test`.`timezones`, CONSTRAINT `timezones_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `timezones`.`users` (`id`) ON DELETE SET NULL) - Invalid query: INSERT INTO `timezones` (`name`, `city`, `differenceGMT`, `userId`) VALUES ('Timezone New', 'Athens', '+2', 60)
ERROR - 2018-10-24 18:24:45 --> ====== register ======
ERROR - 2018-10-24 18:24:45 --> create
ERROR - 2018-10-24 18:24:45 --> ====== login ====== 
ERROR - 2018-10-24 18:24:45 --> ====== register ======
ERROR - 2018-10-24 18:24:45 --> create
ERROR - 2018-10-24 18:24:45 --> ====== login ====== 
ERROR - 2018-10-24 18:32:19 --> ====== register ======
ERROR - 2018-10-24 18:32:19 --> create
ERROR - 2018-10-24 18:32:19 --> ====== login ====== 
ERROR - 2018-10-24 18:32:20 --> ====== register ======
ERROR - 2018-10-24 18:32:20 --> create
ERROR - 2018-10-24 18:32:20 --> ====== login ====== 
ERROR - 2018-10-24 18:32:20 --> Query error: Duplicate entry 'timezoneUser' for key 'username' - Invalid query: INSERT INTO `users` (`username`, `password`, `name`, `roleId`, `uuid`) VALUES ('timezoneUser', 'testPassword', 'timezoneUser', 1, '96f76e56ab5441e790970cd302683b31')
ERROR - 2018-10-24 18:32:20 --> 98472367a6084ac6a235166b99211ed7
ERROR - 2018-10-24 18:32:20 --> ====== login ====== 
ERROR - 2018-10-24 18:33:18 --> ====== register ======
ERROR - 2018-10-24 18:33:18 --> create
ERROR - 2018-10-24 18:33:18 --> ====== login ====== 
ERROR - 2018-10-24 18:33:18 --> ====== register ======
ERROR - 2018-10-24 18:33:18 --> create
ERROR - 2018-10-24 18:33:18 --> ====== login ====== 
ERROR - 2018-10-24 18:33:19 --> Query error: Duplicate entry 'testUsername1' for key 'username' - Invalid query: INSERT INTO `users` (`username`, `name`, `password`, `roleId`, `uuid`) VALUES ('testUsername1', 'testName1', 'testPassword1', 1, 'bcf44ce2fd6047d5b302312d90b6db96')
ERROR - 2018-10-24 18:33:57 --> ====== register ======
ERROR - 2018-10-24 18:33:57 --> create
ERROR - 2018-10-24 18:33:57 --> ====== login ====== 
ERROR - 2018-10-24 18:33:57 --> ====== register ======
ERROR - 2018-10-24 18:33:57 --> create
ERROR - 2018-10-24 18:33:57 --> ====== login ====== 
ERROR - 2018-10-24 18:33:57 --> 381ffca5ae9b4affbc9245e29f6ffa96
ERROR - 2018-10-24 18:33:57 --> ====== login ====== 
ERROR - 2018-10-24 18:33:57 --> ====== delete ======
ERROR - 2018-10-24 18:34:40 --> ====== register ======
ERROR - 2018-10-24 18:34:40 --> create
ERROR - 2018-10-24 18:34:40 --> ====== login ====== 
ERROR - 2018-10-24 18:34:40 --> ====== register ======
ERROR - 2018-10-24 18:34:40 --> create
ERROR - 2018-10-24 18:34:40 --> ====== login ====== 
ERROR - 2018-10-24 18:35:10 --> ====== register ======
ERROR - 2018-10-24 18:35:10 --> create
ERROR - 2018-10-24 18:35:10 --> ====== login ====== 
ERROR - 2018-10-24 18:35:10 --> ====== register ======
ERROR - 2018-10-24 18:35:10 --> create
ERROR - 2018-10-24 18:35:10 --> ====== login ====== 
ERROR - 2018-10-24 18:35:10 --> Severity: Notice --> Trying to get property of non-object /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 31
ERROR - 2018-10-24 18:35:10 --> Severity: Notice --> Trying to get property of non-object /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 31
ERROR - 2018-10-24 18:35:10 --> Severity: Notice --> Trying to get property of non-object /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 31
ERROR - 2018-10-24 18:35:10 --> Severity: Notice --> Trying to get property of non-object /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Users_test.php 31
ERROR - 2018-10-24 18:36:09 --> ====== register ======
ERROR - 2018-10-24 18:36:09 --> create
ERROR - 2018-10-24 18:36:09 --> ====== login ====== 
ERROR - 2018-10-24 18:36:09 --> ====== register ======
ERROR - 2018-10-24 18:36:09 --> create
ERROR - 2018-10-24 18:36:09 --> ====== login ====== 
ERROR - 2018-10-24 18:36:09 --> create
ERROR - 2018-10-24 18:36:09 --> 86d9edbee6e445a4b83161a897663c73
ERROR - 2018-10-24 18:36:09 --> ====== login ====== 
ERROR - 2018-10-24 18:36:09 --> ====== delete ======
ERROR - 2018-10-24 18:36:43 --> ====== register ======
ERROR - 2018-10-24 18:36:43 --> create
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> ====== register ======
ERROR - 2018-10-24 18:36:43 --> create
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> Severity: Notice --> Undefined variable: timezoneData /Users/markostojanovic/work/projects/timezones/api/application/tests/controllers/Timezones_test.php 81
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> create
ERROR - 2018-10-24 18:36:43 --> 53cedef81e1f44f4b39a5c144116667b
ERROR - 2018-10-24 18:36:43 --> ====== login ====== 
ERROR - 2018-10-24 18:36:43 --> ====== delete ======
ERROR - 2018-10-24 18:37:17 --> ====== register ======
ERROR - 2018-10-24 18:37:17 --> create
ERROR - 2018-10-24 18:37:17 --> ====== login ====== 
ERROR - 2018-10-24 18:37:17 --> ====== register ======
ERROR - 2018-10-24 18:37:17 --> create
ERROR - 2018-10-24 18:37:17 --> ====== login ====== 
ERROR - 2018-10-24 18:37:17 --> ====== login ====== 
ERROR - 2018-10-24 18:37:17 --> ====== login ====== 
ERROR - 2018-10-24 18:37:17 --> ====== login ====== 
ERROR - 2018-10-24 18:37:18 --> create
ERROR - 2018-10-24 18:37:18 --> 713cfc2a02fe4dee950c7dd67a2145ae
ERROR - 2018-10-24 18:37:18 --> ====== login ====== 
ERROR - 2018-10-24 18:37:18 --> ====== delete ======
ERROR - 2018-10-24 18:38:20 --> ====== register ======
ERROR - 2018-10-24 18:38:20 --> create
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> ====== register ======
ERROR - 2018-10-24 18:38:20 --> create
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> create
ERROR - 2018-10-24 18:38:20 --> a1b576aaded84eaaba9963c21e2f2b4c
ERROR - 2018-10-24 18:38:20 --> ====== login ====== 
ERROR - 2018-10-24 18:38:20 --> ====== delete ======
ERROR - 2018-10-24 18:38:21 --> ====== register ======
ERROR - 2018-10-24 18:38:21 --> create
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> ====== register ======
ERROR - 2018-10-24 18:38:22 --> create
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> create
ERROR - 2018-10-24 18:38:22 --> 0c8cd90446ae4d3abbe1d382bfdc2827
ERROR - 2018-10-24 18:38:22 --> ====== login ====== 
ERROR - 2018-10-24 18:38:22 --> ====== delete ======
ERROR - 2018-10-24 18:38:23 --> ====== register ======
ERROR - 2018-10-24 18:38:23 --> create
ERROR - 2018-10-24 18:38:23 --> ====== login ====== 
ERROR - 2018-10-24 18:38:23 --> ====== register ======
ERROR - 2018-10-24 18:38:23 --> create
ERROR - 2018-10-24 18:38:23 --> ====== login ====== 
ERROR - 2018-10-24 18:38:23 --> ====== login ====== 
ERROR - 2018-10-24 18:38:23 --> ====== login ====== 
ERROR - 2018-10-24 18:38:23 --> ====== login ====== 
ERROR - 2018-10-24 18:38:24 --> create
ERROR - 2018-10-24 18:38:24 --> 84e475c9415549c283691f657952888e
ERROR - 2018-10-24 18:38:24 --> ====== login ====== 
ERROR - 2018-10-24 18:38:24 --> ====== delete ======
ERROR - 2018-10-24 18:38:25 --> ====== register ======
ERROR - 2018-10-24 18:38:25 --> create
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> ====== register ======
ERROR - 2018-10-24 18:38:25 --> create
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> create
ERROR - 2018-10-24 18:38:25 --> 8e81a682001f40668494226d8a147100
ERROR - 2018-10-24 18:38:25 --> ====== login ====== 
ERROR - 2018-10-24 18:38:25 --> ====== delete ======
ERROR - 2018-10-24 18:38:26 --> ====== register ======
ERROR - 2018-10-24 18:38:26 --> create
ERROR - 2018-10-24 18:38:26 --> ====== login ====== 
ERROR - 2018-10-24 18:38:26 --> ====== register ======
ERROR - 2018-10-24 18:38:26 --> create
ERROR - 2018-10-24 18:38:26 --> ====== login ====== 
ERROR - 2018-10-24 18:38:26 --> ====== login ====== 
ERROR - 2018-10-24 18:38:26 --> ====== login ====== 
ERROR - 2018-10-24 18:38:26 --> ====== login ====== 
ERROR - 2018-10-24 18:38:27 --> create
ERROR - 2018-10-24 18:38:27 --> 183922c4907b493882e7f80aba325a78
ERROR - 2018-10-24 18:38:27 --> ====== login ====== 
ERROR - 2018-10-24 18:38:27 --> ====== delete ======
ERROR - 2018-10-24 18:38:28 --> ====== register ======
ERROR - 2018-10-24 18:38:28 --> create
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> ====== register ======
ERROR - 2018-10-24 18:38:28 --> create
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> create
ERROR - 2018-10-24 18:38:28 --> f66456e1a3f0490ca2c61e8bf59ce3d0
ERROR - 2018-10-24 18:38:28 --> ====== login ====== 
ERROR - 2018-10-24 18:38:28 --> ====== delete ======
ERROR - 2018-10-24 18:38:36 --> ====== register ======
ERROR - 2018-10-24 18:38:36 --> create
ERROR - 2018-10-24 18:38:36 --> ====== login ====== 
ERROR - 2018-10-24 18:38:36 --> ====== register ======
ERROR - 2018-10-24 18:38:36 --> create
ERROR - 2018-10-24 18:38:36 --> ====== login ====== 
ERROR - 2018-10-24 18:38:36 --> ====== login ====== 
ERROR - 2018-10-24 18:38:36 --> ====== login ====== 
ERROR - 2018-10-24 18:38:37 --> ====== login ====== 
ERROR - 2018-10-24 18:38:37 --> create
ERROR - 2018-10-24 18:38:37 --> 166661c311394f21b5fccb0bb75fe5f0
ERROR - 2018-10-24 18:38:37 --> ====== login ====== 
ERROR - 2018-10-24 18:38:37 --> ====== delete ======
ERROR - 2018-10-24 18:42:03 --> ====== login ====== 
ERROR - 2018-10-24 18:46:55 --> ====== login ====== 
ERROR - 2018-10-24 18:47:58 --> ====== login ====== 
ERROR - 2018-10-24 18:49:16 --> ====== login ====== 
ERROR - 2018-10-24 18:55:28 --> ====== login ====== 
ERROR - 2018-10-24 18:56:28 --> ====== login ====== 
ERROR - 2018-10-24 18:57:30 --> ====== login ====== 
ERROR - 2018-10-24 18:58:52 --> ====== login ====== 
ERROR - 2018-10-24 18:59:52 --> ====== login ====== 
ERROR - 2018-10-24 19:04:05 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:04:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-24 19:04:07 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:04:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-24 19:05:53 --> ====== login ====== 
ERROR - 2018-10-24 19:05:59 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:06:00 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:06:04 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:06:05 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:06:05 --> Severity: error --> Exception: Call to undefined method Welcome::response() /Users/markostojanovic/work/projects/timezones/api/application/hooks/AuthHook.php 29
ERROR - 2018-10-24 19:06:11 --> 404 Page Not Found: Welcome/index
ERROR - 2018-10-24 19:06:12 --> 404 Page Not Found: Welcome/index
ERROR - 2018-10-24 20:28:50 --> ====== login ====== 
ERROR - 2018-10-24 20:29:19 --> ====== login ====== 
ERROR - 2018-10-24 20:29:21 --> ====== login ====== 
ERROR - 2018-10-24 20:29:39 --> ====== login ====== 
ERROR - 2018-10-24 20:30:23 --> ====== login ====== 
ERROR - 2018-10-24 20:30:27 --> ====== login ====== 
ERROR - 2018-10-24 20:30:43 --> ====== login ====== 
ERROR - 2018-10-24 20:36:02 --> ====== login ====== 
ERROR - 2018-10-24 20:37:08 --> ====== login ====== 
ERROR - 2018-10-24 20:37:22 --> ====== login ====== 
ERROR - 2018-10-24 20:37:24 --> create
ERROR - 2018-10-24 20:37:28 --> ====== login ====== 
ERROR - 2018-10-24 20:37:30 --> create
ERROR - 2018-10-24 20:38:35 --> ====== login ====== 
ERROR - 2018-10-24 21:08:26 --> create
ERROR - 2018-10-24 21:10:03 --> c0d7de309fe04404b6767f7b3355640e
ERROR - 2018-10-24 21:15:34 --> create
ERROR - 2018-10-24 21:15:34 --> ====== login ====== 
ERROR - 2018-10-24 21:15:34 --> create
ERROR - 2018-10-24 21:15:34 --> ====== login ====== 
ERROR - 2018-10-24 21:15:34 --> ====== login ====== 
ERROR - 2018-10-24 21:15:34 --> ====== login ====== 
ERROR - 2018-10-24 21:15:34 --> create
ERROR - 2018-10-24 21:15:35 --> f50e309a7aa847b6a6141c582bfa2abd
ERROR - 2018-10-24 21:15:35 --> ====== login ====== 
ERROR - 2018-10-24 21:17:32 --> ====== login ====== 
ERROR - 2018-10-24 21:17:32 --> ====== login ====== 
ERROR - 2018-10-24 21:17:32 --> ====== login ====== 
ERROR - 2018-10-24 21:17:38 --> ====== login ====== 
ERROR - 2018-10-24 21:17:38 --> ====== login ====== 
ERROR - 2018-10-24 21:17:38 --> ====== login ====== 
ERROR - 2018-10-24 21:17:45 --> create
ERROR - 2018-10-24 21:17:45 --> ====== login ====== 
ERROR - 2018-10-24 21:17:45 --> create
ERROR - 2018-10-24 21:17:45 --> ====== login ====== 
ERROR - 2018-10-24 21:17:45 --> ====== login ====== 
ERROR - 2018-10-24 21:17:45 --> ====== login ====== 
ERROR - 2018-10-24 21:17:45 --> create
ERROR - 2018-10-24 21:17:45 --> 12c1a682b0e54843a2a7e25ceb400383
ERROR - 2018-10-24 21:17:45 --> ====== login ====== 
ERROR - 2018-10-24 21:17:47 --> create
ERROR - 2018-10-24 21:17:47 --> ====== login ====== 
ERROR - 2018-10-24 21:17:47 --> create
ERROR - 2018-10-24 21:17:47 --> ====== login ====== 
ERROR - 2018-10-24 21:17:47 --> ====== login ====== 
ERROR - 2018-10-24 21:17:47 --> ====== login ====== 
ERROR - 2018-10-24 21:17:47 --> create
ERROR - 2018-10-24 21:17:48 --> d81851f9327241cab4969c41c299b67a
ERROR - 2018-10-24 21:17:48 --> ====== login ====== 
ERROR - 2018-10-24 21:33:29 --> ===== entered ====
ERROR - 2018-10-24 21:33:55 --> e211c023250a4b61aadf05242a134162
ERROR - 2018-10-24 21:34:19 --> 24
ERROR - 2018-10-24 21:34:47 --> 
ERROR - 2018-10-24 21:36:22 --> 24
ERROR - 2018-10-24 21:36:33 --> 24
ERROR - 2018-10-24 21:36:40 --> 
ERROR - 2018-10-24 21:37:41 --> 24
ERROR - 2018-10-24 21:38:21 --> 24
ERROR - 2018-10-24 21:38:24 --> 24
ERROR - 2018-10-24 21:38:33 --> 24
ERROR - 2018-10-24 21:38:36 --> 24
ERROR - 2018-10-24 21:38:40 --> 24
ERROR - 2018-10-24 21:38:42 --> 24
