<?php
//Format Tanggal Berbahasa Indonesia 
// Array Hari
$array_hari = array(1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
$hari = $array_hari[date('N')];

//Format Tanggal 
$tanggal = date('j');

//Array Bulan 
$array_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$bulan = $array_bulan[date('n')];

//Format Tahun 
$tahun = date('Y');

$file_name = "DETAIL SEPTICTANK RT " . $septictank_list['rt'] . " RW " . $septictank_list['rw'] . " - " . $tanggal . " " . $bulan . " " . $tahun . ".doc";
header("Expires: Mon, 26 Jul 2001 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Cache-control: private");
header("Content-Type: application/vnd.ms-word; name='word'");
header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');
?>

<html>
    <title>DETAIL SEPTICTANK RT <?php echo $septictank_list['rt'] ?>  RW  <?php echo $septictank_list['rw'] ?> <?php echo $tanggal . " " . $bulan . " " . $tahun; ?></title>
    <head> 
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>assets/admin/css/print.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    </head>
    <body onload="window.print()">
        <table class="table table-striped" width="50%">
            <tbody>
                <tr>
                    <td colspan="3" width="550">
                        <h2 style="text-align: center;"><strong>DATA DETAIL SEPTICTANK</strong></h2>
                    </td>
                </tr>
                <tr>
                    <td width="161"></td>
                    <td width="32"></td>
                    <td width="357"></td>
                </tr>
                <tr>
                    <td width="161">RT</td>
                    <td width="32">:</td>
                    <td width="357"> <?php echo set_value('rt', isset($septictank_list['rt']) ? $septictank_list['rt'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">RW</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('rw', isset($septictank_list['rw']) ? $septictank_list['rw'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Alamat</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('alamat', isset($septictank_list['alamat']) ? $septictank_list['alamat'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Ketersediaan Lahan</td>
                    <td width="32">:</td>
                    <td width="357"> <?php echo set_value('ketersediaan_lahan', isset($septictank_list['ketersediaan_lahan']) ? $septictank_list['ketersediaan_lahan'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Latitude</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('lat', isset($septictank_list['lat']) ? $septictank_list['lat'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Longitude</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('long', isset($septictank_list['long']) ? $septictank_list['long'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Anggaran</td>
                    <td width="32">:</td>
                    <td width="357">&nbsp;</td>
                </tr>
                <tr>
                    <td width="161">Sumber Data</td>
                    <td width="32">:</td>
                    <td width="357">&nbsp;</td>
                </tr>
                <tr>
                    <td width="161">Tahun Usulan</td>
                    <td width="32">:</td>
                    <td width="357">&nbsp;</td>
                </tr>
				<tr>
                    <td width="161">Persetujuan Warga</td>
                    <td width="32">:</td>
                    <td width="357">&nbsp;</td>
                </tr>
                <tr>
                    <td width="161">Keterangan</td>
                    <td width="32">:</td>
                    <td width="357">&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: </label>
            <div class="col-lg-10">
                <?
                $foto = isset($septictank_list['foto']) ? $septictank_list['foto'] : NULL;
                if ($foto === NULL) {
                    $foto = 'noimage.jpg';
                } else {
                    $foto = $foto;
                }


                $dokumen = isset($septictank_list['dokumen']) ? $septictank_list['dokumen'] : NULL;
                if ($dokumen === NULL) {
                    $dokumen = 'noimage.jpg';
                } else {
                    $dokumen = $dokumen;
                }
                ?>
                <figure>
                    <img src="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"  alt="img03">
                </figure
            </div>
        </div><!--end control-group-->

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: </label>
            <div class="col-lg-10">
                <button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($septictank_list['dokumen']) ? $septictank_list['dokumen'] : 'Belum Ada'); ?></button>

            </div>
        </div><!--end control-group-->
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Peta: </label>
            <div class="col-lg-10">
                <?php echo $map['html']; ?>
            </div>
        </div><!--end control-group-->

    </body>
</html>


<?php echo $map['js']; ?>