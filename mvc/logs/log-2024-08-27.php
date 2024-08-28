<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-27 00:55:54 --> Severity: error --> Exception: Call to undefined method Mailandsms_m::get_filtered_mailandsms_by_user() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 205
ERROR - 2024-08-27 00:57:32 --> Query error: Unknown column 'mailandsms.user_id' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`user_id` IS NULL
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-27 00:57:32 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 29
ERROR - 2024-08-27 01:01:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:01:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:01:50 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:05:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:05:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:05:22 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:05:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:05:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:05:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:05:34 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:05:35 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 01:05:35 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:05:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:05:40 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:05:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:05:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:05:49 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:06:18 --> Query error: Unknown column 'mailandsms.us' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`us` IS NULL
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-27 01:06:18 --> Query error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.us' in 'where clause'
)

ERROR - 2024-08-27 01:06:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:06:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\laragon\www\lms\mvc\helpers\site_helper.php 41
ERROR - 2024-08-27 01:06:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\lms\mvc\views\mailandsms\index.php 42
ERROR - 2024-08-27 01:06:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:06:23 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:06:35 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:06:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:06:41 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:07:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:07:13 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:07:13 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:07:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:07:13 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:07:13 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:07:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:07:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:07:19 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:09:58 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:09:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:09:58 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:09:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:10:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:10:04 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:10:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:10:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:10:51 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:11:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:11:05 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:11:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:11:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:11:05 --> Severity: Notice --> Undefined property: stdClass::$user_id C:\laragon\www\lms\mvc\views\mailandsms\index.php 44
ERROR - 2024-08-27 01:11:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 51
ERROR - 2024-08-27 01:11:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:11:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:11:11 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:12:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:12:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:13:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:13:04 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:14:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:14:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:14:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:14:22 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:18:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:18:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:18:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:18:28 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:18:30 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 01:18:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:18:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:18:36 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:18:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:18:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:18:54 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:25:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:26:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:26:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:26:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:26:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:27:04 --> Severity: Notice --> Undefined variable: subview C:\laragon\www\lms\mvc\views\_layout_main.php 9
ERROR - 2024-08-27 01:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:28:05 --> Severity: Notice --> Undefined variable: subview C:\laragon\www\lms\mvc\views\_layout_main.php 9
ERROR - 2024-08-27 01:28:40 --> Severity: Compile Error --> Class declarations may not be nested C:\laragon\www\lms\mvc\controllers\Mailandsms.php 192
ERROR - 2024-08-27 01:29:33 --> Severity: error --> Exception: Call to undefined method Mailandsms_m::get_filtered_mailandsms_by_user() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 205
ERROR - 2024-08-27 01:31:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:32:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 01:32:06 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 01:32:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:32:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 01:33:14 --> Severity: error --> Exception: Call to undefined method Mailandsms_m::get_filtered_mailandsms_by_user() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 205
ERROR - 2024-08-27 02:09:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:09:55 --> Severity: Notice --> Undefined variable: mailandsmss C:\laragon\www\lms\mvc\views\mailandsms\index.php 40
ERROR - 2024-08-27 02:12:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:12:47 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:12:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:12:48 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:12:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:12:48 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:12:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:12:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:12:55 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:16:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:16:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:16:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:16:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:16:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:16:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:17:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:17:06 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:34 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:34 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:34 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:17:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:17:40 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:20:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:20:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:20:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:20:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:20:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:20:08 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:23:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:23:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:23:38 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:25:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:10 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:25:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:10 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:25:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:10 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:25:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:25:17 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:25:36 --> Severity: error --> Exception: Call to undefined method Mailandsms_m::get_filtered_mailandsms_by_user() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 205
ERROR - 2024-08-27 02:25:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:25:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:25:52 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:26:09 --> Severity: Warning --> unlink(C:\laragon\www\lms\mvc\cache/blade-6fdc8792d1dfb96320d6b037f2ea6bb8): No such file or directory C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 279
ERROR - 2024-08-27 02:26:10 --> Severity: Warning --> unlink(C:\laragon\www\lms\mvc\cache/blade-3c4578e54a2eaf28ba8d934ecc5815b6): No such file or directory C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 279
ERROR - 2024-08-27 02:26:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:26:37 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:26:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:26:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:26:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:26:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:26:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:26:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 02:26:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:26:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:26:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:27:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:27:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:27:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:27:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:27:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:27:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:29:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:54 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:29:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:59 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:29:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:29:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:30:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:12 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:31:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:30 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:32:08 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:32:12 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:32:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:55 --> Could not find the language line "additional_column_title"
ERROR - 2024-08-27 02:32:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:32:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:41:02 --> Severity: error --> Exception: Too few arguments to function Mailandsms_m::get_filtered_mailandsms_by_user(), 1 passed in C:\laragon\www\lms\mvc\controllers\Mailandsms.php on line 204 and exactly 2 expected C:\laragon\www\lms\mvc\models\Mailandsms_m.php 47
ERROR - 2024-08-27 02:45:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:45:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:45:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:45:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:45:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:45:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:45:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:45:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:45:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:45:44 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:47:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:47:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:47:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:47:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:47:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:48:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:02 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:02 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:02 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:48:08 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:48:36 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:48:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:48:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:48:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 02:48:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:49:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:49:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:50:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:50:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:50:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:50:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:50:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 02:50:30 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 02:50:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 02:57:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:03:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:03:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:03:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:03:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:03:50 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:04:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:04:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:04:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:04:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:04:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:04:56 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:05:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:05:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:05:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:05:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:05:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:05:10 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:06:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:06:28 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:06:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:40 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:40 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:40 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:06:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:06:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:06:46 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:08:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:08:29 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:08:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:08:29 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:08:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:08:29 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 50
ERROR - 2024-08-27 03:08:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:08:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:08:36 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:11:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:11:26 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:11:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:11:26 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:11:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:11:26 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:11:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:11:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:11:32 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:14:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:14:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:14:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:14:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:14:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:14:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:14:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:15:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:15:06 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:16:13 --> Severity: Notice --> Undefined variable: usertypeID C:\laragon\www\lms\mvc\controllers\Mailandsms.php 199
ERROR - 2024-08-27 03:16:13 --> Severity: Notice --> Undefined variable: usertypeID C:\laragon\www\lms\mvc\controllers\Mailandsms.php 204
ERROR - 2024-08-27 03:16:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:16:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:16:19 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:16:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:16:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:16:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:16:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:16:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:16:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 03:16:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:16:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:16:44 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:17:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:17:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:17:40 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:18:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:18:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:18:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 03:18:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:18:05 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 03:18:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 03:18:11 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 19:38:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 19:38:34 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 19:38:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 19:38:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 19:38:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 19:39:05 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 19:39:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 19:39:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 19:39:05 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 19:39:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 19:39:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 19:40:21 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 19:40:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-27 19:40:28 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-27 20:01:15 --> Severity: Notice --> unserialize(): Error at offset 458 of 463 bytes C:\xampppp\htdocs\lms\main\libraries\Cache\drivers\Cache_file.php 275
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:01:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:04:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:09:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:12:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:12:13 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:12:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:14:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:14:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:15:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:15:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:15:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:17:01 --> Severity: Notice --> Undefined variable: usertypeID C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 199
ERROR - 2024-08-27 20:17:01 --> Severity: Notice --> Undefined variable: usertypeID C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 204
ERROR - 2024-08-27 20:17:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:17:05 --> Severity: Notice --> Undefined variable: usertypeID C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 199
ERROR - 2024-08-27 20:17:05 --> Severity: Notice --> Undefined variable: usertypeID C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 204
ERROR - 2024-08-27 20:17:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:17:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:17:23 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:17:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:20:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:20:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:20:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:20:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:20:18 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:20:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:22:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:22:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:22:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:22:46 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:22:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:27:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:28:05 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:28:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:29:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:03 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:03 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:03 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:03 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:06 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:06 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:06 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:06 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:31:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:31:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:54 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:32:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:32:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:33:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:33:00 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:33:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:33:00 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:33:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:33:00 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:33:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:33:00 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 20:33:00 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:35:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:36:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:45:34 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = 1 OR `mailandsms`.`receiverID` = 1)
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:45:34 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 60
ERROR - 2024-08-27 20:47:28 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = 1 OR `mailandsms`.`receiverID` = 1)
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:47:28 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 60
ERROR - 2024-08-27 20:51:11 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 20:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:51:11 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 61
ERROR - 2024-08-27 20:51:12 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 20:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:51:12 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 61
ERROR - 2024-08-27 20:51:55 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = '1' OR `mailandsms`.`receiverID` = '5')
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:51:55 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 61
ERROR - 2024-08-27 20:54:31 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 20:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:54:31 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 60
ERROR - 2024-08-27 20:54:52 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 90
ERROR - 2024-08-27 20:55:10 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 20:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:55:10 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 60
ERROR - 2024-08-27 20:55:42 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:55:42 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 62
ERROR - 2024-08-27 20:57:32 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:57:32 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 20:57:34 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:57:34 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 20:57:34 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 20:57:34 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 20:57:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:01:13 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 21:01:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:01:13 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 60
ERROR - 2024-08-27 21:04:20 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '5'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:04:20 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 21:04:20 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '5'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:04:20 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 21:04:21 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '5'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:04:21 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 21:04:21 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '5'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:04:21 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 21:14:43 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '5'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:14:43 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 63
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:17:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:21:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:22:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:24:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:27:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:29:00 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE `senderID` = '1'
AND   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
 )
