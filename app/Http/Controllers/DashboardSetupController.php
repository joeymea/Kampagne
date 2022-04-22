<?php

namespace App\Http\Controllers;

use App\Facades\CampaignLocalization;
use App\Models\CampaignDashboard;
use App\Models\CampaignDashboardWidget;

class DashboardSetupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('campaign.member');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('dashboard', $campaign);

        // Validate dashboard
        $dashboard = request()->has('dashboard') ? CampaignDashboard::where('id', request()->get('dashboard'))->first() : null;
        $dashboards = CampaignDashboard::exclude($dashboard)->orderBy('name')->get();

        $widgets = CampaignDashboardWidget::onDashboard($dashboard)->positioned()->get();

        return view('dashboard.setup')
            ->with('campaign', $campaign)
            ->with('dashboards', $dashboards)
            ->with('dashboard', $dashboard)
            ->with('widgets', $widgets);
    }

    /**
     * Reorder the dashboard widgets
     */
    public function reorder()
    {
        $position = 0;
        $widgets = (array) request()->post('widgets', []);
        foreach ($widgets as $i => $widget) {
            $wi = CampaignDashboardWidget::findOrFail($widget);
            $wi->update([
                'position' => $position
            ]);
            $position++;
        }

        return response()->json([
            'success' => true
        ]);
    }
}
