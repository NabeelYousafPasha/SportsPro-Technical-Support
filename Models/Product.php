<?php


class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'productCode';

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

    public function create(array $request = [])
    {
        $sql = "INSERT INTO ". $this->table ."
                (productCode, name, version, releaseDate)
                VALUES
                (:productCode, :name, :version, :releaseDate)";

        $req = $this->prepare($sql);

        return $this->execute($req, [
            'productCode' => $request['productCode'],
            'name' => $request['name'],
            'version' => $request['version'],
            'releaseDate' => $request['releaseDate'],
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM '. $this->table .' WHERE productCode = ?';
        $req = $this->prepare($sql);
        return $this->execute($req, [$id]);
    }
}