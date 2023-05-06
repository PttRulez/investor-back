<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',

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
