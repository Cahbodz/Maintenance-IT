<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('laporan pdf');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
             
            $html='<h3>Spesifikasi Komputer</h3>
            <div class="card-body p-0">
                    <table border="1px" bgcolor="#666666" cellpadding="3">
                        <tr bgcolor="#ffffff">
                            <td width="15%" align="center">Ip adress</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$ip_adres.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Ip gateway</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$ip_gateway.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Nama pc</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$nama_kom.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Nama user</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$nama_user.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Jenis inter</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$jenis_inter.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Level internet</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$level_inter.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Jenis pc</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$jenis_deks_netbook.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$merek_deks_netbook.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Tipe</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$tipe_deks_netbook.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">OS</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$os.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek monitor</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$merek_monit.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Size monitor</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$size_monit.'</td>
                        </tr>';
                         $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek processor</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$merek_procesr.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Tipe processor</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$tipe_procesr.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">speed processor</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$speed_procesr.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Amount ram</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$amount_ram.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Tipe ram</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$tipe_ram.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek hardisk</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$merek_hards.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Size hardisk</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$size_hards.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Merek graphich</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$merek_grapc.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Tipe graphich</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$tipe_grapc.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Memory graphich</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$memory_grapc.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Motherboard</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$mobo.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Power suply</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$power_suply.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Mouse</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$mouse.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">keyboard</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$keyboard.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Apk terinstall</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$apk_terinstall.'</td>
                        </tr>';
                        $html.='<tr bgcolor="#ffffff">
                            <td width="15%" align="center">Ups</td>
                            <td style="width:10px;">:</td>
                            <td style="width:60%;">'.$ups.'</td>
                        </tr>';

                           
                  
          
                    
            $html.='</table>';

            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
            $html.='?>';