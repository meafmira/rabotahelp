var app = angular.module('rabotahelp', ['ui.bootstrap']);

function CallCtrl($scope, $http, dialog) {
    $scope.sendCall = function () {
        $scope.called = true;
        $http.post('/calls', 'name=' + $scope.callName + '&phone=' + $scope.callPhone)
            .success(function (resp) {
            })
            .error(function () {
                $scope.called = false;
            });
    }
    $scope.close = function () {
        dialog.close();
    }
}

function MainCtrl($scope, $dialog, $http) {
    // Inlined template for demo
    var callTemplate = '<div class="modal-callme">' +
        '<h3>Заказать звонок</h3>' +
        '<div class="message" ng-show="called">' +
        'Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.' +
        '</div>' +
        '<div ng-hide="called">' +
        '<form ng-submit="sendCall()" name="callForm">' +
        '<input type="text" ng-model="callName" class="form-control" placeholder="Ваше имя" required>' +
        '<input type="text" ng-model="callPhone" class="form-control" placeholder="Ваш телефон" required><br>' +
        '<input type="submit" value="Заказать" class="btn btn-large">' +
        '</form></div>' +
        '<a href="#" class="btn btn-large" ng-click="close()" ng-show="called">Закрыть</a>' +
        '</div>',
        reviewTemplate = '<div class="modal-review">' +
            '<h3>Отзыв</h3>' +
            '<form>' +
            '<input ng-model="reviewName" required type="text" class="form-control form-control-block" placeholder="Ваше имя">' +
            '<input ng-model="reviewProf" type="text" class="form-control form-control-block" placeholder="Ваша профессия">' +
            '<div style="text-align: left"><label>Ваше фото</label> <input type="file"></div>' +
            '<textarea ng-model="reviewText" required ng-min-length="50" ng-max-length="250" class="form-control form-control-block" placeholder="Отзыв"></textarea>' +
            '<input type="submit" value="Отправить отзыв" class="btn btn-large">' +
            '</form>' +
            '</div>';

    $scope.consulted = false;
    $scope.called = false;

    $scope.opts = {
        backdrop: true,
        keyboard: true,
        backdropClick: true,
        template:  callTemplate, // OR: templateUrl: 'path/to/view.html',
        controller: 'CallCtrl'
    };
    $scope.opts2 = {
        backdrop: true,
        keyboard: true,
        backdropClick: true,
        template:  reviewTemplate // OR: templateUrl: 'path/to/view.html'
    };
    var d;
    $scope.showCallMe = function () {
        d = $dialog.dialog($scope.opts);
        d.open();
    }
    $scope.closeCall = function () {
        dialog.close();
    }
    $scope.showReview = function () {
        var d = $dialog.dialog($scope.opts2);
        d.open();
    }
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    $scope.sendConsult = function () {
        $scope.consulted = true;
        $http.post('/consults', 'name=' + $scope.name + '&skype=' + $scope.skype + '&email=' + $scope.email)
            .success(function (resp) {

            })
            .error(function () {
                $scope.consulted = false;
            });
    }

}