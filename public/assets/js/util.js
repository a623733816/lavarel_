/**
 * Created by Administrator on 2018/4/2.
 */
 var _mm = (function (w,$) {
    var util_mm = {
        //请求方法
        request: function(param){
            var _this = this;
            $.ajax({
                type: param.method || 'GET',
                url: param.url || '',
                dataType: param.type || '',
                data: param.data || '',
                success: function(res){
                        typeof param.success === 'function'&& param.success(res);
                },
                error: function(err){
                    typeof param.error === 'function'&& param.error(err.statusText);
                }
            });
        },
        //成功提示的方法
        successTips: function(msg){
            alert( msg || '操作成功!')
        },
        //错误提示
        errorTips: function(msg){
            alert(msg || '哪里出问题了~')
        },
        //字段的验证,支持非空,手机,邮箱的判断
        validate: function(value,type){
            var value = $.trim(value);
            //非空的验证
            if('require' === type){
                return !!value;
            }
            //手机号的验证
            if('phone'=== type){
                return /^1\d{10}$/.test(value);
            }
            //邮箱验证
            if('email' === type){
                return /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/.test(value);
            }
        }
    }
    return util_mm;
})(window,jQuery);



