<?php

namespace App\Http\Controllers;

use App\Models\Visiting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $now = Carbon::now();

        $stats = [
            'today' => Visiting::whereDate('visit_date', Carbon::today())->count(),
            'month' => Visiting::whereMonth('visit_date', $now->month)
                ->whereYear('visit_date', $now->year)
                ->count(),
            'year' => Visiting::whereYear('visit_date', $now->year)->count(),
            'total' => Visiting::count(),
        ];

        // Get all distinct years from the database
        $availableYears = Visiting::selectRaw('YEAR(visit_date) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->toArray();

        // If no data, use current year as fallback
        if (empty($availableYears)) {
            $availableYears = [$now->year];
        }

        // Build full Jan-Dec monthly data for each year
        $allYearsData = [];
        $monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($availableYears as $year) {
            $yearData = [];
            for ($m = 1; $m <= 12; $m++) {
                $count = Visiting::whereYear('visit_date', $year)
                    ->whereMonth('visit_date', $m)
                    ->count();
                $yearData[] = [
                    'month' => $monthNames[$m - 1],
                    'value' => $count,
                ];
            }
            $allYearsData[$year] = $yearData;
        }

        // Default chart data = current year (or latest available year)
        $defaultYear = in_array($now->year, $availableYears) ? $now->year : $availableYears[0];
        $monthlyData = $allYearsData[$defaultYear];

        $recentVisits = Visiting::latest()
            ->take(5)
            ->get()
            ->map(function ($visit) {
                return [
                    'name' => $visit->name,
                    'napi' => $visit->wbp_name,
                    'time' => $visit->visit_session,
                    'status' => $visit->approve ? 'Disetujui' : 'Menunggu',
                    'initials' => strtoupper(substr($visit->name, 0, 2)),
                ];
            });

        return view('app.dashboard', compact('stats', 'monthlyData', 'availableYears', 'defaultYear', 'allYearsData', 'recentVisits'));
    }
}
