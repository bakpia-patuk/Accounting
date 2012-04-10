<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
    <head>
        <?php echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
        <?php echo meta('robots', 'index, follow'); ?>
        <?php echo meta('generator', 'CodeIgniter Version 2.1.0'); ?>
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/core-gecko.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/colors.css.php" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/rokquicklinks.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/rokuserstats.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/rokuserchart.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/rokadminaudit.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>js/core.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/mootools-core.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/mootools-more.js" type="text/javascript"></script>
        <script type="text/javascript">
            window.addEvent('domready', function(){ new Fx.Accordion($$('div#panel-sliders.pane-sliders > .panel > h3.pane-toggler'), $$('div#panel-sliders.pane-sliders > .panel > div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_panel-sliders',$$('div#panel-sliders.pane-sliders > .panel > h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');i.removeClass('pane-down');if($$('div#panel-sliders.pane-sliders > .panel > h3').length==$$('div#panel-sliders.pane-sliders > .panel > h3.pane-toggler').length) Cookie.write('jpanesliders_panel-sliders',-1);},duration: 300,opacity: false,alwaysHide: true}); });
            var updateEditor = function(){
                var editor = document.id('editor_selection');
                var xhr = new Request({
                    url: 'index.php?process=ajax&model=quickeditor&id=42&editor=' + editor.value + '&nocache=' + (Date.now() + Math.random(0, 50000)).toInt(),
                    method: 'get',
                    onRequest: editorAjax.request,
                    onSuccess: editorAjax.success
                }).send();
            };

            var editorAjax = {
                'request': function(){
                    document.id('editor_spinner').setStyle('display', 'block');
                    document.id('editor_selection').getParent().getFirst().setStyle('margin-left', 10);
                },
                'success': function(){
                    document.id('editor_spinner').setStyle('display', 'none');
                    document.id('editor_selection').getParent().getFirst().setStyle('margin-left', 0);
                }
            };

            window.addEvent('domready', function(){
                document.id('editor_selection').addEvent('change', updateEditor);
            });

            var MCSessionTimeout = 900000;
            var MCSessionLang = {
                "expired": "Session Expired"
            }
		
            window.addEvent('domready', function(){
                new RokAudit('rok-audit', {start: 0, limit: 5, details: 'low', amount: 0, url: 'index.php?process=ajax&model=module&moduleid=89'});
            });
        </script>
    </head>
    <body id="mc-standard" class="transitions-enabled headers-fancy extendmenu-off menuwidth-small width-variable avatar-1 ltr option-com-cpanel task- view-">
        <div id="mc-frame">
            
            <div id="mc-header">
                <?php $this->load->view('header'); ?>
            </div>
            
            <div id="mc-body">
                <?php $this->load->view($main); ?>
            </div>
            
            <div id="mc-footer">
                <?php $this->load->view('footer'); ?>
            </div>
            
            <div id="mc-message"></div>
        </div>
    </body>
</html>
