<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'sam';
   public $dbpassword = 'sam';
   public $dbdefault = 'glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
