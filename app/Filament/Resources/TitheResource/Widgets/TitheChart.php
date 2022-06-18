<?php

namespace App\Filament\Resources\TitheResource\Widgets;

use App\Models\Tithe;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\LineChartWidget;

class TitheChart extends LineChartWidget
{
    protected static ?string $heading = 'Tithe Chart';

    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = Trend::model(Tithe::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
        return [
            'datasets' => [
                [
                    'label' => '',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
