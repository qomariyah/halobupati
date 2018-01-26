
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>403 - Forbidden</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?= base_url()?>asset/be/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url()?>asset/be/css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">403</div>
            <div class="error-text">Forbidden :(</div>
            <div class="error-subtext">Opps! Anda mungkin tidak boleh mengakses halaman ini. Silahkan hubungi Administrator untuk informasi lebih lanjut.</div>
            <div class="error-actions">                                
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn-info btn-block btn-lg" onClick="history.back();">
                        <span class="fa fa-chevron-left"></span> Kembali</button>
                    </div>
                </div>                                
            </div>
        </div>                 
    </body>
</html>






