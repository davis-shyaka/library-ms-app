<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Users / month',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'pie',
        ];

        $chart1 = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Users that only registered this month',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\User',
            'group_by_field' => 'name',
            'chart_type' => 'bar',
            'chart_color' => "0,255,255",
            'filter_field' => 'created_at',
            'filter_period' => 'month', // show users only registered this month
        ];

        $chart2 = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Borrowed Books / month',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\BorrowedBook',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'pie',
        ];

        $chart3 = new LaravelChart($chart_options);


        return view('dashboard', compact('chart1', 'chart2', 'chart3'));
    }
}
