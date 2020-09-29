<?php


class Technician extends Model
{
    protected $table = 'technicians';

    protected $primaryKey = 'techID';

    protected $columns = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'password',
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
                (firstName, lastName, email, phone, password)
                VALUES
                (:firstName, :lastName, :email, :phone, :password)";

        $req = $this->prepare($sql);

        return $this->execute($req, [
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'phone' => $request['phone'],
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