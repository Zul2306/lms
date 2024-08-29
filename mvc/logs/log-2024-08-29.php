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
