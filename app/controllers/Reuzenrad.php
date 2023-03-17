<?php

class Reuzenrad extends BaseController
{
    private $reuzenradModel;
    public function __construct()
    {
        $this->reuzenradModel = $this->model('ReuzenradModel');
    }

    public function getReuzenrad()
    {
        $result = $this->reuzenradModel->getReuzenrad();

        $rows = "";
        foreach ($result as $reuzenrad) {
            $rows .= "  <tr>
                            <td>$reuzenrad->Id</td>
                            <td>$reuzenrad->name</td>
                        </tr>";
        }

        $data = [
            'title' => 'Overzicht Landen!', 
            'rows'  => $rows
        ];

        $this->view('reuzenrad/getReuzenrad', $data);
    }
}