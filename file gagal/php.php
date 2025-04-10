<div class="card">
                    <div class="card-block">
                        <div>
                            <form >
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="color-blue-grey-lighter" for="insert-id_kecamatan"><i class="font-icon font-icon-learn"></i> Pilih Bulan</label>
                                        <div class="form-control-wrapper">    
                                            <select class="bootstrap-select" name="bulan">
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="color-blue-grey-lighter" for="insert-id_sekolah"><i class="font-icon font-icon-learn"></i> Pilih Tahun</label>
                                        <div class="form-control-wrapper">    
                                            <select class="bootstrap-select" name="tahun">
                                                <?php 
                                                $query=mysql_query("SELECT * FROM kebutuhan_pegawai GROUP BY year(tanggal_data)",$connect);
                                                while($row=mysql_fetch_array($query)){
                                                    $data = explode('-',$row['tanggal_data']);
                                                    $tahun = $data[0];
                                                ?>
                                                <option value="<?php  echo $tahun; ?>"><?php  echo $tahun; ?></option>
                                                <?php 
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="color-blue-grey-lighter" for="insert-id_kecamatan"><i class="font-icon font-icon-learn"></i> Pilih Sekolah</label>
                                        <div class="form-control-wrapper">    
                                            <select  class="bootstrap-select" name="id_sekolah">
                                                <?php 
                                                $query=mysql_query("SELECT * FROM sekolah ORDER BY nm_sekolah ASC",$connect);
                                                while($row=mysql_fetch_array($query))
                                                {
                                                ?>
                                                <option value="<?php  echo $row['id_sekolah']; ?>"><?php  echo $row['nm_sekolah']; ?></option>
                                                <?php 
                                                }
                                                ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div  role="group">
                                        <label class="color-blue-grey-lighter"><i>&nbsp;</i></label>
                                            <button type="submit" class="btn btn-default font-icon font-icon-plus" data-toggle="tooltip" data-placement="top" title="Proses?"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div style="margin-bottom:100px;"></div>
                        
                        <table id="example" class="stripe row-border order-column display table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                            
                            
                            <thead>
                                    
                                    <tr>
                                        <th rowspan="2"><center>Kecamatan</center></th>
                                        <th rowspan="2"><center>Uraian</center></th>
                                            
                                        <th colspan="4"><center>PNS</center></th>
                                        <th colspan="3"><center>NON PNS</center></th>
                                        <th rowspan="2"><center>Jumlah</center></th>
                                        
                                        <th rowspan="2"><center>dd</center></th>
                                        
                                    </tr>
                                        
                                    <tr>
                                        <th>D</th>
                                        <th>A</th>
                                        <th>K</th>
                                        <th>L</th>
                                        
                                        <th>P3K</th>
                                        <th>THL</th>
                                        <th>HS</th>
                                        
                                        
                                    </tr>
                            </thead>
                        
                            <tbody>
                            
                            
                                <?php    
                                $bulan = $_POST['bulan'];
                                $tahun = $_POST['tahun'];
                                $id_sekolah = $_POST['id_sekolah'];
                                $sql = mysql_query("SELECT a.*, b.nm_kecamatan AS nm_kecamatan, c.nm_sekolah AS nm_sekolah, 
                                                    sum(a.islam_d) AS islam_d, sum(a.islam_a) AS islam_a, sum(a.islam_k) AS islam_k, sum(a.islam_l) AS islam_l, sum(a.islam_p3k) AS islam_p3k, sum(a.islam_thl) AS islam_thl, sum(a.islam_hs) AS islam_hs, 
                                                    sum(a.protestan_d) AS protestan_d, sum(a.protestan_a) AS protestan_a, sum(a.protestan_k) AS protestan_k, sum(a.protestan_l) AS protestan_l, sum(a.protestan_p3k) AS protestan_p3k, sum(a.protestan_thl) AS protestan_thl, sum(a.protestan_hs) AS protestan_hs, 
                                                    sum(a.katolik_d) AS katolik_d, sum(a.katolik_a) AS katolik_a, sum(a.katolik_k) AS katolik_k, sum(a.katolik_l) AS katolik_l, sum(a.katolik_p3k) AS katolik_p3k, sum(a.katolik_thl) AS katolik_thl, sum(a.katolik_hs) AS katolik_hs,
                                                    sum(a.ppkn_d) AS ppkn_d, sum(a.ppkn_a) AS ppkn_a, sum(a.ppkn_k) AS ppkn_k, sum(a.ppkn_l) AS ppkn_l, sum(a.ppkn_p3k) AS ppkn_p3k, sum(a.ppkn_thl) AS ppkn_thl, sum(a.ppkn_hs) AS ppkn_hs,
                                                    sum(a.indo_d) AS indo_d, sum(a.indo_a) AS indo_a, sum(a.indo_k) AS indo_k, sum(a.indo_l) AS indo_l, sum(a.indo_p3k) AS indo_p3k, sum(a.indo_thl) AS indo_thl, sum(a.indo_hs) AS indo_hs,
                                                    sum(a.inggris_d) AS inggris_d, sum(a.inggris_a) AS inggris_a, sum(a.inggris_k) AS inggris_k, sum(a.inggris_l) AS inggris_l, sum(a.inggris_p3k) AS inggris_p3k, sum(a.inggris_thl) AS inggris_thl, sum(a.inggris_hs) AS inggris_hs,
                                                    sum(a.matematika_d) AS matematika_d, sum(a.matematika_a) AS matematika_a, sum(a.matematika_k) AS matematika_k, sum(a.matematika_l) AS matematika_l, sum(a.matematika_p3k) AS matematika_p3k, sum(a.matematika_thl) AS matematika_thl, sum(a.matematika_hs) AS matematika_hs,
                                                    sum(a.ipa_d) AS ipa_d, sum(a.ipa_a) AS ipa_a, sum(a.ipa_k) AS ipa_k, sum(a.ipa_l) AS ipa_l, sum(a.ipa_p3k) AS ipa_p3k, sum(a.ipa_thl) AS ipa_thl, sum(a.ipa_hs) AS ipa_hs,
                                                    sum(a.ips_d) AS ips_d, sum(a.ips_a) AS ips_a, sum(a.ips_k) AS ips_k, sum(a.ips_l) AS ips_l, sum(a.ips_p3k) AS ips_p3k, sum(a.ips_thl) AS ips_thl, sum(a.ips_hs) AS ips_hs,
                                                    sum(a.seni_d) AS seni_d, sum(a.seni_a) AS seni_a, sum(a.seni_k) AS seni_k, sum(a.seni_l) AS seni_l, sum(a.seni_p3k) AS seni_p3k, sum(a.seni_thl) AS seni_thl, sum(a.seni_hs) AS seni_hs,
                                                    sum(a.penjaskes_d) AS penjaskes_d, sum(a.penjaskes_a) AS penjaskes_a, sum(a.penjaskes_k) AS penjaskes_k, sum(a.penjaskes_l) AS penjaskes_l, sum(a.penjaskes_p3k) AS penjaskes_p3k, sum(a.penjaskes_thl) AS penjaskes_thl, sum(a.penjaskes_hs) AS penjaskes_hs,
                                                    sum(a.keterampilan_d) AS keterampilan_d, sum(a.keterampilan_a) AS keterampilan_a, sum(a.keterampilan_k) AS keterampilan_k, sum(a.keterampilan_l) AS keterampilan_l, sum(a.keterampilan_p3k) AS keterampilan_p3k, sum(a.keterampilan_thl) AS keterampilan_thl, sum(a.keterampilan_hs) AS keterampilan_hs,
                                                    sum(a.tik_d) AS tik_d, sum(a.tik_a) AS tik_a, sum(a.tik_k) AS tik_k, sum(a.tik_l) AS tik_l, sum(a.tik_p3k) AS tik_p3k, sum(a.tik_thl) AS tik_thl, sum(a.tik_hs) AS tik_hs,
                                                    sum(a.muatan_d) AS muatan_d, sum(a.muatan_a) AS muatan_a, sum(a.muatan_k) AS muatan_k, sum(a.muatan_l) AS muatan_l, sum(a.muatan_p3k) AS muatan_p3k, sum(a.muatan_thl) AS muatan_thl, sum(a.muatan_hs) AS muatan_hs,
                                                    sum(a.bk_d) AS bk_d, sum(a.bk_a) AS bk_a, sum(a.bk_k) AS bk_k, sum(a.bk_l) AS bk_l, sum(a.bk_p3k) AS bk_p3k, sum(a.bk_thl) AS bk_thl, sum(a.bk_hs) AS bk_hs,
                                                    sum(a.petugas_perpus_d) AS petugas_perpus_d, sum(a.petugas_perpus_a) AS petugas_perpus_a, sum(a.petugas_perpus_k) AS petugas_perpus_k, sum(a.petugas_perpus_l) AS petugas_perpus_l, sum(a.petugas_perpus_p3k) AS petugas_perpus_p3k, sum(a.petugas_perpus_thl) AS petugas_perpus_thl, sum(a.petugas_perpus_hs) AS petugas_perpus_hs,
                                                    sum(a.petugas_lab_d) AS petugas_lab_d, sum(a.petugas_lab_a) AS petugas_lab_a, sum(a.petugas_lab_k) AS petugas_lab_k, sum(a.petugas_lab_l) AS petugas_lab_l, sum(a.petugas_lab_p3k) AS petugas_lab_p3k, sum(a.petugas_lab_thl) AS petugas_lab_thl, sum(a.petugas_lab_hs) AS petugas_lab_hs,
                                                    sum(a.admin_d) AS admin_d, sum(a.admin_a) AS admin_a, sum(a.admin_k) AS admin_k, sum(a.admin_l) AS admin_l, sum(a.admin_p3k) AS admin_p3k, sum(a.admin_thl) AS admin_thl, sum(a.admin_hs) AS admin_hs,
                                                    sum(a.penjaga_d) AS penjaga_d, sum(a.penjaga_a) AS penjaga_a, sum(a.penjaga_k) AS penjaga_k, sum(a.penjaga_l) AS penjaga_l, sum(a.penjaga_p3k) AS penjaga_p3k, sum(a.penjaga_thl) AS penjaga_thl, sum(a.penjaga_hs) AS penjaga_hs
                                                    FROM kebutuhan_pegawai a 
                                                    JOIN kecamatan b ON a.id_kecamatan = b.id_kecamatan JOIN sekolah c ON a.id_sekolah = c.id_sekolah
                                                    WHERE month(tanggal_data)='$bulan' AND year(tanggal_data)='$tahun' AND id_sekolah='$id_sekolah'
                                                    GROUP BY id_kecamatan 
                                                    ORDER BY id_kecamatan ASC");
                                while ($data = mysql_fetch_assoc($sql))
                                {
                                ?>
                                
                                <tr>
                                    
                                    <td rowspan=20><center><?php echo $data['nm_kecamatan'];?></center></td>
                                    
                                    <tr>
                                        <td rowspan="">Pend. Agama Islam</td>
                                        <td><center><?php echo $data['islam_d'];?></center></td>
                                        <td><center><?php echo $data['islam_a'];?></center></td>
                                        <td><center><?php echo $data['islam_k'];?></center></td>
                                        <td><center><?php echo $data['islam_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['islam_p3k'];?></center></td>
                                        <td><center><?php echo $data['islam_thl'];?></center></td>
                                        <td><center><?php echo $data['islam_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['islam_d'] + $data['islam_a'] + $data['islam_k'] + $data['islam_l'] + $data['islam_p3k'] + $data['islam_thl'] + $data['islam_hs']; ?></center></th>
                                    
                                        <td rowspan="19" align="center">
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <a href="page.php?edit-kebutuhan-pegawai-sekolah&kecamatan=<?php echo $data['id_kecamatan'];?>"class="btn btn btn-default" data-toggle="tooltip" data-placement="top" title="Detail?"><i class="font-icon font-icon-eye"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Pend. Agama Protestan</td>
                                        <td><center><?php echo $data['protestan_d'];?></center></td>
                                        <td><center><?php echo $data['protestan_a'];?></center></td>
                                        <td><center><?php echo $data['protestan_k'];?></center></td>
                                        <td><center><?php echo $data['protestan_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['protestan_p3k'];?></center></td>
                                        <td><center><?php echo $data['protestan_thl'];?></center></td>
                                        <td><center><?php echo $data['protestan_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['protestan_d'] + $data['protestan_a'] + $data['protestan_k'] + $data['protestan_l'] + $data['protestan_p3k'] + $data['protestan_thl'] + $data['protestan_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Pend. Agama Katolik</td>
                                        <td><center><?php echo $data['katolik_d'];?></center></td>
                                        <td><center><?php echo $data['katolik_a'];?></center></td>
                                        <td><center><?php echo $data['katolik_k'];?></center></td>
                                        <td><center><?php echo $data['katolik_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['katolik_p3k'];?></center></td>
                                        <td><center><?php echo $data['katolik_thl'];?></center></td>
                                        <td><center><?php echo $data['katolik_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['katolik_d'] + $data['katolik_a'] + $data['katolik_k'] + $data['katolik_l'] + $data['katolik_p3k'] + $data['katolik_thl'] + $data['katolik_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">PPKN</td>
                                        <td><center><?php echo $data['ppkn_d'];?></center></td>
                                        <td><center><?php echo $data['ppkn_a'];?></center></td>
                                        <td><center><?php echo $data['ppkn_k'];?></center></td>
                                        <td><center><?php echo $data['ppkn_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['ppkn_p3k'];?></center></td>
                                        <td><center><?php echo $data['ppkn_thl'];?></center></td>
                                        <td><center><?php echo $data['ppkn_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['ppkn_d'] + $data['ppkn_a'] + $data['ppkn_k'] + $data['ppkn_l'] + $data['ppkn_p3k'] + $data['ppkn_thl'] + $data['ppkn_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Bahasa Indonesia</td>
                                        <td><center><?php echo $data['indo_d'];?></center></td>
                                        <td><center><?php echo $data['indo_a'];?></center></td>
                                        <td><center><?php echo $data['indo_k'];?></center></td>
                                        <td><center><?php echo $data['indo_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['indo_p3k'];?></center></td>
                                        <td><center><?php echo $data['indo_thl'];?></center></td>
                                        <td><center><?php echo $data['indo_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['indo_d'] + $data['indo_a'] + $data['indo_k'] + $data['indo_l'] + $data['indo_p3k'] + $data['indo_thl'] + $data['indo_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Bahasa Inggris</td>
                                        <td><center><?php echo $data['inggris_d'];?></center></td>
                                        <td><center><?php echo $data['inggris_a'];?></center></td>
                                        <td><center><?php echo $data['inggris_k'];?></center></td>
                                        <td><center><?php echo $data['inggris_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['inggris_p3k'];?></center></td>
                                        <td><center><?php echo $data['inggris_thl'];?></center></td>
                                        <td><center><?php echo $data['inggris_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['inggris_d'] + $data['inggris_a'] + $data['inggris_k'] + $data['inggris_l'] + $data['inggris_p3k'] + $data['inggris_thl'] + $data['inggris_hs']; ?></center></th>
                                    
                                    </tr>
                                    <tr>
                                        <td rowspan="">Matematika</td>
                                        <td><center><?php echo $data['matematika_d'];?></center></td>
                                        <td><center><?php echo $data['matematika_a'];?></center></td>
                                        <td><center><?php echo $data['matematika_k'];?></center></td>
                                        <td><center><?php echo $data['matematika_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['matematika_p3k'];?></center></td>
                                        <td><center><?php echo $data['matematika_thl'];?></center></td>
                                        <td><center><?php echo $data['matematika_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['matematika_d'] + $data['matematika_a'] + $data['matematika_k'] + $data['matematika_l'] + $data['matematika_p3k'] + $data['matematika_thl'] + $data['matematika_hs']; ?></center></th>

                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">IPA</td>
                                        <td><center><?php echo $data['ipa_d'];?></center></td>
                                        <td><center><?php echo $data['ipa_a'];?></center></td>
                                        <td><center><?php echo $data['ipa_k'];?></center></td>
                                        <td><center><?php echo $data['ipa_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['ipa_p3k'];?></center></td>
                                        <td><center><?php echo $data['ipa_thl'];?></center></td>
                                        <td><center><?php echo $data['ipa_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['ipa_d'] + $data['ipa_a'] + $data['ipa_k'] + $data['ipa_l'] + $data['ipa_p3k'] + $data['ipa_thl'] + $data['ipa_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">IPS</td>
                                        <td><center><?php echo $data['ips_d'];?></center></td>
                                        <td><center><?php echo $data['ips_a'];?></center></td>
                                        <td><center><?php echo $data['ips_k'];?></center></td>
                                        <td><center><?php echo $data['ips_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['ips_p3k'];?></center></td>
                                        <td><center><?php echo $data['ips_thl'];?></center></td>
                                        <td><center><?php echo $data['ips_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['ips_d'] + $data['ips_a'] + $data['ips_k'] + $data['ips_l'] + $data['ips_p3k'] + $data['ips_thl'] + $data['ips_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Seni Budaya</td>
                                        <td><center><?php echo $data['seni_d'];?></center></td>
                                        <td><center><?php echo $data['seni_a'];?></center></td>
                                        <td><center><?php echo $data['seni_k'];?></center></td>
                                        <td><center><?php echo $data['seni_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['seni_p3k'];?></center></td>
                                        <td><center><?php echo $data['seni_thl'];?></center></td>
                                        <td><center><?php echo $data['seni_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['seni_d'] + $data['seni_a'] + $data['seni_k'] + $data['seni_l'] + $data['seni_p3k'] + $data['seni_thl'] + $data['seni_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Penjaskes</td>
                                        <td><center><?php echo $data['penjaskes_d'];?></center></td>
                                        <td><center><?php echo $data['penjaskes_a'];?></center></td>
                                        <td><center><?php echo $data['penjaskes_k'];?></center></td>
                                        <td><center><?php echo $data['penjaskes_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['penjaskes_p3k'];?></center></td>
                                        <td><center><?php echo $data['penjaskes_thl'];?></center></td>
                                        <td><center><?php echo $data['penjaskes_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['penjaskes_d'] + $data['penjaskes_a'] + $data['penjaskes_k'] + $data['penjaskes_l'] + $data['penjaskes_p3k'] + $data['penjaskes_thl'] + $data['penjaskes_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Keterampilan</td>
                                        <td><center><?php echo $data['keterampilan_d'];?></center></td>
                                        <td><center><?php echo $data['keterampilan_a'];?></center></td>
                                        <td><center><?php echo $data['keterampilan_k'];?></center></td>
                                        <td><center><?php echo $data['keterampilan_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['keterampilan_p3k'];?></center></td>
                                        <td><center><?php echo $data['keterampilan_thl'];?></center></td>
                                        <td><center><?php echo $data['keterampilan_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['keterampilan_d'] + $data['keterampilan_a'] + $data['keterampilan_k'] + $data['keterampilan_l'] + $data['keterampilan_p3k'] + $data['keterampilan_thl'] + $data['keterampilan_hs']; ?></center></th>
                                    
                                    </tr>
                                    <tr>
                                        <td rowspan="">TIK</td>
                                        <td><center><?php echo $data['tik_d'];?></center></td>
                                        <td><center><?php echo $data['tik_a'];?></center></td>
                                        <td><center><?php echo $data['tik_k'];?></center></td>
                                        <td><center><?php echo $data['tik_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['tik_p3k'];?></center></td>
                                        <td><center><?php echo $data['tik_thl'];?></center></td>
                                        <td><center><?php echo $data['tik_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['tik_d'] + $data['tik_a'] + $data['tik_k'] + $data['tik_l'] + $data['tik_p3k'] + $data['tik_thl'] + $data['tik_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Muatan Lokal</td>
                                        <td><center><?php echo $data['muatan_d'];?></center></td>
                                        <td><center><?php echo $data['muatan_a'];?></center></td>
                                        <td><center><?php echo $data['muatan_k'];?></center></td>
                                        <td><center><?php echo $data['muatan_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['muatan_p3k'];?></center></td>
                                        <td><center><?php echo $data['muatan_thl'];?></center></td>
                                        <td><center><?php echo $data['muatan_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['muatan_d'] + $data['muatan_a'] + $data['muatan_k'] + $data['muatan_l'] + $data['muatan_p3k'] + $data['muatan_thl'] + $data['muatan_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">BK/BP</td>
                                        <td><center><?php echo $data['bk_d'];?></center></td>
                                        <td><center><?php echo $data['bk_a'];?></center></td>
                                        <td><center><?php echo $data['bk_k'];?></center></td>
                                        <td><center><?php echo $data['bk_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['bk_p3k'];?></center></td>
                                        <td><center><?php echo $data['bk_thl'];?></center></td>
                                        <td><center><?php echo $data['bk_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['bk_d'] + $data['bk_a'] + $data['bk_k'] + $data['bk_l'] + $data['bk_p3k'] + $data['bk_thl'] + $data['bk_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Petugas Perpustakaan</td>
                                        <td><center><?php echo $data['petugas_perpus_d'];?></center></td>
                                        <td><center><?php echo $data['petugas_perpus_a'];?></center></td>
                                        <td><center><?php echo $data['petugas_perpus_k'];?></center></td>
                                        <td><center><?php echo $data['petugas_perpus_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['petugas_perpus_p3k'];?></center></td>
                                        <td><center><?php echo $data['petugas_perpus_thl'];?></center></td>
                                        <td><center><?php echo $data['petugas_perpus_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['petugas_perpus_d'] + $data['petugas_perpus_a'] + $data['petugas_perpus_k'] + $data['petugas_perpus_l'] + $data['petugas_perpus_p3k'] + $data['petugas_perpus_thl'] + $data['petugas_perpus_hs']; ?></center></th>
                                    
                                    </tr>
                                    <tr>
                                        <td rowspan="">Petugas Laboratorium</td>
                                        <td><center><?php echo $data['petugas_lab_d'];?></center></td>
                                        <td><center><?php echo $data['petugas_lab_a'];?></center></td>
                                        <td><center><?php echo $data['petugas_lab_k'];?></center></td>
                                        <td><center><?php echo $data['petugas_lab_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['petugas_lab_p3k'];?></center></td>
                                        <td><center><?php echo $data['petugas_lab_thl'];?></center></td>
                                        <td><center><?php echo $data['petugas_lab_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['petugas_lab_d'] + $data['petugas_lab_a'] + $data['petugas_lab_k'] + $data['petugas_lab_l'] + $data['petugas_lab_p3k'] + $data['petugas_lab_thl'] + $data['petugas_lab_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Pegawai Administrasi</td>
                                        <td><center><?php echo $data['admin_d'];?></center></td>
                                        <td><center><?php echo $data['admin_a'];?></center></td>
                                        <td><center><?php echo $data['admin_k'];?></center></td>
                                        <td><center><?php echo $data['admin_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['admin_p3k'];?></center></td>
                                        <td><center><?php echo $data['admin_thl'];?></center></td>
                                        <td><center><?php echo $data['admin_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['admin_d'] + $data['admin_a'] + $data['admin_k'] + $data['admin_l'] + $data['admin_p3k'] + $data['admin_thl'] + $data['admin_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td rowspan="">Penjaga Sekolah</td>
                                        <td><center><?php echo $data['penjaga_d'];?></center></td>
                                        <td><center><?php echo $data['penjaga_a'];?></center></td>
                                        <td><center><?php echo $data['penjaga_k'];?></center></td>
                                        <td><center><?php echo $data['penjaga_l'];?></center></td>
                                    
                                        <td><center><?php echo $data['penjaga_p3k'];?></center></td>
                                        <td><center><?php echo $data['penjaga_thl'];?></center></td>
                                        <td><center><?php echo $data['penjaga_hs'];?></center></td>
                                        
                                        <th><center><?php echo $data['penjaga_d'] + $data['penjaga_a'] + $data['penjaga_k'] + $data['penjaga_l'] + $data['penjaga_p3k'] + $data['penjaga_thl'] + $data['penjaga_hs']; ?></center></th>
                                    
                                    </tr>
                                    
                                </tr>
                                
                                 <?php 
                                } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>