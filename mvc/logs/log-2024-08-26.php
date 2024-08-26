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