AND `senderusertypeID` = '5'
ERROR - 2024-08-27 21:29:00 --> Severity: error --> Exception: Call to a member function result() on boolean C:\xampppp\htdocs\lms\mvc\models\Mailandsms_m.php 59
ERROR - 2024-08-27 21:32:35 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = 1
OR `mailandsms`.`receiverID` = 1
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:32:35 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.receiverID' in 'where clause'
)

ERROR - 2024-08-27 21:32:35 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:32:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 43
ERROR - 2024-08-27 21:34:53 --> Query error: Unknown column 'mailandsms.receiverID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`receiverID` = '1'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 21:34:53 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.receiverID' in 'where clause'
)

ERROR - 2024-08-27 21:34:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:35:11 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:35:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:38 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:42 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:57 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:58 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:36:59 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:36:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:37:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:39:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:22 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:40:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:40:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:42:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:43:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:32 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:32 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:32 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:32 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:44:32 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 21:44:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:14 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:49:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 21:53:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:21 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '1'
OR `mailandsms`.`userID` = '1'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:00:21 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:00:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:41 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '2'
OR `mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:00:41 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:00:41 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:00:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:40 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 22:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`userID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:03:40 --> Query Error: Array
(
    [code] => 1064
    [message] => You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4
)

ERROR - 2024-08-27 22:03:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:03:53 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 22:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:03:53 --> Query Error: Array
(
    [code] => 1064
    [message] => You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4
)

