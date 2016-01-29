/**
 * Created by P0017359 on 2016/1/20.
 */
var util=(function() {
    var isNullorEmpty = function (str) {
        var flag = false;
        if (str == null || str == undefined || str == "") {
            flag = true;
        }
        return flag;
    }
    return {
        isNullOrEmpty: isNullorEmpty
    };
})();