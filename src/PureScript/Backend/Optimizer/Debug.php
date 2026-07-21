<?php
$exports['time_'] = function($name) {
    return function($k) {
        return $k();
    };
};
$exports['traceImpl'] = function($a) {
    return function($k) use ($a) {
        var_dump($a);
        return $k();
    };
};
return $exports;
