<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:49 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:08:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 00:08:57 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:09:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 00:09:48 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:10:28 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 00:10:28 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `studentID`
FROM `student`
WHERE `parentID` = Array
ERROR - 2024-08-29 00:10:28 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 29
ERROR - 2024-08-29 00:11:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:12 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:11:18 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:11:35 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 00:11:36 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `studentID`
FROM `student`
WHERE `parentID` = Array
ERROR - 2024-08-29 00:11:36 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 29
ERROR - 2024-08-29 00:11:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 00:11:36 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:11:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 00:11:56 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:49:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:49:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:49:55 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:50:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:50:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:52:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
OR `senderID` IN()
ORDER BY `mailandsmsID` DESC' at line 3 - Invalid query: SELECT *
FROM `mailandsms`
WHERE `users` IN()
OR `senderID` IN()
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-29 00:52:08 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 56
ERROR - 2024-08-29 00:52:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:52:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:52:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:55:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 00:55:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:55:13 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 00:58:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 00:58:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:13:48 --> Severity: error --> Exception: Call to undefined method student_m::get_student_ids_by_parent() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 198
ERROR - 2024-08-29 01:15:14 --> Query error: Unknown column 'parent_id' in 'where clause' - Invalid query: SELECT `studentID`
FROM `student`
WHERE `parent_id` = '1'
ERROR - 2024-08-29 01:15:14 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\laragon\www\lms\mvc\models\Student_m.php 187
ERROR - 2024-08-29 01:15:52 --> Severity: error --> Exception: Call to undefined method student_m::get_student_ids_by_parent() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 198
ERROR - 2024-08-29 01:15:54 --> Severity: error --> Exception: Call to undefined method student_m::get_student_ids_by_parent() C:\laragon\www\lms\mvc\controllers\Mailandsms.php 198
ERROR - 2024-08-29 01:16:59 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 01:17:00 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`users` = Array
AND `mailandsms`.`usertypeID` = 3
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-29 01:17:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 118
ERROR - 2024-08-29 01:30:18 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 01:30:18 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`users` = Array
AND `mailandsms`.`usertypeID` = 3
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-29 01:30:18 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 118
ERROR - 2024-08-29 01:30:21 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 01:30:21 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE `mailandsms`.`users` = Array
AND `mailandsms`.`usertypeID` = 3
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-29 01:30:21 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 118
ERROR - 2024-08-29 01:32:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:32:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 01:32:13 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:35:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:35:55 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:39:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:39:10 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:40:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:40:02 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:40:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:40:09 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:51:04 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:51:09 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-29 01:51:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:51:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:51:10 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:51:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:51:17 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:51:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:51:47 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:52:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:52:15 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:52:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:52:21 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:53:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:53:28 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:53:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:53:42 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:53:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:53:56 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:54:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:54:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:54:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:54:41 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:55:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:55:16 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:55:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:55:27 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:55:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:55:45 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:56:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:56:48 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:56:56 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-29 01:56:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:57:02 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 01:57:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 01:57:33 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:00:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:00:16 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:02:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:02:06 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:03:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:03:45 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:41:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:41:58 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:42:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:42:07 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:42:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:42:41 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:03 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:06 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-29 02:43:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:43:14 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:43:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 02:43:34 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:43:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:44:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 02:44:04 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:47:52 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:47:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:48:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 02:48:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:56:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:56:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:56:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:56:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 02:56:32 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 02:56:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 02:57:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 02:57:03 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:13:50 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 03:13:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 03:13:58 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:18:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 03:18:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 03:18:40 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:20:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 03:21:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 03:21:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:21:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 03:21:36 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:21:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 03:22:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 03:22:07 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 03:27:07 --> Query error: Table 'lms.parent_student' doesn't exist - Invalid query: SELECT `name`
FROM `student`
JOIN `parent_student` ON `parent_student`.`student_id` = `student`.`id`
WHERE `parent_student`.`parent_id` = '1'
ERROR - 2024-08-29 03:27:08 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\laragon\www\lms\mvc\models\Student_m.php 151
ERROR - 2024-08-29 03:27:14 --> Query error: Table 'lms.parent_student' doesn't exist - Invalid query: SELECT `name`
FROM `student`
JOIN `parent_student` ON `parent_student`.`student_id` = `student`.`id`
WHERE `parent_student`.`parent_id` = '1'
ERROR - 2024-08-29 03:27:14 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\laragon\www\lms\mvc\models\Student_m.php 151
ERROR - 2024-08-29 03:29:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:27:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:27:58 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:28:01 --> Severity: Notice --> Array to string conversion C:\laragon\www\lms\main\database\DB_query_builder.php 2442
ERROR - 2024-08-29 19:28:01 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `mailandsms`.*, `usertype`.`usertypeID`, `usertype`.`usertype`
FROM `mailandsms`
LEFT JOIN `usertype` ON `usertype`.`usertypeID` = `mailandsms`.`usertypeID`
WHERE   (
`mailandsms`.`users` = Array
OR `mailandsms`.`senderID` = '1'
 )
