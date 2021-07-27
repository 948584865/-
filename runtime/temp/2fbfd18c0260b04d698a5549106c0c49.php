<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"/www/wwwroot/admin.ly.com/public/../application/admin/view/product/edit.html";i:1626618718;s:68:"/www/wwwroot/admin.ly.com/application/admin/view/layout/default.html";i:1617358420;s:65:"/www/wwwroot/admin.ly.com/application/admin/view/common/meta.html";i:1617358420;s:67:"/www/wwwroot/admin.ly.com/application/admin/view/common/script.html";i:1617358420;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">
<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo htmlentities($row['name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Feature_ids'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-feature_ids" data-rule="required" data-source="feature/index" data-multiple="true" class="form-control selectpage" name="row[feature_ids]" type="text" value="<?php echo htmlentities($row['feature_ids']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Departure_ids'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-departure_ids" data-rule="required" data-source="departure/index" data-multiple="true" class="form-control selectpage" name="row[departure_ids]" type="text" value="<?php echo htmlentities($row['departure_ids']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('P_images'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-p_images" class="form-control" size="50" name="row[p_images]" type="text" value="<?php echo htmlentities($row['p_images']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="faupload-p_images" class="btn btn-danger faupload" data-input-id="c-p_images" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="true" data-preview-id="p-p_images"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-p_images" class="btn btn-primary fachoose" data-input-id="c-p_images" data-mimetype="image/*" data-multiple="true"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-p_images"></span>
            </div>
            <ul class="row list-inline faupload-preview" id="p-p_images"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Jingdian_ids'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-jingdian_ids" data-rule="required" data-source="jingdian/index" data-multiple="true" class="form-control selectpage" name="row[jingdian_ids]" type="text" value="<?php echo htmlentities($row['jingdian_ids']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Days'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-days" class="form-control" name="row[days]" type="number" value="<?php echo htmlentities($row['days']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Nights'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-nights" class="form-control" name="row[nights]" type="number" value="<?php echo htmlentities($row['nights']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Separateprice'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-separatePrice" class="form-control" step="0.01" name="row[separatePrice]" type="number" value="<?php echo htmlentities($row['separatePrice']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pricechild'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-priceChild" class="form-control" step="0.01" name="row[priceChild]" type="number" value="<?php echo htmlentities($row['priceChild']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Scheduling_content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-scheduling_content" class="form-control editor" rows="5" name="row[scheduling_content]" cols="50"><?php echo htmlentities($row['scheduling_content']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Price_content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-price_content" class="form-control editor" rows="5" name="row[price_content]" cols="50"><?php echo htmlentities($row['price_content']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Remark'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-remark" class="form-control " rows="5" name="row[remark]" cols="50"><?php echo htmlentities($row['remark']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($statusList) || $statusList instanceof \think\Collection || $statusList instanceof \think\Paginator): if( count($statusList)==0 ) : echo "" ;else: foreach($statusList as $key=>$vo): ?>
            <label for="row[status]-<?php echo $key; ?>"><input id="row[status]-<?php echo $key; ?>" name="row[status]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['status'])?$row['status']:explode(',',$row['status']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
