<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Yeni Kullanıcı Ekle
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">Ekle</li>
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
                <form role="form" action="<?=base_url() ?>/admin/kullanicilar/kaydet" method="post">
                  <div class="box-body">
				    <div class="form-group">
                      <label for="adsoy">Adı Soyadı</label>
                      <input type="text" class="form-control" id="adsoy" name="adsoy">
                    </div>
                    <div class="form-group">
                      <label for="email">Email adresi</label>
                      <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="form-group">
                      <label for="sifre">Şifre</label>
                      <input type="password" class="form-control" id="sifre" name="sifre" >
                    </div>
					<div class="form-group">
                      <label for="durum">Durum</label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="durum" value="Evet"> Aktif
                      </label>
                    </div>
					<div class="checkbox">
                      <label>
                        <input type="checkbox" name="durum" value="Hayır"> Pasif
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
				 
				 
				   <button class="btn btn-primary" type="button">İptal</button>
				   <button class="btn btn-primary" type="reset">Resetle</button>
				   <button type="submit" class="btn btn-primary">Ekle</button>
				  
                    
                  </div>
                </form>
              </div><!-- /.box -->


              </div><!-- /.box -->
			  </div>
			  </section>
			  
			  </div>
