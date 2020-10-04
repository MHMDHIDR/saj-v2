        <!-- Note for Users to Watch the Instructions Video -->
        <div class="col-md-12">
          <div class="video-instructions">
            <div class="alert alert-info alert-dismissible" role="alert" style="color:#ffffff;background-color: #ff0000;border-color: #bce8f1;font-size: 20px">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
              </button>
              <div class="enNote">
                Local WebSite ONLY! .. Local WebSite ONLY! .. Local WebSite ONLY! .. Local WebSite ONLY! .. 
              </div>
              <div class="arNote rtl">
                موقع محلي للتجربة فقط ... موقع محلي للتجربة فقط ... موقع محلي للتجربة فقط ... موقع محلي للتجربة فقط ...  
              </div>
            </div>
          </div>
        </div>
        <!-- Home Page Start -->
          <div class="col-md-8">
            <?php require_once $controllersDir . 'public/homeArticles.php' ?>
          </div>
          <div class="col-md-4">
            <?php require_once $functionsDir . 'get/get-home-sidebar-data.php' ?>
            <?php require_once $layoutsDir . 'sidebar/sidebar-last-published.php' ?>
            <?php require_once $layoutsDir . 'sidebar/sidebar-categories.php' ?>
          </div>
        <!-- Home Page End -->