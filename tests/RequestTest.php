<?php

use Pipe\Request;

beforeEach(function () {
    unset($_POST);
});
it("can get class from function", function () {
    expect(request())->toBeInstanceOf(Request::class);
});

it("returns empty array if no POST exists", function () {
    expect(request()->post())->toBeArray();
    expect(request()->post())->toBeEmpty();
});

it("returns POST key", function () {
    $_POST['k'] = 'v';
    expect(request()->post('k'))->toBeString();
    expect(request()->post('k'))->toEqual('v');
});
