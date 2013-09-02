var app = angular.module('rabotahelp', ['ui.bootstrap']);

function MainCtrl($scope, $dialog) {
    // Inlined template for demo
    var callTemplate = '<div class="modal-callme">' +
        '<h3>Заказать звонок</h3>' +
        '<form>' +
        '<input type="text" class="form-control" placeholder="Ваше имя" required>' +
        '<input type="text" class="form-control" placeholder="Ваш телефон" required><br>' +
        '<input type="submit" value="Заказать" class="btn btn-large">' +
        '</form>' +
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

    $scope.opts = {
        backdrop: true,
        keyboard: true,
        backdropClick: true,
        template:  callTemplate // OR: templateUrl: 'path/to/view.html'
    };
    $scope.opts2 = {
        backdrop: true,
        keyboard: true,
        backdropClick: true,
        template:  reviewTemplate // OR: templateUrl: 'path/to/view.html'
    };
    $scope.showCallMe = function () {
        var d = $dialog.dialog($scope.opts);
        d.open();
    }
    $scope.showReview = function () {
        var d = $dialog.dialog($scope.opts2);
        d.open();
    }


}