﻿
<!-- --------------- add quick useful bar ------------- -->
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
            <div class="btn-group pull-right">
              <a class="btn btn-primary todolist" href="#" data-placement='top' title="Popover Title"><i class="icon-leaf icon-white"></i> Todo</a>
              <a class="btn btn-primary mail" href="#" data-placement='top' title="Popover Title"><i class="icon-envelope icon-white"></i> 私信</a>
              <a class="btn btn-primary notice" href="#" data-placement='top' title="Popover Title"><i class="icon-bell icon-white"></i> 消息</a>
            </div>
        </div>
      </div>
    </div>

<!-- ---------------todolist popover---------------- -->
    <div id="todolist_content" style="display:none;">
      <div class="scrollable" style="height: 376px; overflow-y: auto">
        <h4>Overflowing text to show optional scrollbar</h4>
      </div>
    </div>
<!-- ---------------mail popover---------------- -->
    <div id="mail_content" style="display:none;">
      <div class="scrollable" style="height: 376px; overflow-y: auto">
        <h4>Overflowing text to show optional scrollbar</h4>
      </div>    
    </div>
<!-- ---------------notice popover---------------- -->
    <div id="notice_content" style="display:none;">
      <div class="scrollable" style="height: 376px; overflow-y: auto">
        <h4>Overflowing text to show optional scrollbar</h4>
      </div>
    </div>

<!-- end container -->
    </div>
</div>


<!-- ----------------the js files----------------- -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/holder/holder.js"></script>
    <script src="<?=base_url();?>assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?=base_url();?>assets/js/select2.min.js"></script>

    <script src="<?=base_url();?>assets/js/application.js"></script>

    <script src="<?=base_url();?>assets/js/wysihtml5-0.3.0.min.js"></script> 
    <script src="<?=base_url();?>assets/js/bootstrap-wysihtml5.js"></script>
    
<!-- -- this is for the bootstrap tooltip ------------------------------- -->
    <script type="text/javascript">
       $(function () {
           $("[rel='tooltip']").tooltip();
       });
    </script>

    <script type="text/javascript">
        $('.textarea').wysihtml5();
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.todolist').popover({ 
          html : true,
          content: function() {
          return $('#todolist_content').html();
          }
        });
        $('.mail').popover({ 
          html : true,
          content: function() {
          return $('#mail_content').html();
          }
        });
        $('.notice').popover({ 
          html : true,
          content: function() {
          return $('#notice_content').html();
          }
        }); 
      });
    </script>

  </body>
</html>