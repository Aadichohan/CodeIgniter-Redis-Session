# CodeIgniter-Redis-Session

# Enable Redis Session in CodeIgniter 3
 step 1: 
        install php_redis.dll or .so if using Windows/Linux according to:
Note: check right architecture (x64/486) and PHP version 
check if thread safety enabled then download DLL file (architecture (x64/486)) Thread Safe else (architecture (x64/486)) non Thread

# For PHP version 7.1.4: 
Redis version 3.1.1
# For PHP version 8.0.3: 
Redis version 5.3.6\
Rest of process is same\
Then download php _redis.dll then copy file & paste into PHP /ext/ folder
Then add in php.ini file\
        extension=php_redis.dll\
        ;session.save_path="tcp://127.0.0.1:6379"\
        ;session.save_handler = "redis"

Then check if Redis is enabled in phpinfo() page some thing like this version may vary

Step 2: add this setting in config.php file and disable file base session

//$config['sess_driver'] = 'files';\
//$config['sess_cookie_name'] = 'ci_session';\
//$config['sess_expiration'] = 7200;\
//$config['sess_save_path'] = NULL;\
//$config['sess_match_ip'] = FALSE;\
//$config['sess_time_to_update'] = 7200;\
//$config['sess_regenerate_destroy'] = FALSE;



$config['sess_driver'] = 'redis';\
$config['sess_cookie_name'] = 'ci_session';\
$config['sess_expiration'] = 7200;\
// $config['sess_save_path'] = 'tcp://localhost:6379';\
$config['sess_save_path'] = 'tcp://localhost:6379?auth=123';\
$config['sess_match_ip'] = FALSE;\
$config['sess_time_to_update'] = 300;\
$config['sess_regenerate_destroy'] = FALSE;



# Redis Commands:
on redis-cli\
ping: to check if server is running result is pong\
set <keyname> <value>\
set name Ali\
get <keyname> \
set name \
result: Ali\
flushall : to remove all cachedata\
keys *: to get all keys\
monitor: to monitor realtime cache addition\

CONFIG SET requirepass <passvalue>: to set password\
CONFIG SET requirepass “”:  to remove password\

AUTH <passvalue>: to login into cli\
