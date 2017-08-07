  <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kullanıcılar
            <small>Kontrol paneli</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=base_url() ?>/admin/home"> <i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?=base_url() ?>/admin/kullanicilar"> <i class="active"></i> Kullanıcılar</a></li>
			</ol>
        </section>
		 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
				 <h3 class="box-title">
				 
				 <a href="<?=base_url() ?>admin/kullanicilar/ekle" class="btn btn-block btn-success">Yeni Kullanıcı Ekle </a>
				 <a href="<?=base_url() ?>admin/kullanicilar/sil" class="btn btn-block btn-danger">Kullanıcı Sil</a>
                 <a href="<?=base_url() ?>admin/kullanicilar/duzenle" class="btn btn-block btn-primary">Düzenle</a>



                 </h3>
				 
               
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					  <th>Id</th>
                        <th>Kullanıcı Adı Soyadı</th>
                        <th>Email</th>
						<th>Şifre</th>
                        <th>Yetki</th>
                        <th>Durum</th>
						<th>Tarih</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					    foreach($veriler as $rs)
					    {
					?>
                      <tr>
			
					  
					    <td><?=$rs->Id?></td>
                        <td><?=$rs->adsoy?></td>
                        <td><?=$rs->email?></td>
                        <td><?=$rs->sifre?></td>
						<td><?=$rs->yetki?></td>
						<td><?=$rs->durum?></td>
						<td><?=$rs->tarih?></td>
                      </tr>
					  
					<?php
					    }
					?>
					
             
                    </tbody>
                   
               
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <ul class="pagination pagination-centered">
			     <li><a href="#">Prev</a></li>
				 <li class="active">
				    <a href="#">1</a>
				 </li>
				 <li><a href="#">2</a></li>
				 <li><a href="#">3</a></li>
				 <li><a href="#">4</a></li>
				 <li><a href="#">Next</a></li>
			  </ul>
			
				 

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
  
                      
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->