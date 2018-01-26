<div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    <form method="POST">
                        <div class="col-md-2 pull-right">
                            <div class="form-group">                                         
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                    <input type="text" name="cari" class="form-control" placeholder="Cari Aduan..." />
                                </div>
                            </div>
                        </div>
                    </form>                          
                </div>
                <div class="panel-body list-group">
                    <table>
                    <?php for ($i=0; $i < 15 ; $i++) {  ?>
                        <tr>
                            <td class="col-md-2">
                                <a href="#" class="list-group-item"><span class="fa fa-envelope"></span> <b>Nama Pengirim</b></a>
                            </td>
                            <td class="col-md-8">
                                <a href="" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculisSed facilisis suscipit eros ...</a>
                            </td>
                            <td class="col-md-1"><b><?= date('d-M-Y') ?></b></td>
                            <td class="col-md-1">
                                <div class="btn-group pull-right">
                                    <a href="#" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Pilihan <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Detail Aduan</a></li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modal_small">Disposisikan ke...</a>
                                            <ul data-toggle="dropdown" class="dropdown-menu" role="menu">
                                                <li><a href="#">Di disposisikan ke...</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Ke tempat sampah</a></li>                                                    
                                    </ul>
                                </div>
                                <!-- Modal disposisi begin -->
                                <div class="modal" id="modal_small" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="smallModalHead">Di disposisikan ke...</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">                                     
                                                        <select class="form-control select" data-live-search="true">
                                                            <option>Dinas Pariwisata dan Olah raga</option>
                                                            <option>Dinas Kependudukan dan catatan sipil</option>
                                                            <option>Dinas Kebersihan Umum</option>
                                                            <option>Dinas Ketenaga Kerjaan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-rounded btn-success" value="Kirim">
                                                    </div>
                                                </form>        
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Modal disposisi end -->       
                            </td>
                        </tr>
                    <?php } ?>
                    </table>           
                </div>
                <div class="panel-footer">
                    <center>
                        <ul class="pagination pagination-sm">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul> 
                    </center>   
                </div>
        </div>
    </div>
</div>