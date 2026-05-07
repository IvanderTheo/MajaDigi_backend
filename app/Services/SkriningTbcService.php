<?php

namespace App\Services;

class SkriningTbcService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function calculate(array $data): string
    {
        $score = 0;

        if (($data['cough_duration'] ?? 0) >= 14) {
            $score += 2;
        }

        if (!empty($data['fever'])) {
            $score += 1;
        }

        if (!empty($data['weight_loss'])) {
            $score += 1;
        }

        if (!empty($data['night_sweat'])) {
            $score += 1;
        }

        return [
            'score' => $score,
            'result' => $score >= 2
                ? 'positive'
                : 'negative',
            'risk_level' => match (true) {
                $score >= 4 => 'high',
                $score >= 2 => 'medium',
                default => 'low',
            }
        ];
    }
}
