<?php


class Incident extends Model
{
    protected $table = 'incidents';

    protected $primaryKey = 'incidentID';

    protected $columns = [
        'customerID',
        'productCode',
        'techID',
        'dateOpened',
        'dateClosed',
        'title',
        'description',
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
                (customerID, productCode, techID, dateOpened, title, description)
                VALUES
                (:customerID, :productCode, :techID, :dateOpened, :title, :description)";

        $req = $this->prepare($sql);

        return $this->execute($req, [
            'customerID' => $request['customerID'],
            'productCode' => $request['productCode'],
            'techID' => $request['techID'] ?? null,
            'dateOpened' => $request['dateOpened'],
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
    }
}