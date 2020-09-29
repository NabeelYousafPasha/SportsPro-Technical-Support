<?php

require(ROOT . 'Models/Technician.php');

class TechnicianController extends Controller
{
    public function index()
    {
        $technicians = (new Technician())->get();

        $this->set(['technicians' => $technicians]);
        $this->render("index");
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $technician = new Technician();

            if ($technician->create($_POST))
            {
                $this->redirect('technician');
            }
        }

        // else GET
        $this->render("create");
    }

    public function delete($id)
    {
        $technician = new Technician();
        if ($technician->delete($id))
        {
            $this->redirect('technician');
        }
    }
}