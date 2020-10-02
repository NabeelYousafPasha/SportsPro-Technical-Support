<?php


class CustomerRegisteredProduct extends Model
{
    protected $table = 'registrations';

    protected $columns = [
        'customerID',
        'productCode',
        'registrationDate',
    ];

    public function create(array $request = [])
    {
        $sql = "INSERT INTO ". $this->table ."
                (customerID, productCode, registrationDate)
                VALUES
                (:customerID, :productCode, :registrationDate)";

        $req = $this->prepare($sql);

        return $this->execute($req, [
            'customerID' => $request['customerID'],
            'productCode' => $request['productCode'],
            'registrationDate' => $request['registrationDate'],
        ]);
    }

    public function getWhere($column, $operator, $value)
    {
        $where = $this->where($column, $operator, $value);

        return $this->get($where);
    }

    public function get($where = null)
    {
        $sql = "SELECT * FROM " . $this->table;

        if ($where) {
            $sql .= $where . " ";
        }

        $req = $this->prepare($sql);
        $req = $this->execute($req);
        return $this->fetchAll($req);
    }
}