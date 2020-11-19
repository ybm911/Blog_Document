<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"/var/www/html/application/admin/view/admin/edit.tpl.php";i:1599667973;s:57:"/var/www/html/application/admin/view/public/toper.tpl.php";i:1599667973;s:58:"/var/www/html/application/admin/view/public/footer.tpl.php";i:1599667973;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>LzCMS-后台管理中心</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/global.css">
    <script type="text/javascript" src="/static/layui/layui.js"></script>
</head>
<body>
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
      <div class="main-tab-item">信息修改</div>
    </ul>
    <div class="layui-tab-content">
       <form class="layui-form">
        <div class="layui-tab-item layui-show">
          <input type="hidden" name="id" value="<?php echo $admin_user['id'] ?>">
          <?php echo Form::input('text','username',$admin_user['username'],'用户名','','请输入用户名','username');?>
          <?php echo Form::input('password','password','','密码','','请输密码','password');?>
          <?php echo Form::input('text','name',$admin_user['name'],'姓名','用于评论显示','请输入姓名','required');?>
          <?php echo Form::file('avatar',$admin_user['avatar'],'头像','','','images','','图片','image');?>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" lay-submit="" lay-filter="edit">立即提交</button>
            </div>
          </div>
        </div>   
      </form>
    </div>
</div>
<script type="text/javascript">
layui.use(['form', 'upload'],function(){
    var form = layui.form()
    ,jq = layui.jquery;

    //图片上传
    layui.upload({
      url: '<?php echo url("upload/upimage") ?>'
      ,elem:'#image'
      ,before: function(input){
        loading = layer.load(2, {
          shade: [0.2,'#000'] //0.2透明度的白色背景
        });
      }
      ,success: function(res){
        layer.close(loading);
        jq('input[name=avatar]').val(res.path);
        layer.msg(res.msg, {icon: 1, time: 1000});
      }
    }); 
    //图片预览
    jq('input[name=avatar]').hover(function(){
      jq(this).after('<img class="input-img-show" src="'+jq(this).val()+'" >');
    },function(){
      jq(this).next('img').remove();
    });

    //自定义验证规则
      form.verify({
        username: function(value){
          if(value.length < 4){
            return '用户名至少得4个字符啊';
          }
        }
        ,password: [/(.+){6,12}$/, '密码必须6到12位']
      });

    //监听提交
      form.on('submit(edit)', function(data){
        loading = layer.load(2, {
          shade: [0.2,'#000'] //0.2透明度的白色背景
        });
        var param = data.field;
        jq.post('<?php echo url("admin/edit"); ?>',param,function(data){
          if(data.code == 200){
            layer.close(loading);
            layer.msg(data.msg, {icon: 1, time: 1000}, function(){
              window.top.location.reload();
            });
          }else{
            layer.close(loading);
            layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
          }
        });
        return false;
      });
});
</script>
</body>
</html>