<?php

class Reuzenrad extends BaseController
{
    private $reuzenradModel;
    public function __construct()
    {
        $this->reuzenradModel = $this->model('reuzenradModel');
    }

    public function index()
    {
        $result = $this->reuzenradModel->getReuzenrad();
        // var_dump($result);

        $rows = '';
        foreach ($result as $reuzenrad) {
            $rows .= "<tr>
                    <td>$reuzenrad->naam</td>
                    <td>$reuzenrad->hoogte</td>
                    <td>$reuzenrad->land</td>
                    <td>$reuzenrad->kosten</td>
                    <td>$reuzenrad->aantalPassagiers</td>
                    
                    </tr>";
        }
        $data = [
            'title' => 'Top 5 hoogste reuzenrad ter wereld',
            'rows' => $rows
        ];

        $this->view('reuzenrad/index', $data);
    }
}
