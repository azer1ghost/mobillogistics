window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});