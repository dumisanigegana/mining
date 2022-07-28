<?php

namespace App\Http\Controllers\Admin;

use Lava;

class HomeController
{
    public function index()
    {
        $finances = Lava::DataTable();

        $finances->addDateColumn('Year')
                ->addNumberColumn('Sales')
                ->addNumberColumn('Expenses')
                ->setDateTimeFormat('Y')
                ->addRow(['2004', 1000, 400])
                ->addRow(['2005', 1170, 460])
                ->addRow(['2006', 660, 1120])
                ->addRow(['2007', 1030, 54]);

        Lava::ColumnChart('Finances', $finances, [
            'title' => 'Company Performance',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);

        return view('admin.home');
    }
}
