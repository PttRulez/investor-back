<?php

namespace App\Filters;

use Illuminate\Http\Request;

class DealsFilter extends ApiFilter {
    protected $safeParams = [
        'portfolioId' => ['eq'],
        'amount' => ['eq', 'gt', 'lt'],
    ];

    protected $columnMap = [
        'portfolioId' => 'portfolio_id',
    ];

    public function transform(Request $request) {
        $eloQuery = [];

        foreach ($this->safeParams as $parameter => $operators) {
            $query = $request->query($parameter);

            if(!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$parameter] ?? $parameter;

            foreach($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }

            }
        }

        return $eloQuery;
    }
}