ORDER BY `mailandsmsID` DESC
ERROR - 2024-08-29 19:28:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Mailandsms_m.php 101
ERROR - 2024-08-29 19:29:41 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:29:41 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:29:41 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:29:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:29:47 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:33:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:33:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:33:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:34:09 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:34:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:30 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:34:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:34:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:24 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:36:30 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:36:32 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-29 19:36:32 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:36:38 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:36:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:37:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:37:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:37:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:37:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:37:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:37:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:37:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:37:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:37:45 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:38:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '4'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-29 19:38:09 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:38:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:38:38 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:38:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:38:50 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:39:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:39:27 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2211
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2212
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2213
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2214
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2292
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2293
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2294
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2295
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2503
ERROR - 2024-08-29 19:39:33 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2504
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2505
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2506
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3259
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3259
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3261
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3262
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3263
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3264
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3264
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3265
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3265
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 4555
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5234
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5234
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5235
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5236
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5236
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5237
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5239
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5521
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9984
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9984
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9986
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9987
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9988
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9988
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18741
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18743
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18749
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18753
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18757
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18787
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18787
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18788
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18789
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18789
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18790
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18792
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22214
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:39:34 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 69
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 69
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 74
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 74
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 76
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 77
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 90
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 90
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 96
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 96
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 98
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 99
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 115
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 115
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 119
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 119
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 123
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 124
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 138
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 142
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 143
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 143
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 146
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 150
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 154
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 158
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 514
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 707
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 709
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 709
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 851
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 853
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 853
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 867
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 869
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 870
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 872
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 873
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 873
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 875
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 945
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 947
ERROR - 2024-08-29 19:39:35 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 947
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3095
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3114
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3118
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3136
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 4674
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 5584
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Image\ImageProcessor.php 547
ERROR - 2024-08-29 19:39:36 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Image\ImageProcessor.php 1055
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:39:41 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:39:41 --> Severity: error --> Exception: Data has already been sent to output (C:\laragon\www\lms\main\core\Exceptions.php at line 271), unable to output PDF file C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9294
ERROR - 2024-08-29 19:39:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\lms\main\core\Exceptions.php:271) C:\laragon\www\lms\main\core\Common.php 570
ERROR - 2024-08-29 19:39:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:39:42 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:40:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:40:41 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:40:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:40:46 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2211
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2212
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2213
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2214
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2292
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2293
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2294
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2295
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2503
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2504
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2505
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 2506
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3259
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3259
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3260
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3261
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3262
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3263
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3264
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3264
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3265
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3265
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 3266
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 4555
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5234
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5234
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5235
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5236
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5236
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5237
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5238
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5239
ERROR - 2024-08-29 19:43:40 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 5521
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9984
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9984
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9985
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9986
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9987
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9988
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9988
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9989
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18741
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18743
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18749
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18753
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18757
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18787
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18787
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18788
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18789
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18789
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18790
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18791
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 18792
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22214
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 22215
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 69
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 69
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 70
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 74
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 74
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 75
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 76
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 77
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 90
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 90
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 91
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 96
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 96
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 97
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 98
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 99
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 115
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 115
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 116
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 119
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 119
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 120
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 123
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 124
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 138
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 139
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 142
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 143
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 143
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 146
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 147
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 150
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 151
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 154
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 155
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 158
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Color\ColorConverter.php 159
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 512
ERROR - 2024-08-29 19:43:41 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 514
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 516
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 707
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 709
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 709
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 851
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 853
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 853
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 867
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 869
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 870
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 872
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 873
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 873
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 875
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 945
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 947
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Gradient.php 947
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3095
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3114
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3118
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3136
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 3142
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 4674
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Otl.php 5584
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Image\ImageProcessor.php 547
ERROR - 2024-08-29 19:43:42 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\laragon\www\lms\mvc\libraries\mpdf\src\Image\ImageProcessor.php 1055
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23071
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23072
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23073
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type null C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23074
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:43:43 --> Severity: Notice --> Trying to access array offset on value of type int C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 23114
ERROR - 2024-08-29 19:43:44 --> Severity: error --> Exception: Data has already been sent to output (C:\laragon\www\lms\main\core\Exceptions.php at line 271), unable to output PDF file C:\laragon\www\lms\mvc\libraries\mpdf\src\Mpdf.php 9294
ERROR - 2024-08-29 19:43:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\lms\main\core\Exceptions.php:271) C:\laragon\www\lms\main\core\Common.php 570
ERROR - 2024-08-29 19:44:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:44:18 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-29 19:46:27 --> Severity: error --> Exception: syntax error, unexpected '}' C:\laragon\www\lms\mvc\controllers\Mailandsms.php 222
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:02 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-29 19:52:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-29 19:52:09 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
