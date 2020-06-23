<?php
    class DB
    {
        public static $dbh;

        public static function getDbh()
        {
            $host = '127.0.0.1';
            $dbname = 'satellite';
            $user = 'root';
            $pass = '';

            self::$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            return self::$dbh;
        }

        public static function query($query)
        {
            $sth = self::getDbh()->prepare("$query");
            $sth->execute();
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        public static function queryAll($query)
        {
            $sth = self::getDbh()->prepare("$query");
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }


        public static function queryCount($query)
        {
            $sth = self::getDbh()->prepare("$query");
            $sth->execute();
            $data = $sth->fetchAll();
            $data = count($data);
            return $data;
        }

        public static function queryExecute($query)
        {
            $sth = self::getDbh()->prepare("$query");
            $sth->execute();
        }
    }