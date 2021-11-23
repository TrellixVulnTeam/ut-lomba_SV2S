<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pretest</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= site_url('admin/pretest/add')?>" style="float: right;" class="btn btn-sm btn-warning shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Tambah
            </a>
            <!-- <div class="d-sm-flex align-items-center justify-content-between"> -->
                <!-- <h6 class="m-0 font-weight-bold text-warning mb-2">Daftar Course</h6> -->
            <!-- </div> -->
        </div>
        <div class="card-body">
            <?php
                if(!empty($this->session->flashdata('err_msg'))){
                    echo '
                        <div class="alert alert-danger" role="alert">
                           '.$this->session->flashdata('err_msg').'
                        </div>
                    ';        
                }
                if(!empty($this->session->flashdata('succ_msg'))){
                    echo '
                        <div class="alert alert-success" role="alert">
                            '.$this->session->flashdata('succ_msg').'
                        </div>
                    ';        
                }
            ?>
            <div class="table-responsive">
                    <table class="table table-bordered" id="tableKategori" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Nama Kategori</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 20%;">Aksi</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // foreach ($katcous as $item) {
                            //     $status         = ($item->ISPUBLISHED_KATCOU == "0" ? '<span class="badge badge-danger">Unpublished</span>' : '<span class="badge badge-success">Published</span>');

                            //     echo '
                            //         <tr>
                            //             <td>'.$item->NAMA_KATCOU.'</td>
                            //             <td>'.$status.'</td>
                            //             <td>
                            //                 <a class="btn btn-sm btn-primary" href="'.site_url('admin/kategori-course/edit/'.$item->ID_KATCOU).'" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            //                 <a class="btn btn-sm btn-success mdlPublish" data-id="'.$item->ID_KATCOU.'" data-stat="'.$item->ISPUBLISHED_KATCOU.'" data-toggle="modal" data-target="#mdlPublish" data-bs-toggle="tooltip" data-bs-placement="top" title="Publish"><i class="fa fa-cloud-upload-alt"></i></a>
                            //                 <a class="btn btn-sm btn-danger mdlHapus" data-id="'.$item->ID_KATCOU.'" data-label="'.$item->NAMA_KATCOU.'" data-toggle="modal" data-target="#mdlHapus" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                            //             </td>                            
                            //         </tr>
                                
                            //     ';
                            // }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Publish -->
<div class="modal fade" id="mdlPublish" tabindex="-1" aria-labelledby="mdlPublish" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Publish Kategori Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin untuk <span id="mdlPublish_label"></span> karegori course ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <form action="<?= site_url('admin/kategori-course/publish')?>" method="post">
                    <input type="hidden" name="id" id="mdlPublish_id">
                    <input type="hidden" name="stat" id="mdlPublish_stat">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Delete -->
<div class="modal fade" id="mdlHapus" tabindex="-1" aria-labelledby="mdlHapus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Kategori Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin untuk menghapus kategori course <span></span> ?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <form action="<?= site_url('admin/kategori-course/destroy')?>" method="post">
                    <input type="hidden" name="id" id="mdlHapus_id">
                    <button type="submit" class="btn btn-success">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tableKategori').DataTable();
    })
    $('#tableKategori tbody').on('click', '.mdlPublish', function(){
        const id = $(this).data('id');
        const stat = $(this).data('stat');

        $('#mdlPublish_id').val(id);
        $('#mdlPublish_stat').val(stat == "1" ? "0" : "1");
        $('#mdlPublish_label').html(stat == "1" ? "meunpublish" : "mepublish");
    })
    $('#tableKategori tbody').on('click', '.mdlHapus', function(){
        const id = $(this).data('id');
        const label = $(this).data('label');

        $('#mdlHapus_id').val(id);
        $('#mdlHapus_label').html(label);
    })
</script>