ERROR - 2024-08-27 22:03:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:05:17 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 22:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:05:17 --> Query Error: Array
(
    [code] => 1064
    [message] => You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4
)

ERROR - 2024-08-27 22:05:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:05:20 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 22:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:05:20 --> Query Error: Array
(
    [code] => 1064
    [message] => You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4
)

ERROR - 2024-08-27 22:05:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:05:22 --> Severity: Notice --> Array to string conversion C:\xampppp\htdocs\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-27 22:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4 - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE (`mailandsms`.`senderID` = `?` OR `mailandsms`.`receiverID` = `?`) Array
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:05:22 --> Query Error: Array
(
    [code] => 1064
    [message] => You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'Array
ORDER BY `mailandsms`.`mailandsmsID` DESC' at line 4
)

ERROR - 2024-08-27 22:05:22 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:05:34 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '2'
OR `mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:05:34 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:05:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:08:23 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`senderID` = '2'
OR `mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:08:23 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:08:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:07 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:09:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:09:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:12 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:28 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:10:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:48 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:10:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:14 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:27 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:11:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:11:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_usertypeID"
ERROR - 2024-08-27 22:12:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:43 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:12:56 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:12:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:01 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:15:21 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 49
ERROR - 2024-08-27 22:15:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:18:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:19:43 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:19:43 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:19:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:25:47 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 587
ERROR - 2024-08-27 22:25:59 --> Severity: error --> Exception: syntax error, unexpected 'elseif' (T_ELSEIF) C:\xampppp\htdocs\lms\mvc\controllers\Mailandsms.php 587
ERROR - 2024-08-27 22:30:23 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 22:30:23 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 22:30:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:31:32 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampppp\htdocs\lms\mvc\controllers\Dashboard.php 754
ERROR - 2024-08-27 22:31:32 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampppp\htdocs\lms\main\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2024-08-27 22:31:32 --> Severity: Warning --> Unknown: Failed to write session data (user). Please verify that the current setting of session.save_path is correct (school_sessions) Unknown 0
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:32:47 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:33:03 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampppp\htdocs\lms\main\libraries\Email.php 1902
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:33:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:11 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:14 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:38:14 --> Could not find the language line "mailandsms_type_placeholder"
ERROR - 2024-08-27 22:38:33 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampppp\htdocs\lms\main\libraries\Email.php 1902
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:33 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:41 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:38:41 --> Could not find the language line "mailandsms_type_placeholder"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:38:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:39 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:41:39 --> Could not find the language line "mailandsms_type_placeholder"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:41:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:43:57 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:43:57 --> Could not find the language line "mailandsms_type_placeholder"
ERROR - 2024-08-27 22:43:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:44:26 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:44:26 --> Could not find the language line "mailandsms_type_placeholder"
ERROR - 2024-08-27 22:44:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:45:44 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:45:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:46:10 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:46:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:46:19 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:46:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:47:15 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:47:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:47:37 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:47:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:47:50 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:47:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:49:16 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:49:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:49:34 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:49:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:49:58 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:49:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 22:50:15 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 22:50:15 --> Could not find the language line "mailandsms_senderID"
ERROR - 2024-08-27 23:01:17 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampppp\htdocs\lms\main\libraries\Email.php 1902
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:01:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:04:40 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 106
ERROR - 2024-08-27 23:05:16 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 106
ERROR - 2024-08-27 23:05:25 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 106
ERROR - 2024-08-27 23:05:27 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 106
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:10 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:08:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:46 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:08:46 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:08:54 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:08:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:14 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:09:14 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:53 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:09:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:09:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:11:55 --> Query error: Unknown column 'mailandsms.userID' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`userID` = '2'
 )
ORDER BY `mailandsms`.`mailandsmsID` DESC
ERROR - 2024-08-27 23:11:55 --> Query Error: Array
(
    [code] => 1054
    [message] => Unknown column 'mailandsms.userID' in 'where clause'
)

ERROR - 2024-08-27 23:11:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:12:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:13:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:15:45 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\xampppp\htdocs\lms\mvc\views\mailandsms\index.php 47
ERROR - 2024-08-27 23:15:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:20 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:29 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:16:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:16:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:08 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:17:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:17:43 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:17:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:18:16 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:18:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:18:26 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:18:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:18:35 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:18:35 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:18:43 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:18:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:05 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-27 23:19:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:19:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:39 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:47:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-27 23:56:31 --> Could not find the language line "mailandsms_sender"
