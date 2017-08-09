<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kullanıcı Duzenle
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">Düzenle</li>
          </ol>
        </section>
		
		<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-9">
              <!-- general form elements -->
              <div class="box box-primary">
			  
                <div class="box-header">
				
                  <h3 class="box-title">Kullanıcı Bilgileri</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?=base_url() ?>/admin/kullanicilar/guncelle/<?=$veri[0]->Id?>" method="post">
                  <div class="box-body">
				    <div class="form-group">
                      <label for="adsoy">Adı Soyadı</label>
                      <input type="text" class="form-control" id="adsoy" name="adsoy" value="<?=$veri[0]->adsoy?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email adresi</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?=$veri[0]->email?> ">
                    </div>
                    <div class="form-group">
                      <label for="sifre">Şifre</label>
                      <input type="password" class="form-control" id="sifre" name="sifre" value="<?=$veri[0]->sifre?>">
                    </div>
					<div class="form-group">
                      <label for="durum">Durum</label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="durum" >Aktif
                      </label>
                    </div>
					</div>
					<div class="form-group">
                      <label>Yetki* </label>
                      <select class="form-control" name="yetki">
					  
                        <option>Admin</option>
                        <option>Satış</option>
                        <option>Stok</option>
                        <option>Kargo</option>
                      </select>
                    
                  </div><!-- /.box-body -->
				  
				 <div class="box-footer">
				 
				 
				   <button type="submit" class="btn btn-primary">Güncelle</button>
				  
                    
                  </div>
                </form>
              </div><!-- /.box -->


              </div><!-- /.box -->
			  </div>
			  </section>
			  
			  </div>
