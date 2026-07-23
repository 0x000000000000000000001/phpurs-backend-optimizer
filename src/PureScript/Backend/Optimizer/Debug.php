<?php
$exports['time_'] = function($name) {
    return function($k) {
        return $k(null);
    };
};
$exports['traceImpl'] = function($a) {
    return function($k) use ($a) {
        var_dump($a);
        return $k(null);
    };
};
return $exports;
