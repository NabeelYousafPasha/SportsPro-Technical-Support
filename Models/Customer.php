<?php


class Customer extends Model
{
    protected $table = 'customers';

    protected $primaryKey = 'customerID';

    protected $columns = [
        'firstName',
        'lastName',
        'address',
        'city',
        'state',
        'postalCode',
        'countryCode',
        'phone',
        'email',
        'password',
    ];

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

    public function where($column, $operator, $value, $quotes = false)
    {
        if ($quotes) {
            $value = "'$value'";
        }

        return " WHERE $column $operator $value";
    }

    public function getWhere($column, $operator, $value)
    {
        $where = $this->where($column, $operator, $value);

        return $this->get($where);
    }

    public function firstWhere($column, $operator, $value)
    {
        $where = $this->where($column, $operator, $value);

        $sql = "SELECT * FROM " . $this->table;

        if ($where) {
            $sql .= $where . " ";
        }

        $req = $this->prepare($sql);
        $req = $this->execute($req);
        return $this->fetch($req);
    }

    public function create(array $request = [])
    {
        $sql = "INSERT INTO ". $this->table ."
                (firstName, lastName, address, city, state, postalCode, countryCode, phone, email, password)
                VALUES
                (:firstName, :lastName, :address, :city, :state, :postalCode, :countryCode, :phone, :email, :password)";

        $req = $this->prepare($sql);

        return $this->execute($req, [
            'firstName' => $request['firstName'],
            'lastName'  => $request['lastName'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'postalCode' => $request['postalCode'],
            'countryCode' => $request['countryCode'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
    }


    public function update($id, array $request)
    {
        $sql = "UPDATE ". $this->table ." SET 
                firstName = :firstName, 
                lastName = :lastName, 
                address = :address, 
                city = :city, 
                state = :state, 
                postalCode = :postalCode, 
                countryCode = :countryCode, 
                phone = :phone, 
                email = :email, 
                password = :password
                
                WHERE ". $this->primaryKey ." = :customerID";

        $req = $this->prepare($sql);

        return $req->execute([
            $this->primaryKey => $id,
            'firstName' => $request['firstName'],
            'lastName'  => $request['lastName'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'postalCode' => $request['postalCode'],
            'countryCode' => $request['countryCode'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM '. $this->table .' WHERE '. $this->primaryKey .' = ?';
        $req = $this->prepare($sql);
        return $this->execute($req, [$id]);
    }
}