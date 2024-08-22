<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-23 23:19:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'inilabs48.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 23:19:33 --> Severity: error --> Exception: Call to a member function result() on bool /Users/husnimubarok/Sites/localhost/inilabs48/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 23:19:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'inilabs48.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 23:19:51 --> Severity: error --> Exception: Call to a member function result() on bool /Users/husnimubarok/Sites/localhost/inilabs48/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 23:20:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'inilabs48.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 23:20:10 --> Severity: error --> Exception: Call to a member function result() on bool /Users/husnimubarok/Sites/localhost/inilabs48/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 23:20:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'inilabs48.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 23:20:22 --> Severity: error --> Exception: Call to a member function result() on bool /Users/husnimubarok/Sites/localhost/inilabs48/mvc/models/Conversation_m.php 42
