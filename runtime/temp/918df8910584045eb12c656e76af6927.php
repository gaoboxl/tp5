<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\www\demo\tp5\public/../application/admin\view\rule\index.html";i:1506579678;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加菜单</title>
    <meta name="keywords" content="添加菜单">
    <meta name="description" content="添加菜单">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="__admin_style__/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="__admin_style__/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- 表格样式 -->
    <link href="__admin_style__/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="__admin_style__/css/animate.min.css" rel="stylesheet">
    <link href="__admin_style__/css/style.min.css?v=4.0.0" rel="stylesheet">
   <!--  <base target="_blank"> -->

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>权限列表</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="col-sm-1">
                            <a onclick="create(1,0)"  data-toggle="modal" data-target="#myModal" class="btn btn-primary ">添加</a>
                        </div>
                        
                        <table class="table table-striped table-bordered table-hover " id="editable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>权限名称</th>
                                    <th>权限规则</th>
                                    <th>状态</th>
									<th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!(empty($rules) || (($rules instanceof \think\Collection || $rules instanceof \think\Paginator ) && $rules->isEmpty()))): if(is_array($rules) || $rules instanceof \think\Collection || $rules instanceof \think\Paginator): $i = 0; $__LIST__ = $rules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule): $mod = ($i % 2 );++$i;?>
                                <tr class="gradeX" id="rem<?php echo $rule->id; ?>">
                                    <td><?php echo $rule->id; ?></td>
                                    <td><?php echo $rule->name; ?></td>
                                    <td><?php echo $rule->url; ?></td>
									<td class="center">
                                        <?php echo $rule->status; ?>
									</td>
                                    <td class="center">
                                        
                                        <?php if($rule['pid'] == 0): ?>
                                            <a class="glyphicon glyphicon-plus" title="添加" onclick="create(1,<?php echo $rule->id; ?>)"  data-toggle="modal" data-target="#myModal"></a>

                                        <?php endif; ?>

										<a class="glyphicon glyphicon-pencil" title="编辑" onclick="create(2,'',<?php echo $rule->id; ?>)"  data-toggle="modal" data-target="#myModal"></a>
										<a class="glyphicon glyphicon-trash"  title="删除" onclick="del(<?php echo $rule->id; ?>)" ></a>
										
									</td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>  
                            </tbody>

                        </table>
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 弹框 -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <form id="myform" method="post" action="<?php echo url('rule/save'); ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">权限管理</h4>
                </div>
                <input type="hidden" name="pid" id="rule_pid" />
                <input type="hidden" name="id" id="rule_id">
                <div class="ibox-content">
                    <div class="form-group">
                       <label >权限名称</label>
                            <input type="text"  name="name" id="rule_name" class="form-control" placeholder="请输入权限名称" />
                    </div>
                    <div class="form-group">
                        <label >权限规则</label>
                        <input type="text"  name="url" id="rule_url" class="form-control" placeholder="请输入权限规则" />
                    </div>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-info" >提交</button>
                </div>
            </div>
        </div>
     </form>
    </div>



    <script src="__admin_style__/js/jquery.min.js?v=2.1.4"></script>
    <script src="__admin_style__/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="__admin_style__/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="__admin_style__/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="__admin_style__/js/plugins/dataTables/dataTables.bootstrap.js"></script>
	<!-- 插件 -->
	<script src="__admin_style__/js/plugins/layer/layer.min.js"></script>
	<!-- 自定义 -->
    <script src="__admin_style__/dist/js/bootstrapValidator.js"></script>
	<script>
		  $(document).ready(function() {
       
        $('#myform')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        message: 'The username is not valid',
                        validators: {
                            notEmpty: {
                                message: '名称不能为空'
                            },
                            stringLength: {
                                max: 24,
                                message: '名称不能超过24个字符'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.\u4e00-\u9fa5]+$/,
                                message: '账户只能是中英文,下划线和数字'
                            }
                        }
                    },
                    url: {
                        validators: {
                            stringLength: {
                                max: 24,
                                message: '规则长度不能超过24个字符'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z/\.]+$/,
                                message: '规则只能是英文'
                            }
                        }
                    }

                }
            })
            .on('success.form.bv', function(e) {
                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(rs) {
                    layer.msg(rs.message)
                    if(rs.status == 200){
                        setTimeout(function (){
                            window.location.href = "<?php echo url('rule/index'); ?>"
                        },1000);
                    }
                    
                }, 'json');
            });
    });

         //删除
    function  del(id){
            
            layer.confirm('您确定要删除？', {
                skin: 'layui-layer-molv', //样式类名
                btn: ['确定','取消'] //按钮
                
                }, function(){
                    var url = '/admin/rule/delete/'+id;
                    $.get(url,function(rs){
                        layer.msg(rs.message);
                        if(rs.status == 200){
                            $('#rem'+id).remove();
                        }
                    });
                }
            );
        }
            
           function status(id,status)
           {
                $.get("<?php echo url('rule/status'); ?>",{id:id,status:status},function(rs){
                    layer.msg(rs.message)
                    if(rs.status == 200){
                      setTimeout(function (){
                            window.location.reload();
                      },1000);
                      
                    }
                });
           }
    
        //添加修改数据
        function create(type='',pid='',id=''){

            //添加
            if(type=='1'){
                $('#rule_name').val('');
                $('#rule_url').val('');
                $('#rule_pid').val(pid);

            }else{
                //编辑
                var url = '/admin/rule/edit/'+id;
                $.get(url,function(rs){

                    $('#rule_pid').val(rs.data.pid);
                    $('#rule_id').val(rs.data.id);
                    $('#rule_name').val(rs.data.name);
                    $('#rule_url').val(rs.data.url);

                });

            }

        }  





	</script>
   
</body>

</html>