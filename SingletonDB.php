<?php

class SingletonDB
{

    /**
     * @
     * var string to be used with a sprintf + Config file for cleaning code.
     */
    private static string $dsn = "mysql:host=%s;dbname=%s;charset=%s";
    private static ?PDO $objectPDO = null;

    public function __construct()
    {

        try {
            $dsn = sprintf(self::$dsn, Config::DB_SERVER, Config::DB_NAME, Config::DB_CHARSET);
            self::$objectPDO = new PDO($dsn, Config::DB_USERNAME, Config::DB_PASSWORD);
            self::$objectPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion ok <br>";

        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    /**
     * function to get a single instance of the class SingletonBD.
     * @return PDO|null
     */
    public static function dbConnect(): ?PDO
    {
        if (self::$objectPDO === null) {
            new self;
        }
        return self::$objectPDO;
    }
}