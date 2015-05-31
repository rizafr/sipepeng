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

$file_name = "DETAIL JALAN RT " . $jalan_list['rt'] . " RW " . $jalan_list['rw'] . " - " . $tanggal . " " . $bulan . " " . $tahun . ".doc";
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
    <title>DETAIL JALAN RT <?php echo $jalan_list['rt'] ?>  RW  <?php echo $jalan_list['rw'] ?> <?php echo $tanggal . " " . $bulan . " " . $tahun; ?></title>
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
                        <h2 style="text-align: center;"><strong>DATA DETAIL JALAN</strong></h2>
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
                    <td width="357"> <?php echo set_value('rt', isset($jalan_list['rt']) ? $jalan_list['rt'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">RW</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('rw', isset($jalan_list['rw']) ? $jalan_list['rw'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Alamat</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('alamat', isset($jalan_list['alamat']) ? $jalan_list['alamat'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Panjang</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('panjang', isset($jalan_list['panjang']) ? $jalan_list['panjang'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Lebar</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('lebar', isset($jalan_list['lebar']) ? $jalan_list['lebar'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Kedalaman</td>
                    <td width="32">:</td>
                    <td width="357"> <?php echo set_value('kedalaman', isset($jalan_list['kedalaman']) ? $jalan_list['kedalaman'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Ketersediaan Lahan</td>
                    <td width="32">:</td>
                    <td width="357"> <?php echo set_value('ketersediaan_lahan', isset($jalan_list['ketersediaan_lahan']) ? $jalan_list['ketersediaan_lahan'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Latitude Awal</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('lat_awal', isset($jalan_list['lat_awal']) ? $jalan_list['lat_awal'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Longitude Awal</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('long_awal', isset($jalan_list['long_awal']) ? $jalan_list['long_awal'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Latitude Akhir</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('lat_akhir', isset($jalan_list['lat_akhir']) ? $jalan_list['lat_akhir'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Longitude Akhir</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('long_akhir', isset($jalan_list['long_akhir']) ? $jalan_list['long_akhir'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Anggaran</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('anggaran', isset($jalan_list['anggaran']) ? $jalan_list['anggaran'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Sumber Data</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('sumber_data', isset($jalan_list['sumber_data']) ? $jalan_list['sumber_data'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Tahun Usulan</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('tahun_usulan', isset($jalan_list['tahun_usulan']) ? $jalan_list['tahun_usulan'] : 'Belum Ada'); ?></td>
                </tr>
                <tr>
                    <td width="161">Keterangan</td>
                    <td width="32">:</td>
                    <td width="357"><?php echo set_value('ket', isset($jalan_list['ket']) ? $jalan_list['ket'] : 'Belum Ada'); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: </label>
            <div class="col-lg-10">
                <?
                $foto = isset($jalan_list['foto']) ? $jalan_list['foto'] : NULL;
                if ($foto === NULL) {
                    $foto = 'noimage.jpg';
                } else {
                    $foto = $foto;
                }


                $dokumen = isset($jalan_list['dokumen']) ? $jalan_list['dokumen'] : NULL;
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
                <figure>
                    <img src="<?php echo base_url(); ?>assets/upload/foto/<?php echo $dokumen ?>"  alt="img03">
                </figure
                <button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($jalan_list['dokumen']) ? $jalan_list['dokumen'] : 'Belum Ada'); ?></button>

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