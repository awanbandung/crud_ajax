<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Mahasiswa</small>
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Data</a></div>
            </h1>
        </div>
	<div class="row">
		<div id="reload">
		<table class="table table-striped" id="mydata">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
					<th style="text-align: right;">Aksi</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
		</div>
	</div>
</div>

		<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIM</label>
                        <div class="col-xs-9">
                            <input name="nim" id="nim" class="form-control" type="text" placeholder="NIM" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Mahasiswa</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Mahasiswa" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group" >
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                          <select class="form-control" style="width:335px;" name="jen_kel" id="jen_kel">
                                <option selected>Laki-Laki</option>
                                <option>Perempuan</option>      
                              </select>       
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-9">
                              <select class="form-control" style="width:335px;" name="jurusan" id="jurusan">
                                <option selected>Teknik Informatika</option>
                                <option>Teknik Sipil</option>
                                <option>Otomasi Industri</option>
                                <option>Teknik Komputer</option>
                                <option>Komputerisasi Akuntansi</option>
                              </select>
                        </div>
                    </div>

                      <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIM</label>
                        <div class="col-xs-9">
                            <input name="nim_edit" id="nim2" class="form-control" type="text" placeholder="NIM" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Mahasiswa</label>
                        <div class="col-xs-9">
                            <input name="nama_edit" id="nama2" class="form-control" type="text" placeholder="Nama Mahasiswa" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                          <select class="form-control" style="width:335px;" name="jen_kel_edit" id="jen_kel2">
                                <option selected>Laki-Laki</option>
                                <option>Perempuan</option>      
                              </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-9">
                             <select class="form-control" style="width:335px;" name="jurusan_edit" id="jurusan2">
                                <option selected>Teknik Informatika</option>
                                <option>Teknik Sipil</option>
                                <option>Otomasi Industri</option>
                                <option>Teknik Komputer</option>
                                <option>Komputerisasi Akuntansi</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat_edit" id="alamat2" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="nim" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus data ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_mahasiswa();	//pemanggilan fungsi tampil barang.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil mahasiswa
		function tampil_data_mahasiswa(){
		    $.ajax({
		        type  : 'post',
		        url   : '<?php echo base_url('index.php/mahasiswa/data_mahasiswa')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nim+'</td>'+
		                        '<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].jen_kel+'</td>'+
                                '<td>'+data[i].jurusan+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].nim+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].nim+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/mahasiswa/get_mahasiswa')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nim, nama, jen_kel, jurusan, alamat){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nim_edit"]').val(data.nim);
            			$('[name="nama_edit"]').val(data.nama);
            			$('[name="jen_kel_edit"]').val(data.jen_kel);
                        $('[name="jurusan_edit"]').val(data.jurusan);
                        $('[name="alamat_edit"]').val(data.alamat);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="nim"]').val(id);
        });

		//Simpan Data Mahasiswa
		$('#btn_simpan').on('click',function(){
            var nim=$('#nim').val();
            var nama=$('#nama').val();
            var jen_kel=$('#jen_kel').val();
            var jurusan=$('#jurusan').val();
            var alamat=$('#alamat').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/mahasiswa/simpan_mahasiswa')?>",
                dataType : "JSON",
                data : {nim:nim , nama:nama, jen_kel:jen_kel, jurusan:jurusan, alamat:alamat},
                success: function(data){
                    $('[name="nim"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="jen_kel"]').val("");
                    $('[name="jurusan"]').val("");
                    $('[name="alamat"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_mahasiswa();
                }
            });
            return false;
        });

        //Update Data Mahasiswa
		$('#btn_update').on('click',function(){
            var nim=$('#nim2').val();
            var nama=$('#nama2').val();
            var jen_kel=$('#jen_kel2').val();
            var jurusan=$('#jurusan2').val();
            var alamat=$('#alamat2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/mahasiswa/update_mahasiswa')?>",
                dataType : "JSON",
                data : {nim:nim , nama:nama, jen_kel:jen_kel, jurusan:jurusan, alamat:alamat},
                success: function(data){
                    $('[name="nim_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="jen_kel_edit"]').val("");
                    $('[name="jurusan_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_mahasiswa();
                }
            });
            return false;
        });

        //Hapus Data Mahasiswa
        $('#btn_hapus').on('click',function(){
            var nim=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/mahasiswa/hapus_mahasiswa')?>",
            dataType : "JSON",
                    data : {nim:nim},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_mahasiswa();
                    }
                });
                return false;
            });

	});

</script>
</body>
</html>