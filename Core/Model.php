<?php

class Model
{
    protected $table;

    protected $primaryKey = 'id';

    protected $columns = [];

    protected $select = ['*'];


    public function select(array $selectColumns = ['*'])
    {
        $this->select = $selectColumns;

        return $this;
    }


    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->setAttribute($key, $value);
        }

        return $this;
    }


    public function setAttribute($key, $value)
    {
        $this->columns[$key] = $value;

        return $this;
    }


    public function prepare($query)
    {
        $req = Database::getBdd()->prepare($query);
        return $req;
    }


    public function execute( $req, array $params = [] )
    {
        $req->execute($params);
        return $req;
    }


    public function fetchAll($req)
    {
        return $req->fetchAll();
    }

}