<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyActivityRequest;
use App\Http\Resources\DailyActivityResource;
use App\Models\DailyActivity;
use Illuminate\Http\Request;

class DailyActivityController extends Controller
{
    public function store(DailyActivityRequest $request)
    {
        $request->validated();
        auth()->user();

        $dailyActivityData = $request->all();
        $dailyActivityData['user_id'] = auth()->user()->id;
        $dailyActivityData['date'] = $request->date ?? now()->format('Y-m-d');

        $dailyActivity = DailyActivity::create($dailyActivityData);
        $dailyActivity = new DailyActivityResource($dailyActivity);

        return $this->resStoreData($dailyActivity);
    }

    public function index()
    {
        return DailyActivityResource::collection(DailyActivity::all());
    }

    public function showById($id)
    {
        $dailyActivity = DailyActivity::find($id);
        return new DailyActivityResource($dailyActivity);
    }

    public function showCurrent(Request $request)
    {
        $user = auth()->user();
        $date = $request->query('date');
        $category = $request->query('category');

        $dailyActivity = DailyActivity::where('user_id', $user->id)->orderBy('created_at', 'desc');

        if ($date) {
            $dailyActivity = $dailyActivity->where('date', $date);
        }

        if ($category) {
            $dailyActivity = $dailyActivity->where('category', $category);
        }

        $dailyActivity = $dailyActivity->get();
        $totalKalori = round($dailyActivity->sum('kalori'), 2);
        $totalLemak = round($dailyActivity->sum('lemak'), 2);
        $totalProtein = round($dailyActivity->sum('protein'), 2);
        $totalKarbohidrat = round($dailyActivity->sum('karbohidrat'), 2);

        return response([
            'data' => DailyActivityResource::collection($dailyActivity),
            'total_kalori' => $totalKalori,
            'total_lemak' => $totalLemak,
            'total_protein' => $totalProtein,
            'total_karbohidrat' => $totalKarbohidrat,
        ]);
    }

    public function showTotalNutrisi(Request $request)
    {
        $user = auth()->user();
        $date = $request->query('date');

        $dailyActivity = DailyActivity::where('user_id', $user->id);

        if ($date) {
            $dailyActivity = $dailyActivity->where('date', $date);
        }

        $dailyActivity = $dailyActivity->get();
        $totalKaloriMakan = round($dailyActivity->where('category', 'Makan')->sum('kalori'), 2);
        $totalKaloriAktivitas = round($dailyActivity->where('category', 'Aktivitas')->sum('kalori'), 2);
        $totalKaloriSekarang = round($totalKaloriMakan - $totalKaloriAktivitas, 2);
        $totalLemak = round($dailyActivity->sum('lemak'), 2);
        $totalProtein = round($dailyActivity->sum('protein'), 2);
        $totalKarbohidrat = round($dailyActivity->sum('karbohidrat'), 2);

        return response([
            'total_kalori_makan' => $totalKaloriMakan,
            'total_kalori_aktivitas' => $totalKaloriAktivitas,
            'total_kalori_sekarang' => $totalKaloriSekarang,
            'total_lemak' => $totalLemak,
            'total_protein' => $totalProtein,
            'total_karbohidrat' => $totalKarbohidrat,
        ]);
    }

    public function update(DailyActivityRequest $request, $id)
    {
        $request->validated();
        auth()->user();

        $dailyActivity = DailyActivity::find($id);
        if (! $dailyActivity) {
            return $this->resDataNotFound('Daily Activity');
        }

        $dailyActivityData = $request->all();
        $dailyActivity->update($dailyActivityData);
        $dailyActivity = new DailyActivityResource($dailyActivity);

        return $this->resUpdatedData($dailyActivity);
    }

    public function delete($id)
    {
        auth()->user();

        $dailyActivity = DailyActivity::find($id);
        if (! $dailyActivity) {
            return $this->resDataNotFound('Daily Activity');
        }

        $dailyActivity->delete();

        return $this->resDataDeleted('Daily Activity');
    }
}
