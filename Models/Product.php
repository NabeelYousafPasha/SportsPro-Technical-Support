<?php


class Product extends Model
{
    protected $table = 'products';

    protected $columns = [
        'productCode',
        'name',
        'version',
        'releaseDate',
    ];

    public function get()
    {
        $sql = "SELECT * FROM " . $this->table;
        $req = $this->prepare($sql);
        $req = $this->execute($req);
        return $this->fetchAll($req);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM '. $this->table .' WHERE productCode = ?';
        $req = $this->prepare($sql);
        return $this->execute($req, [$id]);
    }
}