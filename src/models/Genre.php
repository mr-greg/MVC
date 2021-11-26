<?php

class Genre extends Db
{

    public static function ReadAll()
    {
        $request="SELECT * FROM genre";
        $response=self::getDb()->prepare($request);
        $response->execute();
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }


    //Insert pour le insert ou le update grâce à replace au lieu de faire 2 fonctions séparées (et donc 2 conditions etc plus tard)
    public static function Insert(array $data)
    {
        $request="REPLACE INTO genre VALUES ( :id, :name)";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
    }


    public static function Delete(array $data)
    {
        $request="DELETE FROM genre WHERE id=:id";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
    }


    public static function find(array $data)
    {
        $request="SELECT * FROM genre WHERE id=:id";
        $response=self::getDb()->prepare($request);
        $response->execute($data);

        return $response->fetch(PDO::FETCH_ASSOC);

    }
}