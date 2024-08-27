<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-26 02:05:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 02:05:54 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 02:06:00 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 02:06:00 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 02:06:05 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 02:06:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 02:06:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 02:06:11 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:27:26 --> Severity: Notice --> unserialize(): Error at offset 0 of 2416 bytes C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 275
ERROR - 2024-08-26 19:27:27 --> Severity: Notice --> Trying to access array offset on value of type bool C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 277
ERROR - 2024-08-26 19:27:31 --> Severity: Notice --> unserialize(): Error at offset 0 of 757 bytes C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 275
ERROR - 2024-08-26 19:27:31 --> Severity: Notice --> Trying to access array offset on value of type bool C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 277
ERROR - 2024-08-26 19:27:34 --> Severity: Warning --> unlink(C:\laragon\www\lms\mvc\cache/blade-6fdc8792d1dfb96320d6b037f2ea6bb8): No such file or directory C:\laragon\www\lms\main\libraries\Cache\drivers\Cache_file.php 279
ERROR - 2024-08-26 19:29:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:29:50 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:30:07 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:30:07 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:30:15 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 19:30:15 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 19:30:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:30:19 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:30:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:30:26 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:46:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:46:17 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:46:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:46:58 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:47:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:47:50 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:47:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:47:56 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:48:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:48:02 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:48:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 19:48:15 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:49:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 19:49:15 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:49:16 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:49:16 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:49:21 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 19:49:21 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 19:49:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 19:49:27 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 19:50:02 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:50:02 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 19:50:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 19:50:08 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:19:19 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:19:19 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:19:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:19:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:34:45 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:34:45 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:45 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:34:51 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:51 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:34:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:34:57 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:35:28 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:35:28 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:35:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:35:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:36:37 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:36:37 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:36:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:36:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:37:13 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:37:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:37:19 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:37:42 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:37:42 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:42 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:37:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:37:48 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:43:23 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:43:23 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:26 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:43:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:43:32 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:43:54 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'jamilah', 'Email', 'BBBBB', '2024', '2', '5')
ERROR - 2024-08-26 20:43:54 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:43:54 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:43:54 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:44:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:44:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:46:29 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:46:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:46:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:46:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:47:24 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad', 'Email', 'ZUL', '2024', '2', '5')
ERROR - 2024-08-26 20:47:25 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:47:25 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:47:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:47:30 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:48:40 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:48:40 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:48:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:48:45 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:49:06 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad ,jamilah ,Zulfikar ,Zulfikar Ridho Yuniar ,', 'Email', 'ZUL', '2024', '2', '5')
ERROR - 2024-08-26 20:49:06 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:49:06 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:06 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:49:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:49:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:50:49 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:50:49 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:50:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:50:55 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:52:18 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:52:18 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:52:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:52:23 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:52:29 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:52:29 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:52:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:52:35 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:53:01 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad', 'Email', 'BBBBBB', '2024', '2', '5')
ERROR - 2024-08-26 20:53:01 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:53:01 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:53:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:53:07 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:57:04 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:57:04 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:57:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '5'
AND `conversation_user`.`usertypeID` = '2'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2024-08-26 20:57:10 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:57:39 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:57:39 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:57:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 20:57:39 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:57:43 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 20:57:43 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 20:57:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 20:57:49 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 20:58:06 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'jamilah', 'Email', 'zull', '2024', '1', '1')
ERROR - 2024-08-26 20:58:06 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:58:06 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 20:58:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 20:58:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:01:47 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 21:01:47 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:01:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:01:53 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:02:09 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:02:09 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:02:09 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:02:10 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:02:10 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:02:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:02:15 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:08:23 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:08:23 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:08:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:08:23 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:08:23 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:08:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:08:29 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:15:26 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:15:26 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:15:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:15:26 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:15:26 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:15:44 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:15:44 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:15:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:15:44 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:15:44 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:15:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:15:49 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:19:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:19:31 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 48
ERROR - 2024-08-26 21:19:31 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:19:31 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:19:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:19:37 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:19:53 --> Query error: Unknown column 'sender_email' in 'where clause' - Invalid query: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:19:53 --> Database query error: SELECT *
FROM `mailandsms`
WHERE   (
`sender_email` IS NULL
OR `receiver_email` IS NULL
 )
ERROR - 2024-08-26 21:19:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:19:53 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:19:53 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:19:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:19:59 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:28:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:28:37 --> Severity: Notice --> Undefined property: stdClass::$usertype C:\laragon\www\lms\mvc\views\mailandsms\index.php 48
ERROR - 2024-08-26 21:28:37 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:28:37 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:28:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:28:43 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:28:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:28:55 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:28:55 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 21:29:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:29:01 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:29:30 --> Could not find the language line "mailandsms_sendername"
ERROR - 2024-08-26 21:29:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:29:58 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:30:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:30:03 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:33:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:33:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:33:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:33:10 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:33:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:33:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:33:39 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:40:57 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 21:40:57 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:41:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:41:03 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:41:18 --> Query error: Unknown column 'tipe' in 'where clause' - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad', 'Email', 'takbir', '2024', '1', '1')
ERROR - 2024-08-26 21:41:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:41:18 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:41:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:41:24 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:43:59 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 21:43:59 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:44:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:44:05 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:44:18 --> Query error: Unknown column 'tipe' in 'where clause' - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad', 'Email', 'zulllll', '2024', '1', '1')
ERROR - 2024-08-26 21:44:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:44:19 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:44:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:44:24 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:46:35 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 21:46:35 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:46:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:46:41 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:46:56 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'fuad', 'Email', 'zulz', '2024', '1', '1')
ERROR - 2024-08-26 21:46:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:46:56 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:47:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:47:03 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:49:05 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 21:49:05 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:49:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:49:11 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 21:49:27 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'jamilah', 'Email', 'zul<p><br></p>', '2024', '1', '1')
ERROR - 2024-08-26 21:49:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:49:27 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 21:49:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 21:49:33 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 22:08:01 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 22:08:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:08:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 22:08:06 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 22:08:16 --> Query error: Can't update table 'mailandsms' in stored function/trigger because it is already used by statement which invoked this stored function/trigger. - Invalid query: INSERT INTO `mailandsms` (`usertypeID`, `users`, `type`, `message`, `year`, `senderusertypeID`, `senderID`) VALUES ('2', 'jamilah', 'Email', 'bzbzbzbz', '2024', '1', '1')
ERROR - 2024-08-26 22:08:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:08:17 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:08:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 22:08:22 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 22:16:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:16:01 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:16:01 --> Severity: Notice --> Undefined property: stdClass::$sender C:\laragon\www\lms\mvc\views\mailandsms\index.php 64
ERROR - 2024-08-26 22:16:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 22:16:07 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 22:18:08 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 22:18:08 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:18:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 22:18:13 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 22:18:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:18:25 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 22:18:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 22:18:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 23:01:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:01:38 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:01:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 23:01:44 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 23:02:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:13 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:16 --> Could not find the language line "mailandsms_select_tem"
ERROR - 2024-08-26 23:02:16 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 23:02:22 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
ERROR - 2024-08-26 23:02:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:34 --> Could not find the language line "mailandsms_sender"
ERROR - 2024-08-26 23:02:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'lms.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2024-08-26 23:02:39 --> Severity: error --> Exception: Call to a member function result() on bool C:\laragon\www\lms\mvc\models\Conversation_m.php 42
