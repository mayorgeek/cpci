<?php

namespace App\Filament\Resources\OfferingResource\Widgets;

use App\Models\Offering;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\LineChartWidget;

class OfferingChart extends LineChartWidget
{
    protected static ?string $heading = 'Offering Chart';

    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        if (auth()->user()->isMember())
        {
            return false;
        }

        return true;
    }

    protected function getData(): array
    {
        $data = Trend::model(Offering::class)
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
