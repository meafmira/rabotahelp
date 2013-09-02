app.directive('placeholder', function () {
    return function (scope, el, attrs) {
        var changed = false;
        el.addClass('placeholder');
        scope.$watch(attrs.value, function (value) {
            if (!value) {
                el.val(attrs.placeholder);
            }
        });
        el.bind('focus', function () {
            if (!changed) {
                el.val('');
                el.removeClass('placeholder');
            }
        });
        el.bind('blur', function () {
            if (el.val() == '') {
                el.val(attrs.placeholder);
                el.addClass('placeholder');
                changed = false;
            }
            else {
                changed = true;
            }
        });
    }
});